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
            color=eval(paramArray.id);
            if(color >= 0 && color <=4){
                $(" #store_item_box>ul:nth-of-type(1)").css("display","block"); //棚の周りをひからす。
            }
            if(color > 4 && color <=8){
                $(" #store_item_box>ul:nth-of-type(2)").css("display","block"); //棚の周りをひからす。
            }
            if(color > 8 && color <=12){
                $(" #store_item_box>ul:nth-of-type(3)").css("display","block"); //棚の周りをひからす。
            }
            if(color > 12 && color <=16){
                $(" #store_item_box>ul:nth-of-type(4)").css("display","block"); //棚の周りをひからす。
            }
            if(color > 16 && color <=20){
                $(" #store_item_box>ul:nth-of-type(5)").css("display","block"); //棚の周りをひからす。
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
                <h2 id="box1">A</h2>
                <ul>
                    <li><h3>棚番号Aの薬一覧</h3></li>
                    <li class="list_section">
                        <h4 class="list_h_text">カテゴリA-1</h4>
                        <ul>
                            <li id="1"><a href="./details.php?id=1">1</a></li>
                            <li id="2"><a href="./details.php?id=2">2</a></li>
                            <li id="3"><a href="./details.php?id=3">3</a></li>
                            <li id="4"><a href="./details.php?id=4">4</a></li>
                        </ul>
                    </li>
                    <li class="list_section">
                        <h4 class="list_h_text">カテゴリA-2</h4>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </li>
                    <li class="list_section">
                        <h4 class="list_h_text">カテゴリA-3</h4>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </li>

                    <li>×</li>
                </ul>
                <h2 id="box2">B</h2>
                <ul>
                    <li><h3>棚番号Bの薬一覧</h3></li>
                    <li class="list_section">
                        <h4 class="list_h_text">カテゴリB-1</h4>
                        <ul>
                            <li id="5"><a href="./details.php?id=5">5</a></li>
                            <li id="6"><a href="./details.php?id=6">6</a></li>
                            <li id="7"><a href="./details.php?id=7">7</a></li>
                            <li id="8"><a href="./details.php?id=8">8</a></li>
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
                <h2 id="box3">C</h2>
                <ul>
                    <li><h3>棚番号Cの薬一覧</h3></li>
                    <li class="list_section">
                        <h4 class="list_h_text">カテゴリC-1</h4>
                        <ul>
                            <li id="9"><a href="./details.php?id=9">9</a></li>
                            <li id="10"><a href="./details.php?id=10">10</a></li>
                            <li id="11"><a href="./details.php?id=11">11</a></li>
                            <li id="12"><a href="./details.php?id=12">12</a></li>
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
                <h2 id="box4">D</h2>
                <ul>
                    <li><h3>棚番号Dの薬一覧</h3></li>
                    <li class="list_section">
                        <h4 class="list_h_text">カテゴリD-1</h4>
                        <ul>
                            <li id="13"><a href="./details.php?id=13">13</a></li>
                            <li id="14"><a href="./details.php?id=14">14</a></li>
                            <li id="15"><a href="./details.php?id=15">15</a></li>
                            <li id="16"><a href="./details.php?id=16">16</a></li>
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
                <h2 id="box5">E</h2>
                <ul>
                    <li><h3>棚番号Eの薬一覧</h3></li>
                    <li class="list_section">
                        <h4 class="list_h_text">カテゴリE-1</h4>
                        <ul>
                            <li id="17"><a href="./details.php?id=17">17</a></li>
                            <li id="18"><a href="./details.php?id=18">18</a></li>
                            <li id="19"><a href="./details.php?id=19">19</a></li>
                            <li id="20"><a href="./details.php?id=20">20</a></li>
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