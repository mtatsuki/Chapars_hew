<?php

  //薬DBからデータを引っ張ってくる

  if($_POST["submit"]){
    $search_result = array();  //検索した結果を格納する配列
    $search = ""; //検索ワードを格納する変数
    if($_POST["xxx"]){
      $search = $_POST["xxx"];
    }
    //検索機能
    require_once "./function/search.php";
    $search_result = search_medicine($search);

    //登録機能
  }

  //==================================

  include "./tpl/header.php";
  include "./tpl/index.php";
  include "./tpl/footer.html";

  //==================================

?>