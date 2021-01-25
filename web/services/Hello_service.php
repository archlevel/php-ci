<?php

defined('BASEPATH') OR exit('No direct script access allowed');
header("Content-type:text/html;charset=utf-8");

require 'G_service.php';

class Hello_service extends G_service
{
    public function __construct($usertype)
    {
        parent::__construct($usertype);
        $this->load->proxy("Hello_model",null);
    }
    
    public function hello()
    {
        $data = $this->Hello_model->loadById(1);
        return $data;
    }
}
