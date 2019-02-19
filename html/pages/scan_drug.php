<?php

require "../func/rakuten_func.php";
if (isset($_GET)) {
    $keyword = $_GET['barcode'];
    $rakuten_result = getRakutenResult($keyword);
    var_dump($rakuten_result);
}
//コードの形式があっているか

//医療品か

//楽天APIに存在するか

//あっていれば詳細画面へ
// header('location:show_drug.php');

//==================================

include "./tpl/header.php";
include "./tpl/scan_drug.php";
include "./tpl/footer.html";

//==================================
