<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->proxy("db",null);
    }

    public function loadById($arr)
    {
        $neucore_aiot = $this->config->item('neucore_aiot');
        $query = $this->db->query("SELECT id AS user_id,cust_id, place_id, role_id, `name` AS user_name,nick_name,pwd,`type`,`status`,ext_id FROM $neucore_aiot.sys_user WHERE `id` = ? AND `status` = 1", $arr);
        return $query->row_array();
    }
}