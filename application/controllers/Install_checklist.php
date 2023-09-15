<?php
defined('BASEPATH') or exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;
use \Firebase\JWT\JWT;
use Firebase\JWT\Key;

/**
 * Class Example
 *
 * @property Authentication authentication
 * @property Validation_lib validation_lib
 */
class Install_checklist extends CI_Controller
{

    public function index()
    {
        $this->load->database();

        if ($this->db->table_exists('api_checklist')) {
            $this->validation_lib->respondError('Table sudah tersedia!');
        } else {
            //        bikin query untuk create table - TO DO dan alter table
            $queryCreateTable = "CREATE TABLE `api_checklist` (
                  `id` int(11) NOT NULL AUTO_INCREMENT,
                  `id_user` varchar(100) NOT NULL,
                  `name` varchar(255) DEFAULT NULL
                  PRIMARY KEY (`id`)
                ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1";
            $tableTransaction = $this->db->query($queryCreateTable);
            if ($tableTransaction) {

                $this->validation_lib->respondSuccess('Table berhasil ditambahkan!');  
            }else{
                $this->validation_lib->respondError('Gagal menambahkan table user');

            }
        }
    }
}
