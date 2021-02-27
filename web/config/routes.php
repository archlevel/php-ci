<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
/* $route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE; */
//$route['default_controller'] = 'welcome/index';

//首页
$route['main'] = 'index/main';

//管理员登录
$route['login'] = 'login/admin_login';
//管理员退出
$route['logout'] = 'admin/logout';

//修改管理员密码
$route['updateAdminPwd'] = 'admin/update_admin';
//获取管理员个人信息
$route['adminInfoLoad'] = 'admin/admin_info_load';
//更新管理员信息
$route['updateAdminInfo'] = 'admin/update_admin_info';



########################################################################################################################
# ATTENTION:
# '/api/v1/' is compatible old api
# NOT add new api route like it.
# new route here:
$route['v1/push_face_to_db'] = 'face/pushFaceToDB';

$route['v1/real_time_list'] = 'customer/realTimeList';
$route['v1/customer_detail_list'] = 'customer/customerDetailList';

$route['v1/repeat_customers'] = 'customer/repeatCustomers';
$route['v1/repeat_customers_node_query'] = 'customer/repeatCustomersNodeQuery';
$route['v1/repeat_customers_node_query_detail'] = 'customer/repeatCustomersNodeQueryDetail';

//$route['v1/passenger_flow_statistics'] = 'customer/passengerFlowStatistics';
$route['v1/total_passenger_flow_node_query'] = 'customer/totalPassengerFlowNodeQuery';
$route['v1/total_passenger_flow_node_query_detail'] = 'customer/totalPassengerFlowNodeQueryDetail';

//上汽客流统计
$route['v1/real_time_list'] = 'customer/realTimeList';
$route['v1/customer_detail_list'] = 'customer/customerDetailList';
$route['v1/passenger_flow_statistics'] = 'customer/passengerFlowStatistic';
$route['v1/total_customer_to_store_list'] = 'customer/totalCustomerToStoreList';
$route['v1/repeat_customer_to_store_list'] = 'customer/repeatCustomerToStoreList';
$route['v1/total_customer_to_store_detail'] = 'customer/totalCustomerToStoreDetail';
$route['v1/repeat_customer_to_store_detail'] = 'customer/repeatCustomerToStoreDetail';

//上汽车牌识别统计
$route['v1/car_real_time_list'] = 'car/realTimeList';
$route['v1/car_detail_list'] = 'car/carDetailList';
$route['v1/traffic_flow_statistics'] = 'car/trafficFlowStatistic';
$route['v1/total_car_to_store_list'] = 'car/totalCarToStoreList';
$route['v1/repeat_car_to_store_list'] = 'car/repeatCarToStoreList';
$route['v1/total_car_to_store_detail'] = 'car/totalCarToStoreDetail';
$route['v1/repeat_car_to_store_detail'] = 'car/repeatCarToStoreDetail';

//新零售
$route['v1/retail_passenger_flow'] = 'retail/passengerFlow';
$route['v1/retail_age_distribution'] = 'retail/ageDistribution';
$route['v1/retail_sex_ratio'] = 'retail/sexRatio';
$route['v1/retail_customer_list'] = 'retail/customerList';

$route['v1/device_list'] = 'device/deviceList';
$route['v1/device_all'] = 'device/deviceAll';
$route['v1/device_del'] = 'device/deviceDel';
$route['v1/device_user_list'] = 'device/deviceUserList';
$route['v1/device_user_add'] = 'device/deviceUserAdd';
$route['v1/device_face_batch_add'] = 'device/deviceFaceBatchAdd';
$route['v1/device_face_delete'] = 'device/deviceFaceDelete';


$route['v1/device_binding'] = 'binding/deviceBinding';
$route['v1/device_unbind'] = 'binding/deviceUnbind';
$route['v1/device_chg_admin'] = 'binding/deviceChgAdmin';
$route['v1/emptybinding'] = 'binding/emptyBinding';

$route['v1/get_open_id'] = 'wechat/getOpenId';
$route['v1/face_detect_list'] = 'face/faceDetectList';
$route['v1/face_detect_detail'] = 'face/faceDetectDetail';
$route['v1/person_detect_list'] = 'face/personDetectList';
#$route['v1/person_detect_detail'] = 'wechat/personDetectDetail';
/**
 * 会员建卡
 */
$route['v1/face_lib_add'] = 'face/faceLibAdd';
$route['v1/face_lib_del'] = 'face/faceLibDel';  //删除会员
$route['v1/face_lib_delete'] = 'face/faceLibDelete';
$route['v1/face_lib_merge'] = 'face/faceLibMerge';
$route['v1/wechat_face_detail'] = 'face/faceDetail';
$route['v1/face_label'] = 'face/faceLabel';
$route['v1/wechat_face_library'] = 'face/getFaceLibrary';
$route['v1/whitelist'] = 'face/whitelist';
$route['v1/whitelist_add'] = 'face/whitelistAdd';
$route['v1/whitelist_del'] = 'face/whitelistDel';


$route['v1/wechat_sn_list'] = 'personuser/snList';
$route['v1/wechat_member_list'] = 'personuser/memberList';
$route['v1/wechat_member_approved'] = 'personuser/memberApproved';

$route['v1/wechat_get_device_set_up'] = 'device/getDeviceSetUp';
$route['v1/wechat_device_set_up'] = 'device/deviceSetUp';
$route['v1/wechat_msg_push_status'] = 'device/msgPushStatus';
$route['v1/device_info'] = 'device/getDeviceInfo';
$route['v1/device_chg_name'] = 'device/deviceChangeName';
$route['v1/admin_change_password'] = 'admin/adminChangePassword';
$route['v1/upload_face'] = 'face/uploadFace';

$route['v1/device/regist'] = 'device2cloud/regist';


$route['v1/json'] = 'face/json';

//app_user
$route['v1/user_sms_code'] = 'appuser/send_sms_code';
$route['v1/user_regist'] = 'appuser/regist';
$route['v1/user_login_sms_code'] = 'appuser/app_user_login_sms_code';
$route['v1/user_login_pwd'] = 'appuser/user_login_pwd';
$route['v1/user_logout'] = 'appuser/app_user_logout';
$route['v1/user_chg_pwd'] = 'appuser/app_user_chg_pwd';
$route['v1/user_info'] = 'appuser/get_info_by_token';
$route['v1/forget_pwd'] = 'appuser/forget_pwd';

$route['v1/user_sms_code_wrap'] = 'appuser/send_sms_code_wrap';//私有化设置
$route['v1/user_sms_code_wrap'] = 'appuser/send_sms_code_wrap';//私有化设置
$route['v1/sms_code_service'] = 'appuser/send_sms_code_service';//短信公共服务API

$route['v1/last_version'] = 'appversion/getLastReleaseVersion';


//车牌---临时用
$route['v1/collect_plate'] = 'collect/plate';

$route['v1/statistics'] = 'plate/statistics';
$route['v1/generate_data'] = 'plate/generateData';
$route['v1/plate_upload'] = 'plate/upload';
$route['v1/plate_list'] = 'plate/plateList';
$route['v1/plate_load'] = 'plate/plateLoad';
$route['v1/plate_label'] = 'plate/plateLabel';
$route['v1/plate_delete'] = 'plate/plateDelete';
$route['v1/plate_export'] = 'plate/plateExport';
$route['v1/plate_property'] = 'plate/plateProperty';


//监控
$route['/v1/monitor'] = 'device/monitor';

//app下载
$route['v1/download'] = 'appversion/download';

/**
 * 报表
 */

$route['v1/plate_stats'] = 'statistics/plate_stats';

$route['v1/face_stats'] = 'statistics/face_stats';

$route['v1/dashboard/map'] = 'dashboard/map';

$route['v1/dashboard/top10Citys'] = 'dashboard/top10Citys';

$route['v1/dashboard/realtime'] = 'dashboard/realtime';

$route['v1/dashboard/addup'] = 'dashboard/addup';

$route['v1/dashboard/trend'] = 'dashboard/trend';

$route['v1/dashboard/top10Place'] = 'dashboard/top10Place';

$route['v1/dashboard/top10Brand'] = 'dashboard/top10Brand';

$route['v1/dashboard/genders'] = 'Multstore/genders';

$route['v1/dashboard/ages'] = 'Multstore/ages';

$route['v1/dashboard/psghour'] = 'Multstore/psghour';

$route['v1/dashboard/psgsummary'] = 'Multstore/psgsummary';

$route['v1/dashboard/groupsummary'] = 'Multstore/groupsummary';


//$route['v1/dashboard/place'] = 'dashboard/place';

$route['v1/dashboard/top10Citys'] = 'dashboard/top10Citys';

$route['v1/dashboard/location'] = 'dashboard/location';

$route['v1/dashboard/total'] = 'Multstore/total';

$route['v1/dashboard/batch'] = 'Multstore/batch';

$route['v1/dashboard/first'] = 'Multstore/first';

$route['v1/dashboard/again'] = 'Multstore/again';

$route['v1/dashboard/flows'] = 'Multstore/flows';

$route['v1/dashboard/stay'] = 'Multstore/stay';

//首页建卡、未建卡及转化率统计
$route['v1/dashboard/card'] = 'Multstore/card';

$route['v1/dashboard/heatmap'] = 'Multstore/heatmap';
//热销产品
$route['v1/dashboard/hotsale'] = 'Multstore/hotsale';
//客流漏斗
$route['v1/dashboard/psgflowfunnel'] = 'Multstore/psgflowfunnel';
//门店列表
$route['v1/dashboard/placelist'] = 'dashboard/placelist';
//品牌列表
$route['v1/dashboard/brandlist'] = 'IParent/brandlist';

$route['v1/area/root'] = 'areacode/listroot';
$route['v1/area/childs'] = 'areacode/listchilds';

/**
 * 企业用户
 */

//企业注册
$route['v1/corp/regist'] = 'corpuser/regist';

$route['v1/cust/regist'] = 'customer/regist';

$route['v1/ping'] = 'test/ping';//私有化设置 检查网络是否正常
$route['v1/settings'] = 'customer/get_sys_setting';//私有化设置

//员工列表
$route['v1/corpuser/list'] = 'customer/userlist';

//创建用户
$route['v1/corpuser/create'] = 'customer/create_user';

$route['v1/corpuser/faceReg'] = 'customer/user_face_reg';

$route['v1/corpuser/update'] = 'customer/update_user';

//会员
$route['v1/member/detail'] = 'face/member_detail';
$route['v1/member/track'] = 'face/member_track';
$route['v1/member/trackList'] = 'face/member_track_list';

//修改密码
$route['v1/corpuser/chgpwd'] = 'customer/update_pwd';

$route['v1/corpuser/myinfo'] = 'customer/load_orguser';

$route['v1/corpuser/loaduser'] = 'customer/load_userinfo';

$route['v1/corpuser/rolelist'] = 'customer/rolelist';

//创建组织机构
$route['v1/org/create'] = 'customer/create_org';

$route['v1/org/list'] = 'customer/list_orgAndStore';

$route['v1/org/update'] = 'customer/update_org';

$route['v1/org/delorg'] = 'customer/delorg';

/**
 * 添加员工
 */
$route['v1/org/adduser'] = 'customer/add_orguser';

$route['v1/org/users'] = 'customer/orgusers';

$route['v1/org/deluser'] = 'customer/del_orguser';

$route['v1/org/stores'] = 'customer/org_stores';

$route['v1/org/org_and_suborg_stores'] = 'IParent/orgAndSubOrgStores';

//创建门店
$route['v1/store/create'] = 'customer/create_store';
//更新门店
$route['v1/store/update'] = 'customer/update_store';

$route['v1/store/user_face_lib_add'] = 'face/userFaceLibAdd'; //员工人脸下发（从客流列表里）

$route['v1/store/other_user_face_lib_add'] = 'face/otherUserFaceLibAdd'; //其他人员人脸下发（从客流列表里）

$route['v1/store/adduser'] = 'customer/add_storeuser';

$route['v1/store/users'] = 'customer/storeusers';

$route['v1/store/deluser'] = 'customer/del_storeuser';

$route['v1/cust/list'] = 'IParent/custlist';

$route['v1/store/list'] = 'IParent/storelist';

$route['v1/store/batchupdate'] = 'customer/batch_update_store_org';

$route['v1/brand/list'] = 'IParent/brandlist';

$route['v1/device/list'] = 'device/devicelist';

$route['v1/device/status'] = 'device/status';

$route['v1/device/status_rate'] = 'device/status_rate';

$route['v1/employee/list'] = 'IParent/employeelist';

$route['v1/employee/count'] = 'IParent/employeecount';

//客流
$route['v1/passenger/list'] = 'passenger/psgList';
//客流详情
$route['v1/passenger/detail'] = 'passenger/psg_detail';

$route['v1/passenger/statsCustNew'] = 'passenger/stats_cust_new';

$route['v1/passenger/statsCustFrequent'] = 'passenger/stats_cust_frequent';

$route['v1/passenger/custNewTotal'] = 'passenger/cust_new_total';

//当前门店历史所有未建卡的人脸
$route['v1/passenger/historyFace'] = 'passenger/history_face';

//当前门店下每个客流的历史人脸
$route['v1/passenger/custHistoryFace'] = 'passenger/cust_history_face';

//会员统计及列表
$route['v1/statsFaceLib'] = 'passenger/stats_face_lib';

$route['v1/store/arealist'] = 'Multstore/storearealist';

$route['v1/face/all'] = 'face/face_all_by_store';

//shell命令
$route['neulink/reboot'] = 'devicemgr/reboot';

$route['neulink/hibrate'] = 'devicemgr/hibrate';

$route['neulink/awaken'] = 'devicemgr/awaken';

$route['neulink/firmware'] = 'devicemgr/firmware';

$route['neulink/alog'] = 'devicemgr/alog';

$route['neulink/debug'] = 'devicemgr/debug';

$route['neulink/shell'] = 'devicemgr/shell';

$route['neulink/notice'] = 'devicemgr/notice';

$route['neulink/disk'] = 'devicemgr/disk';

$route['neulink/memory'] = 'devicemgr/memory';

$route['neulink/ifconfig'] = 'devicemgr/ifconfig';

$route['neulink/configs'] = 'devicemgr/configObjs';

$route['neulink/config'] = 'devicemgr/configObj';

$route['neulink/stream'] = 'devicemgr/stream';

$route['neulink/ispflip'] = 'devicemgr/ispflip';

$route['neulink/gsettings'] = 'devicemgr/gsettings';

$route['neulink/check'] = 'devicemgr/check';

$route['neulink/upload2cloud'] = 'device2cloud/upload';

$route['v1/hello'] = 'hello/hello';

$route['v1/chello'] = 'common/hello';

$route['api/users/id'] = 'api/users_get';


$route['v1/brand/add'] = 'brand/add';

$route['v1/brand/update'] = 'brand/update';

$route['v1/brand/alllist'] = 'brand/list';
