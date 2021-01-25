<?php

defined('BASEPATH') OR exit('No direct script access allowed');
header("Content-type:text/html;charset=utf-8");

class Default_proxy extends My_Proxy {

    private $obj;
    public function __construct($module,$params = NULL) {
        parent::__construct();
        
        if(is_string($module) && substr($module, strpos($module, "_service")) === "_service"){
            
            if($params == null){
                $this->load->service($module);
            }
            else{
                $this->load->service($module,$params);
            }
            $this->obj = $this->$module;
        }
        else if(is_string($module) && substr($module, strpos($module, "_model")) === "_model"){
            
            if($params == null){
                $this->load->model($module);
            }
            else{
                $this->load->model($module,$params);
                
            }
            $this->obj = $this->$module;
        }
        else{
            $this->obj = $this->$module;
        }

        $this->load->library('StrUtil');
        $this->strUtil = new StrUtil();
    }
    public function __call($method, $args) {

        $start = microtime(true);
        
        $reqId = $this->Request_service->getId();

        $cls = get_class($this->obj);
        $arg = join(",", $args);
        $context = $reqId." ".get_class($this->obj)." ".$method." ($arg)";
        
        log_message('debug',$context);
        
        // echo $reqId." ".$cls." ".$method, " (", join(",", $args), ")\n";
        
        $ret =  null;

        try{
            $ret =  call_user_func_array(array(&$this->obj, $method), $args);
        }
        catch(Exception $e){
            throw $e;
        }
        finally{

            $retStr = $this->toString($ret);
            
            $retStr = $reqId." ".$retStr;

            $timeused = microtime(true)-$start;

            $retStr.= " timeused ".$timeused;

            log_message('debug',$cls.".".$method." rets: ".$retStr);
        }
        
        return $ret;
    }

    /**
     * 直接打印多个任意类型的参数
     * $this->debug(......)
     */
    public function toString(){
        $args = func_get_args();
        return $this->strUtil->toString($args);
    }
}