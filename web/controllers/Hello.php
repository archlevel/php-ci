<?php

defined('BASEPATH') OR exit('No direct script access allowed');
header("Content-type:text/html;charset=utf-8");

require_once 'IAuth.php';

class Hello extends IAuth{
    
    function __construct()
    {
        parent::__construct();
        $this->load->proxy("Hello_service",$this->usertype());
    }
    public function hello(){
        $data = $this->Hello_service->hello();
        $res = array('code' => 200, 'msg' => 'hello', "data" => $data);
        echo json_encode($res);
    }
}