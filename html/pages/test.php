<?php


include('./../../conf.php');
require_once './../class/class_sql.php';
require_once './../class/class_details.php';
$class_sql = new sql();
$dbh =$class_sql->sql_get(DB,DB_HOST,DB_USER,DB_PASS);
$class_details = new details();
$id_array=array();
$id_array =$class_details->get_id_date($dbh);

//JSON形式に文字列を変換
$id_array = json_encode($id_array , JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK  | JSON_PRETTY_PRINT | JSON_FORCE_OBJECT );

//ファイルに保存 文字列の文字コードを指定（文字化防止）
file_put_contents("json/id_array.json" , mb_convert_encoding($id_array, 'utf-8'));

// require_once './../class/class_scrienshot.php';
// $class_scrine_image = new scrine_image();
// $id_url="node http://localhost:8888/project_file/chapars/Chapars_hew/html/pages/js/js_screenshot.js";
// $id_array =$class_scrine_image->image_url($id_array,$id_url);
// $id_array =$class_scrine_image->image_command($id_url);

//==================================

include "./tpl/header.php";
include "./tpl/DB_test.php";
include "./tpl/footer.html";

//==================================


