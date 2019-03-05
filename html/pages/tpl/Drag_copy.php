
    <title>jquery</title>
  </head>
  <body>
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
            if(paramArray.id>="0"&&paramArray.id<="10"){
              $("#A").css("background","#ff8484"); //IDパラメーターの場所の色を変える
            }
            else if(paramArray.id>="11"&&paramArray.id<="20"){
              $("#B").css("background","#ff8484"); //IDパラメーターの場所の色を変える
            }
            else if(paramArray.id>="21"&&paramArray.id<="30"){
              $("#C").css("background","#ff8484"); //IDパラメーターの場所の色を変える
            }
            else if(paramArray.id>="31"&&paramArray.id<="40"){
              $("#D").css("background","#ff8484"); //IDパラメーターの場所の色を変える
            }
            else if(paramArray.id>="41"&&paramArray.id<="50"){
              $("#E").css("background","#ff8484"); //IDパラメーターの場所の色を変える
            }

        }
      })
    </script>

  <div class="wrapper">
    <!-- title -->
    <header class="title">
        <h1>商品名</h1>
    </header>
    <!-- main -->
    <div class="c__store_main">
      <div id="store_map">
          <img src="./image/Drag_list/sample.png" alt="店内マップ">
          <article id="store_item_box">
              <h2 id="A">A</h2>
              <h2 id="B">B</h2>
              <h2 id="C">C</h2>
              <h2 id="D">D</h2>
              <h2 id="E">E</h2>
          </article><!-- store_item_box -->
      </div>
    </div>
        <a href="javascript:void(0)" onclick="window.print();return false;">このページを印刷</a>
