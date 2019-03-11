
<title>jquery</title>
</head>
<script >
    let url = document.referrer;                          //遷移元URL取得
    let urlParam = location.search.substring(1);          //パラメーター取得
    $("#right_nav >a").css("display","none");             //印刷するボタンを消す
    if(urlParam) {  //URLにパラメータが存在する場合
        console.log(url);                                 //遷移元URL取得
        console.log(urlParam);                            //取得したパラメーターが一行で
        var param = urlParam.split('&');                  //「&」が含まれている場合は「&」で分割
        var paramArray = [];                              // パラメーター配列
        for (i = 0; i < param.length; i++) {              // 用意した配列にパラメータを格納
            var paramItem = param[i].split('=');
            paramArray[paramItem[0]] = paramItem[1];
        }
        id=eval(paramArray.id);
        $('#p_main_qr_code').qrcode("https://Chapars_hew/html/pages/image/Drag_screen"+id,{text: "size doesn't matter"});
    }
</script>
<body>
<div class="wrapper">
    <!-- title -->
    <header class="title">
        <h1>QRコード</h1>
    </header>
    <!-- main -->
    <div class="c__store_main">
        <div id="qr_code">
            <article id="p_main_qr_code">

            </article>
            <aside>
                <h2>上記のQRコードで、薬の情報を取得できます。</h2>
            </aside>
        </div>
    </div>
    <!-- nav -->
    <nav class="c__button_list" >
        <ul>
            <li><a href="./search.php">お薬検索</a></li>
            <li><a href="./index.php">店内マップ</a></li>
            <li><a href="./list.php">お薬一覧</a></li>
        </ul>
    </nav>

</div>