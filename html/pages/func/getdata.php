<?php
  function getdatas($name,$symptom,$company){  //DBの中身を取得する
    //configを読み込む
    require_once "./../../config.php";
    $dsn = "mysql:dbname=".DB.";host=".DB_HOST.";charset=utf8";
    $dbh = new PDO($dsn,DB_USER,DB_PASS);

    $stmt = $dbh -> prepare("SELECT id,itemName,shopName FROM stocks WHERE itemCaption LIKE '%".$name."%' AND itemCaption LIKE '%".$symptom."%' AND itemCaption LIKE '%".$company."%'");
    $stmt -> execute();
    $data = array();
    $datas =array();
    while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
      $data["id"] = $row["id"];
      $data["itemName"] = $row["itemName"];
      $data["shopName"] = $row["shopName"];
      $datas[] = $data;
    }
    return $datas;
  }
?>