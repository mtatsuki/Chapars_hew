<?php
require "../../config.php";

require "../func/rakuten_func.php";
require "../func/csv_func.php";
require "../func/db_func.php";


if (!isset($_GET)) {
    // GETがない場合、不正な遷移となるので戻す
    header('location:scan_drug.php');
}

$barcode = $_GET['barcode'];
$rakuten_result = getRakutenResult($barcode, 'https://app.rakuten.co.jp/services/api/IchibaItem/Search/20170706', 'keyword');
$rakuten_result = current($rakuten_result->Items)->Item;

if (isset($rakuten_result)) {
    // 登録処理が押されたらcsvに書き込み
    // $records = get_csv('./商品データ.csv', 'utf8');
    // $productData = fopen("商品データ.csv", "a");
    //$itemCode = explode(":", $rakuten_result->Item->itemCode);
    // fwrite($productData, "商品ID","部門ID","商品コード","商品名","商品単価","説明");
    // fclose($productData);

    // 登録処理が押されたらDB insert
    $pdo = db_connect(DB_HOST, DB_USER, DB_PASS, DB);
    $sql = "INSERT INTO stocks 
                (itemCode, itemName, catchcopy, itemPrice, itemCaption, imageFlag, smallImageUrls, mediumImageUrls)
            VALUES (
                '". $rakuten_result->itemCode ."','". $rakuten_result->itemName ."', 
                '". $rakuten_result->catchcopy ."','". $rakuten_result->itemPrice ."', 
                '". $rakuten_result->itemCaption ."','". $rakuten_result->imageFlag ."', 
                '". $rakuten_result->smallImageUrls[0]->imageUrl ."',
                '". $rakuten_result->mediumImageUrls[0]->imageUrl ."'
            )";
    $stm = db_prepare($pdo, $sql);
    $stm ->execute();

    $rakuten_genre_result = getRakutenResult(
        $rakuten_result->genreId,
        'https://app.rakuten.co.jp/services/api/IchibaGenre/Search/20140222',
        'genre'
    )->current;

    // genresテーブルに情報を追加
    $sql = "INSERT INTO genres 
                (genreId, itemCode, genreName, genreLevel)
            VALUES (
                '". $rakuten_genre_result->genreId ."',
                '". $rakuten_result->itemCode ."', 
                '". $rakuten_genre_result->genreName ."',
                '". $rakuten_genre_result->genreLevel ."'
            )";
    $stm = db_prepare($pdo, $sql);
    $stm ->execute();

    foreach ($rakuten_result->tagIds as $tagId) {
        $rakuten_tag_result = getRakutenResult(
            $tagId,
            'https://app.rakuten.co.jp/services/api/IchibaTag/Search/20140222',
            'tag'
        );
        $rakuten_tag_result = $rakuten_tag_result->tagGroups->{'0'}->tagGroup->tags->{'0'}->tag;
        // tagテーブルにtag情報を追加
        $sql = "INSERT INTO tags 
                    (tagId, itemCode, tagName, parentTagId)
                VALUES (
                    '". $rakuten_tag_result->tagId ."',
                    '". $rakuten_result->itemCode ."', 
                    '". $rakuten_tag_result->tagName ."',
                    '". $rakuten_tag_result->parentTagId ."'
                )";
        $stm = db_prepare($pdo, $sql);
        $stm ->execute();
    }
}
