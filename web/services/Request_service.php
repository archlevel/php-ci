<?php

class Request_service extends MY_Service
{
    private $id;

    public function __construct()
    {
        parent::__construct();
        $chars = md5(uniqid(mt_rand(), true));
        $uuid  = substr($chars,0,8) . '-';
        $uuid .= substr($chars,8,4) . '-';
        $uuid .= substr($chars,12,4) . '-';
        $uuid .= substr($chars,16,4) . '-';
        $uuid .= substr($chars,20,12);

        $this->id = $uuid;
    }

    public function getId(){
        return $this->id;
    }

}