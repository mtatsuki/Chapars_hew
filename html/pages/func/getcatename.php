<?php
  function getcatename(){  //DBの中身を取得する
    //configを読み込む
    require_once "./../../config.php";
    $dsn = "mysql:dbname=".DB.";host=".DB_HOST.";charset=utf8";
    $dbh = new PDO($dsn,DB_USER,DB_PASS);

    $stmt1 = $dbh -> prepare("SELECT DISTINCT genreName FROM genres GROUP BY genreName ORDER BY id ASC");
    $stmt1 -> execute();
    $cate = array();
    while($row = $stmt1 -> fetch(PDO::FETCH_ASSOC)){
      $cate[] = $row["genreName"];
    }
    return $cate;
  }
?>