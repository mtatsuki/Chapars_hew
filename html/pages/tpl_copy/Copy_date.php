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
    <meta http-equiv="default-style" content="../css/style.css">
    <!-- resetCSS -->
    <link rel="stylesheet" href="../css/reset.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- jqueryバージョン３ -->
    <script src="../js/jquery3.3.1.min.js"></script>
    <script type="text/javascript">
      $(function(){
        let url = document.referrer;                          //遷移元URL取得
        let urlParam = location.search.substring(1);          //パラメーター取得
        $("#right_nav >a").css("display","none");             //印刷するボタンを消す
        //&& (url.indexOf('details.php') != -1)
        if(urlParam) {                                       //URLにパラメータが存在する場合
            var param = urlParam.split('&');                  //「&」が含まれている場合は「&」で分割
            var paramArray = [];                              // パラメーター配列
        
            for (i = 0; i < param.length; i++) {              // 用意した配列にパラメータを格納
                var paramItem = param[i].split('=');
                paramArray[paramItem[0]] = paramItem[1];
            }
            if(paramArray.id>="999999950"&&paramArray.id<="9999999959"){
              $("#A").css("background","#ff8484"); //IDパラメーターの場所の色を変える
            }
            else if(paramArray.id>="9999999960"&&paramArray.id<="9999999969"){
              $("#B").css("background","#ff8484"); //IDパラメーターの場所の色を変える
            }
            else if(paramArray.id>="9999999970"&&paramArray.id<="9999999979"){
              $("#C").css("background","#ff8484"); //IDパラメーターの場所の色を変える
            }
            else if(paramArray.id>="9999999980"&&paramArray.id<="9999999989"){
              $("#D").css("background","#ff8484"); //IDパラメーターの場所の色を変える
            }
            else if(paramArray.id>="9999999990"&&paramArray.id<="99999999"){
              $("#E").css("background","#ff8484"); //IDパラメーターの場所の色を変える
            }

        }
      })
    </script>

    <title>jquery</title>
  </head>
  <body>
  <div class="wrapper">
    <!-- title -->
    <header class="title">
        <h1>商品名</h1>
    </header>
    <!-- main -->
    <div class="c__store_main">
      <div id="store_map">
          <img src="../image/Drag_list/sample.png" alt="店内マップ">
          <article id="store_item_box">
              <h2 id="A">A</h2>
              <h2 id="B">B</h2>
              <h2 id="C">C</h2>
              <h2 id="D">D</h2>
              <h2 id="E">E</h2>
          </article><!-- store_item_box -->
      </div>
    </div>
    <form>
            <input type="button" value="このページを印刷する" onclick="window.print();" />
        </form>

  </body>
</html>
