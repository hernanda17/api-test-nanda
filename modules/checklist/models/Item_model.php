<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item_model extends CI_Model
{
    /**
     * Role constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Find data.
     *
     * @param $id
     * @return mixed
     */
    public function find($id,$id_checklist)
    {
        return $this->db->get_where("checklist_item", array("id" => $id,"id_checklist" => $id_checklist, "deleted_at" => null))->row(0);
    }

    /**
     * Read all data.
     *
     * @return mixed
     */
    public function all($filters = array(),$id_checklist, $offset, $limit)
    {
        $filters['deleted_at'] = null;
        $filters['id_checklist'] = $id_checklist;
        if ($limit >= 0 || $offset > 0) {
            if ($limit < 0)
                $limit = PHP_INT_MAX;
            if ($offset < 0)
                $offset = 0;
            
            $this->db->limit($limit, $offset);
        }

        return $this->db->get_where("checklist_item", $filters)->result();
    }

    /**
     * Insert data.
     *
     * @param $data
     * @return mixed
     */
    public function add($data)
    {
        return $this->db->insert('checklist_item', $data);
    }

    /**
     * Edit data.
     *
     * @param $data
     * @return mixed
     */
    public function edit($id, $data)
    { 
        $this->db->trans_start();
        $this->db->where('id', $id);
        $this->db->update('checklist_item', $data);
        $this->db->trans_complete();
        //anticipate if row doesn't have any data change, it will return num_rows 0. Let's check if query doesn't have error return true
        if ($this->db->trans_status() === FALSE) {
            // generate an error... or use the log_message() function to log your error
            return false;
        }
        return true;
    }

    /**
     * Delete data.
     *
     * @param $id
     * @return int
     */
    public function delete($id)
    {
        $data['deleted_at'] = date("Y-m-d H:i:s");
        return  $this->edit($id, $data);
    }
}
