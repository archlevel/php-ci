# php-ci

在web/core目录导入

MY_Loader.php
MY_Proxy.php
MY_Service.php

在web目录下创建service目录，用于存储XXX_service.php[service的实现]

在web目录下创建proxy目录，导入Default_proxy.php

使用

controller层使用【拦截service层方法】

```
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
```

service层【拦截model层方法】

```
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

```

model层[拦截db驱动层sql语句]

```
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
```