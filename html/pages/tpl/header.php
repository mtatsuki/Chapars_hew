<!DOCTYPE html>
<html>
<head>
  <!-- コンテンツ言語 -->
  <meta http-equiv="content-language" content="ja">
  <meta charset="UTF-8"/>
  <!-- キーワード -->
  <meta name="keywords" content="">
  <!-- 検索結果に表示される文字 -->
  <meta name="description" content="">
  <!-- 検索エンジンクローラにURLをインデックスしないように(noindex)文書内のURLを辿らないように(nofollow)知らせるため -->
  <meta name="robots" content="noindex,nofollow">
  <!-- 文書の作者 -->
  <meta name="author" content="チャパーズ">

  <!-- ファイルタイプ、文字エンコーディングの指定 -->
  <meta http-equiv="content-type" content="text/html" charset="UTF-8">

  <!-- 優先CSSファイル -->
  <meta http-equiv="default-style" content="./css/style.css">
  <!-- resetCSS -->
  <link rel="stylesheet" href="./css/reset.css">
  <!-- CSS -->
  <link rel="stylesheet" href="./css/style.css">

  <!-- jqueryバージョン３ -->
  <script src="./js/jquery3.3.1.min.js"></script>
  <!-- js -->
  <script type="text/javascript"  src="./js/javascript_style.js"></script>

  <script type="text/javascript">

  $(function(){
    //ナビのアコーディオン（動作確認様）　
    $('#list ul').hide();
    $("#list div").click(function(){
      $(this).next().slideToggle(500);								 
    });
    //チェックボックスのアコーディオン（動作確認様）　
    $('#checkboox ul').hide();
    $("#checkboox div").click(function(){
      $(this).next().slideToggle(500);								 
    });
        //チェックボックスのアコーディオン（動作確認様）　
    $("#store_item_box div").click(function(){
      $(this).next().slideDown(500);		
      // $("#store_map div").css("background","#ffffffdd");		
    });
    $("#store_item_box li:last-child").click(function(){
      $("#store_item_box ul").slideUp(500);		
      // $("#store_map div").css("background","#ffffffdd");		
    });

  });

  </script>
  <title>jquery</title>
</head>
<body>
  
