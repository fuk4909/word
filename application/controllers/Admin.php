<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 15/11/17
 * Time: 20:00
 */
class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("user_provider");
        $this->data = [];
    }

    public function manage()
    {
        $this->data["user_info_list"] = $this->user_provider->show();
        if (!$this->data) {
            return false;
        }
        $this->parser->parse('admin/manage', $this->data);
    }

}