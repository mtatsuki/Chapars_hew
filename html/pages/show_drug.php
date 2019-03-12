<?php
require "../func/rakuten_func.php";
require "../func/csv_func.php";
require "../func/db_func.php";


if (empty($_GET['barcode'])) {
    // GETがない場合、不正な遷移となるので戻す
    header('location:scan_drug.php');
}

$barcode = $_GET['barcode'];
$rakuten_result = getRakutenResult($barcode, 'https://app.rakuten.co.jp/services/api/IchibaItem/Search/20170706', 'keyword');

var_dump($rakuten_result);
if (isset($rakuten_result)) {
    $result_item = current($rakuten_result->Items)->Item;

    // 登録処理が押されたらcsvに書き込み
    $productData = fopen("product_data.csv", "a");
    $line = '"'. get_csv_sequence("./product_data.csv") .'","'. $result_item->genreId .'","'. $barcode .'","'. $result_item->itemName .'","'. $result_item->itemPrice .'"';
    fwrite($productData, $line . "\n");
    fclose($productData);
} else {
    echo '見つかりませんでした。';
}
