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
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

  <!-- puppteer -->
  <script type="text/javascript" src="js/js_puppeteer.js"></script>
  <!-- qr_code -->
  <script type="text/javascript" src="./js/jquery.qrcode.min.js"></script>

  <script type="text/javascript">

  $(function(){
    //ナビのアコーディオン（動作確認様）　
    $('section ul').hide();
    $("section h3").click(function(){
      $(this).next().slideToggle(500);								 
    });
    //チェックボックスの
    $('#checkboox ul').hide();
    $("#checkboox div").click(function(){
      $(this).next().slideToggle(500);								 
    });
      //棚内容の表示
    $("#store_item_box h2").click(function(){
      $(this).next().slideDown(500);		
    });
    $("#store_item_box>ul>li:last-child").click(function(){
      $("#store_item_box>ul").slideUp(500);
    });
    //設定ボックスの表示
    $('#ber_line_box >div').hide();
    $("#ber_line_box> p").click(function(){
      console.log("設定ボタン");
      $(this).next().slideToggle(500);								 
    });
  });
  </script>


  
