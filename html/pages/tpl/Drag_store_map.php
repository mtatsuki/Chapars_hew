    <script type="text/javascript">
    $(function(){
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
            $("#"+paramArray.id).css("background","#ff8484"); //IDパラメーターの場所の色を変える
            $("#right_nav a").css("display","");              //右の印刷するボタン表示
        }
    })
    </script>
    <title>jquery</title>
</head>
<body>
<div class="wrapper">
    <!-- title -->
    <header class="title">
        <h1>店内マップ</h1>
    </header>
    <!-- main -->
    <div class="c__store_main">
        <div id="store_map">
            <aside id="right_nav">
                <a href="./copy.php?id=<?php echo $_GET['id'];?>"> <img src="./image/icon/printer.png" alt=""> 情報を印刷する</a>
                <a href="./qr_code.php?id=<?php echo $_GET['id'];?>"> <img src="./image/icon/qr.png" alt="qr_icon"> <span>QRコード生成</span> </a>
            </aside><!-- right_nav -->
            <img src="./image/Drag_list/sample.png" alt="店内マップ">
            <article id="store_item_box">
                <h2>A</h2>
                <ul>
                    <li><h3>棚番号Aの薬一覧</h3></li>
                    <li class="list_section">
                        <h4 class="list_h_text">カテゴリA-1</h4>
                        <ul>
                            <li id="9999999990"><a href="./details.php?id=9999999990">1</a></li>
                            <li id="9999999991"><a href="./details.php?id=9999999991">2</a></li>
                            <li id="9999999992"><a href="./details.php?id=9999999992">3</a></li>
                            <li id="9999999993"><a href="./details.php?id=9999999993">4</a></li>
                        </ul>
                    </li>
                    <li class="list_section">
                        <h4 class="list_h_text">カテゴリA-2</h4>
                        <ul>
                            <li id="9999999981"><a href="./details.php?id=9999999981">1</a></li>
                            <li id="9999999982"><a href="./details.php?id=9999999982">2</a></li>
                            <li id="9999999983"><a href="./details.php?id=9999999983">3</a></li>
                            <li id="9999999984"><a href="./details.php?id=9999999984">4</a></li>
                        </ul>
                    </li>
                    <li class="list_section">
                        <h4 class="list_h_text">カテゴリA-3</h4>
                        <ul>
                            <li id="9999999971"><a href="./details.php?id=9999999971">1</a></li>
                            <li id="9999999972"><a href="./details.php?id=9999999972">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </li>

                    <li>×</li>
                </ul>
                <h2>B</h2>
                <ul>
                    <li><h3>棚番号Bの薬一覧</h3></li>
                    <li class="list_section">
                        <h4 class="list_h_text">カテゴリB-1</h4>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </li>
                    <li class="list_section">
                        <h4 class="list_h_text">カテゴリB-2</h4>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </li>
                    <li class="list_section">
                        <h4 class="list_h_text">カテゴリB-3</h4>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </li>
                    <li>×</li>
                </ul>
                <h2>C</h2>
                <ul>
                    <li><h3>棚番号Cの薬一覧</h3></li>
                    <li class="list_section">
                        <h4 class="list_h_text">カテゴリC-1</h4>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </li>
                    <li class="list_section">
                        <h4 class="list_h_text">カテゴリC-2</h4>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </li>
                    <li class="list_section">
                        <h4 class="list_h_text">カテゴリC-3</h4>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </li>
                    <li>×</li>
                </ul>
                <h2>D</h2>
                <ul>
                    <li><h3>棚番号Dの薬一覧</h3></li>
                    <li class="list_section">
                        <h4 class="list_h_text">カテゴリD-1</h4>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </li>
                    <li class="list_section">
                        <h4 class="list_h_text">カテゴリD-2</h4>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </li>
                    <li class="list_section">
                        <h4 class="list_h_text">カテゴリD-3</h4>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </li>
                    <li>×</li>
                </ul>
                <h2>E</h2>
                <ul>
                    <li><h3>棚番号Eの薬一覧</h3></li>
                    <li class="list_section">
                        <h4 class="list_h_text">カテゴリE-1</h4>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </li>
                    <li class="list_section">
                        <h4 class="list_h_text">カテゴリE-2</h4>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </li>
                    <li class="list_section">
                        <h4 class="list_h_text">カテゴリE-3</h4>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </li>
                    <li>×</li>
                </ul>
            </article><!-- store_item_box -->
        </div><!-- store_map -->
    </div><!-- store_main -->
    <!-- nav -->
    <nav class="c__button_list">
        <ul>
            <li><a href="./search.php" id="puppeteer_login">お薬検索</a></li>
            <li><a href="./index.php">店内マップ</a></li>
            <li><a href="./list.php" id="puppeteer_login">お薬一覧</a></li>
        </ul>
    </nav>
</div>