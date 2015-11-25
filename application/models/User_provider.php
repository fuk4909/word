<?php

/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 15/11/17
 * Time: 20:29
 */
class User_provider extends CI_Model
{
    private $table;
    public $ci;

    function __construct()
    {
        parent::__construct();
        $this->table = "user";
        $this->ci = &get_instance();
    }

    function save($data)
    {
        return $this->db->insert($this->table, $data);
    }

    function check($data)
    {
        $where = array(
            "email" => $data["email"],
            "password" => $data["password"]
        );
        $user_info = $this->db->where($where)->get($this->table)->result_array();
        if (count($user_info) <= 0) {
            return false;
        }
        return $user_info;
    }

    function show()
    {
        $user_info_list = $this->db->order_by("regtime DESC")->get($this->table)->result_array();
        if (count($user_info_list) <= 0) {
            return false;
        }
        return $user_info_list;
    }
}