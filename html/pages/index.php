
<?php

require "../func/csv_func.php";
require "../func/rakuten_func.php";
require "../func/db_func.php";
require "../../conf.php";

$products = get_csv('./product_data.csv', 'utf8');

foreach ($products as $product) {
    $rakuten_result = getRakutenResult(
        $product['商品コード'],
        'https://app.rakuten.co.jp/services/api/IchibaItem/Search/20170706',
        'keyword'
    );
    if (isset($rakuten_result)) {
        $result_item = current($rakuten_result->Items)->Item;
        $pdo = db_connect(DB_HOST, DB_USER, DB_PASS, DB);
        $sql = "insert into stocks
            (itemCode, itemName, catchcopy, itemPrice, itemCaption, imageFlag, smallImageUrls, mediumImageUrls)
        values(
            '".$result_item->itemCode."',
            '".$result_item->itemName."',
            '".$result_item->catchcopy."',
            '".$result_item->itemPrice."',
            '".$result_item->itemCaption."',
            '".$result_item->imageFlag."',
            '".$result_item->smallImageUrls[0]->imageUrl."',
            '".$result_item->mediumImageUrls[0]->imageUrl."'
        )";
        echo $sql;
        $stm = db_prepare($pdo, $sql);
        db_execute($stm);
    }
}
//==================================

include "./tpl/header.php";
include "./tpl/Drag_store_map.php";
include "./tpl/footer.html";

//==================================
