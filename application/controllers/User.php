<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 15/11/17
 * Time: 20:00
 */
class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("user_provider");
        $this->data = [];
    }

    public function index()
    {
        $this->load->view('user/index');
    }

    public function login()
    {
        $this->load->view('user/login');
    }

    public function register()
    {
        $this->load->view('user/register');
    }

    public function upload()
    {
        $this->load->view('user/upload');
    }

    public function handle_register()
    {
        $this->data["email"] = $this->input->post("email");
        $this->data["name"] = $this->input->post("name");
        $this->data["qq"] = $this->input->post("qq");
        $this->data["password"] = $this->input->post("password");
        $this->data["regtime"] = time();
        $this->user_provider->save($this->data);
        $this->load->view('user/login');
    }

    public function handle_login()
    {
        $this->data["email"] = $this->input->post("email");
        $this->data["password"] = $this->input->post("password");
        $user_info = $this->user_provider->check($this->data);
        if (!$user_info) {
            return false;
        }
        var_dump($user_info);
        return true;
    }

    public function handle_upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'html|doc|docx|zip|rar|pdf';
        $config['max_size'] = 202400;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('file_data')) {
            $error = $this->upload->display_errors();
            echo json_encode($error);
        } else {
            $data = $this->upload->data();
            echo json_encode($data);
        }
    }
}