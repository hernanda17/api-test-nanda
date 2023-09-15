<?php
defined('BASEPATH') or exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;
use \Firebase\JWT\JWT;
use Firebase\JWT\Key;

/**
 * Class Example
 *
 * @property User_model user_model
 * @property Authentication authentication
 * @property Validation_lib validation_lib
 */
class Checklist extends RestController
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(User_model::class, 'user_model');
    }

    public function login_post()
    {
        $exp = time() + 86400; 
        $jsonData = $this->post();   
        $username = $jsonData['username'];
        $password = $jsonData['password'];
        $user = $this->user_model->find($username);
        if (!$user || !$password) {
            $this->validation_lib->respondError('otentikasi login salah!');
        }
        $password_hash = sha1($password);

        if ($user->password !== $password_hash) {
            $this->validation_lib->respondError('otentikasi login salah!');
        }

        $token = array(
            "iss" => 'apprestservice',
            "aud" => 'pengguna',
            "iat" => time(), 
            "exp" => $exp, 
        );

        $jwt = JWT::encode($token, $this->authentication->getConfigToken()['secretkey'], 'HS256');
        $updateToken['token'] = $jwt;
        $edit = $this->user_model->edit($username, $updateToken);
        if (!$edit) {
            $this->validation_lib->respondError('Gagal update token!');
        }

        $this->user_model->update_token($jwt);
        $output = [
            'status' => 200,
            'message' => 'Berhasil login',
            "token" => $jwt,
            "expireAt" => $token['exp']
        ];
        $this->response($output, 200);
    }

    public function register_post()
    {
        $exp = time() + 86400; 
        $jsonData = $this->post();   
        $username = $jsonData['username'];
        $password = $jsonData['password'];
        $email = $jsonData['email'];
        $user = $this->user_model->find($username);
        if ($user) {
            $this->validation_lib->respondError('username sudah digunakan!');
        }
        $password_hash = sha1($password);
        $data['username']=$username;
        $data['password']=$password_hash;
        $data['email']=$email;

        $insert = $this->db->insert('api_user', $data);
        if ($insert) {
            $this->validation_lib->respondSuccess('Data berhasil ditambahkan!');
        } else {
            $this->validation_lib->respondError('Gagal menambahkan data user');
        }
 
        $output = [
            'status' => 200,
            'message' => 'Berhasil login',
            "token" => $jwt,
            "expireAt" => $token['exp']
        ];
        $this->response($output, 200);
    } 


}
