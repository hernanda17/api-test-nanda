<?php
defined('BASEPATH') or exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;

/**
 * Class Example
 *
 * @property checklist_model checklist_model
 * @property Authentication authentication
 * @property Validation_lib validation_lib
 */
class Checklist extends RestController
{
    function __construct()
    {
        parent::__construct();
        //jwt
        $this->authentication->init();

        $this->load->model(Checklist_model::class, 'checklist_model');
        $this->load->model(Item_model::class, 'Item_model');
        $this->load->config('wkhtmlpdf');  
    }

    public function index_get($id = 0)
    {
        $id_checklist = $this->uri->segment(3); 
        $id_checklist = strtolower($id_checklist);

        if($id_checklist!= "item")
        {
            $filters = $this->getApiFilters();
            $offset = $this->getApiOffset();
            $limit = $this->getApiLimit();
            if (!empty($id)) {
                $data = $this->checklist_model->find($id);
            } else {
                $data = $this->checklist_model->all($filters, $offset, $limit);
            }
        }else{ 
            $filters = $this->getApiFilters();
            $offset = $this->getApiOffset();
            $limit = $this->getApiLimit(); 
            $id_checklist = $this->uri->segment(2);
            
            $id_checklist = $this->uri->segment(2); 
            $fl = $this->uri->segment(4);
            if (!empty($fl)) {
                $data = $this->Item_model->find($fl,$id_checklist);
            } else {
                $data = $this->Item_model->all($filters,$id_checklist, $offset, $limit);
            } 
        }
        $this->validation_lib->respondSuccess($data);
    }

    public function index_post()
    {
        $this->form_validation->set_data($this->post());
        $this->form_validation->set_rules('name', 'nama role', 'trim'); 

        if (!$this->form_validation->run()) {
            $errors = $this->form_validation->get_array_errors();
            $this->validation_lib->respondError($errors);
        }
        $data = $this->post();
        $id_checklist = $this->uri->segment(3); 
        $id_checklist = strtolower($id_checklist);

        if($id_checklist!= "item")
        {
            $create = $this->checklist_model->add($data);
        }else{
            $id_checklist = $this->uri->segment(2);
            $data['id_checklist'] =  $id_checklist;
            $create = $this->Item_model->add($data);
        }

        $this->validation_lib->respondSuccess($create);
    }

    public function index_put($id)
    {  
            $id_checklist = $this->uri->segment(2); 
            $fl = $this->uri->segment(4);
            if( $fl != 'rename' )
            {
                    if (!empty($fl)) {
                        $data['status'] = 0;
                        $dataPut = $this->Item_model->edit($fl, $data);
                    if($dataPut){
                        $this->validation_lib->respondSuccess($dataPut);
                    }else{
                        $this->validation_lib->respondError('Gagal melakukan perubahan data!');
                    }
                }
            }else{
                $fl = $this->uri->segment(5);
                $data=$this->put();   
                $dataPut = $this->Item_model->edit($fl, $data);
                $this->validation_lib->respondSuccess($dataPut);
            }
    }

    public function index_delete($id)
    { 
        $fl = $this->uri->segment(4);
        $dataDelete = $this->Item_model->delete($fl);
        if($dataDelete){
            $this->validation_lib->respondSuccess($dataDelete);
        }else{
            $this->validation_lib->respondError('Gagal melakukan penghapusan data!');
        }
    }

    public function content_type_base64($encode_base64)
  	{
  		$decode = base64_decode($encode_base64);
  		$f = finfo_open();
  		$mime_type = finfo_buffer($f, $decode, FILEINFO_MIME_TYPE);

      return $mime_type;
  	}

    protected function getApiFilters()
    {
        $filtersParam = $this->input->get('filters');
        if (!is_array($filtersParam))
            $filtersParam = array();

        return $filtersParam;
    }

    protected function getApiLimit()
    {
        $limit = $this->input->get('limit');
        if (is_numeric($limit)) {
            return $limit;
        } else {
            return -1;
        }
    }

    protected function getApiOffset()
    {
        $offset = $this->input->get('offset');
        if (is_numeric($offset)) {
            return $offset;
        } else {
            return 0;
        }
    }

    public function test_pdf_get() 
    {
        $html = $this->load->view('click_template', array(), true);
        $wkhtmlpdf = $this->config->item('wkhtmlto');

        $config_pdf = $this->config->item('pdf_config');
        $config_path = $this->config->item('path_config');
        $wkhtmlpdf->setOptions($config_pdf['a4']);
        $wkhtmlpdf->addPage($html);
        $path = $config_path['default_save_path'] .'/' .date('Y-m-d-H-i-s').'.pdf';
        if (!$wkhtmlpdf->saveAs($path)) {
            $error = $wkhtmlpdf->getError();
            dd($error);
        }

        // Enable this to open generated file on new tab
        // if (!$wkhtmlpdf->send()) {
        //     $error = $wkhtmlpdf->getError();
        //     // ... handle error here
        // }

        // Enable this to download file
        $wkhtmlpdf->send($path, false, array(
            'Content-Length' => false,
        ));

        // Enable this to get the raw pdf as a string
        // $content = $wkhtmlpdf->toString();

        echo $path;

    }
}
