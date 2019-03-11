<?php

require "../func/rakuten_func.php";

$err_msg = "";
if (!empty($_GET['barcode']) && strpos($_GET['barcode'], ':') !== false) {
    $keyword = $_GET['barcode'];
    $keyword = explode(': ', $keyword);
    $rakuten_result = getRakutenResult($keyword[1], 'https://app.rakuten.co.jp/services/api/IchibaItem/search/20170706', 'keyword');
    if (empty($rakuten_result->Items)) {
        $err_msg = "商品の読み取りに失敗しました。";
    } else {
        //あっていれば詳細画面へ
        header('location:show_drug.php?id='. $keyword[1]);
    }
} else {
    $err_msg = "バーコードが読み取られていないか、正しい形式ではありません。";
}
$err_msg;
//医療品か
//==================================

    include "./tpl/header.php";
    include "./tpl/scan_drug.php";
    include "./tpl/footer.html";

//==================================
