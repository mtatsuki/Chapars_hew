<?php
  function getcate($cate){  //DBの中身を取得する
    //configを読み込む
    require_once "./../../conf.php";
    $dsn = "mysql:dbname=".DB.";host=".DB_HOST.";charset=utf8";
    $dbh = new PDO($dsn,DB_USER,DB_PASS);

    $stmt = $dbh -> prepare("SELECT itemCode FROM genres WHERE genreName = '".$cate."' ORDER BY id ASC");
    $stmt -> execute();
    $data = "";
    while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
      $data = $row["itemCode"];
    }
    return $data;
  }
?>