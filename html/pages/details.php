
<?php

//==================================
//変数初期化
//==================================
$dbh="";
$sql="";
$data_all=array();
$id=$_GET['id'];


include('./../../conf.php');
require_once './../class/class_sql.php';
require_once './../class/class_details.php';
$class_sql = new sql();
$dbh =$class_sql->sql_get(DB, DB_HOST, DB_USER, DB_PASS);
$class_details = new details();
if (isset($dbh)) {
  // echo "接続";
    $data_one=$class_details->get_date_one($id, $dbh);
    if (!empty($data_one)) {
      // var_dump($data_all);
    
        $class_details ->set_id($data_one['id']);
        $class_details ->set_itemCode($data_one['itemCode']);
        $class_details ->set_itemName($data_one['itemName']);
        $class_details ->set_catchcopy($data_one['catchcopy']);
        $class_details ->set_itemPrice($data_one['itemPrice']);
        $class_details ->set_itemCaption($data_one['itemCaption']);
        $class_details ->set_imageFlag($data_one['imageFlag']);
        $class_details ->set_smallImageUrls($data_one['smallImageUrls']);
        $class_details ->set_mediumImageUrls($data_one['mediumImageUrls']);
        $class_details ->set_created_at($data_one['created_at']);
        $class_details ->set_updated_at($data_one['updated_at']);
        $d=$class_details ->get_itemCaption();
    
        $itemCaption_array=array();
        $itemCaption_array= explode(" ", $d);
      // var_dump($itemCaption_array);
    }
} else {
    echo "接続できない";
}
//==================================

include "./tpl/header.php";
include "./tpl/Drag_details.php";
include "./tpl/footer.html";

//==================================
