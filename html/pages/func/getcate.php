<?php
  function getcate($cate){  //DBの中身を取得する
    //configを読み込む
    require_once "./../../config.php";
    $dsn = "mysql:dbname=".DB.";host=".DB_HOST.";charset=utf8";
    $dbh = new PDO($dsn,DB_USER,DB_PASS);

    $stmt = $dbh -> prepare("SELECT itemName,shopName,id FROM stocks WHERE category = '".$cate."' ORDER BY id ASC");
    $stmt -> execute();
    $data = array();
    $datas =array();
    while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
      $data["itemName"] = $row["itemName"];
      $data["shopName"] = $row["shopName"];
      $data["id"] = $row["id"];
      $datas[] = $data;
    }
    return $datas;
  }
?>