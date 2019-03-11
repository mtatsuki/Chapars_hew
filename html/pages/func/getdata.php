<?php
function getdatas($name)
{
  //DBの中身を取得する
    //configを読み込む
    require_once "./../../conf.php";
    $dsn = "mysql:dbname=".DB.";
            host=".DB_HOST.";
            charset=utf8";
    $dbh = new PDO($dsn, DB_USER, DB_PASS);

    $stmt = $dbh -> prepare("SELECT id,itemName,smallImageUrls FROM stocks WHERE itemCaption LIKE '%".$name."%'");
    $stmt -> execute();
    $data = array();
    $datas =array();
    while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
        $data["id"] = $row["id"];
        $data["itemName"] = $row["itemName"];
        $data["smallImageUrls"] = $row["smallImageUrls"];
        $datas[] = $data;
    }
    return $datas;
}
