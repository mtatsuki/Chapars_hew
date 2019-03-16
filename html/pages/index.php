
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
        $stm = db_prepare($pdo, $sql);
        db_execute($stm);

        $rakuten_genre_result = getRakutenResult(
            $result_item->genreId,
            'https://app.rakuten.co.jp/services/api/IchibaGenre/Search/20140222',
            'genre'
        );
        $result_genre = $rakuten_genre_result->current;
        $stm = db_prepare($pdo, $sql);
                $sql = "insert into genres
            (genreId, itemCode, genreName, genreLevel)
        values(
            '".$result_genre->genreId."',
            '".$result_item->itemCode."',
            '".$result_genre->genreName."',
            '".$result_genre->genreLevel."'
        )";
        $stm = db_prepare($pdo, $sql);
        db_execute($stm);
    }
}

$sql = 'select * from stocks INNER JOIN genres ON stocks.itemCode = genres.itemCode where genreName ="第三類医薬品"';
$stm = db_prepare($pdo, $sql);
$list = db_execute($stm);
$list = array();
while ($row = $stm->fetch(PDO::FETCH_ASSOC)) {
    $list[] = $row;
}

//==================================

include "./tpl/header.php";
include "./tpl/Drag_store_map.php";
include "./tpl/footer.html";

//==================================
