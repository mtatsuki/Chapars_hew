<script type="text/javascript">
$(function(){
    let url = document.referrer;                          //遷移元URL取得

    let urlParam = location.search.substring(1);          //パラメーター取得
    $("#right_nav >a:nth-child(1)").css("display","none");//印刷するボタンを消す
    if(urlParam && (url.indexOf('details.php') != -1)) {  //URLにパラメータが存在する場合
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
<div class="wrapper">
    <!-- title -->
    <div class="title">
        <h1>店内マップ</h1>
    </div>
    <!-- main -->
    <div class="c__store_main">
        <div id="store_map">
            <div id="right_nav">
                <a href="./copy.php?id=<?php echo $_GET['id'];?>"> <img src="./image/icon/printer.png" alt=""> 情報を印刷する</a>
                <a href="./qr_code.php?id=<?php echo $_GET['id'];?>"> <img src="./image/icon/qr.png" alt="qr_icon"> <span>QRコード生成</span> </a>
            </div><!-- right_nav -->
            <img src="./image/Drag_list/sample.png" alt="店内マップ">
            <div id="store_item_box">
                <div>A</div>
                <ul>
                    <li>棚番号Aの薬一覧</li>
                    <li class="list_section">
                        <div class="list_h_text">カテゴリA-1</div>
                        <ul>
                            <li id="999999X9990"><a href="./details.php?id=999999X9990">1</a></li>
                            <li id="999999X9991"><a href="./details.php?id=999999X9991">2</a></li>
                            <li id="999999X9992"><a href="./details.php?id=999999X9992">3</a></li>
                            <li id="999999X9993"><a href="./details.php?id=999999X9993">4</a></li>
                        </ul>
                    </li>
                    <li class="list_section">
                        <div class="list_h_text">カテゴリA-2</div>
                        <ul>
                            <li id="999999X9994"><a href="./details.php?id=999999X9994">1</a></li>
                            <li id="999999X9995"><a href="./details.php?id=999999X9995">2</a></li>
                            <li id="999999X9996"><a href="./details.php?id=999999X9996">3</a></li>
                            <li id="999999X9997"><a href="./details.php?id=999999X9997">4</a></li>
                        </ul>
                    </li>
                    <li class="list_section">
                        <div class="list_h_text">カテゴリA-3</div>
                        <ul>
                            <li id="999999X9998"><a href="./details.php?id=999999X9998">1</a></li>
                            <li id="999999X9999"><a href="./details.php?id=999999X9999">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </li>

                    <li>×</li>
                </ul>
                <div>B</div>
                <ul>
                    <li>棚番号Bの薬一覧</li>
                    <li class="list_section">
                        <div class="list_h_text">カテゴリB-1</div>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </li>
                    <li class="list_section">
                        <div class="list_h_text">カテゴリB-2</div>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </li>
                    <li class="list_section">
                        <div class="list_h_text">カテゴリB-3</div>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </li>
                    <li>×</li>
                </ul>
                <div>C</div>
                <ul>
                    <li>棚番号Cの薬一覧</li>
                    <li class="list_section">
                        <div class="list_h_text">カテゴリC-1</div>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </li>
                    <li class="list_section">
                        <div class="list_h_text">カテゴリC-2</div>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </li>
                    <li class="list_section">
                        <div class="list_h_text">カテゴリC-3</div>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </li>
                    <li>×</li>
                </ul>
                <div>D</div>
                <ul>
                    <li>棚番号Dの薬一覧</li>
                    <li class="list_section">
                        <div class="list_h_text">カテゴリD-1</div>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </li>
                    <li class="list_section">
                        <div class="list_h_text">カテゴリD-2</div>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </li>
                    <li class="list_section">
                        <div class="list_h_text">カテゴリD-3</div>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </li>
                    <li>×</li>
                </ul>
                <div>E</div>
                <ul>
                    <li>棚番号Eの薬一覧</li>
                    <li class="list_section">
                        <div class="list_h_text">カテゴリE-1</div>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </li>
                    <li class="list_section">
                        <div class="list_h_text">カテゴリE-2</div>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </li>
                    <li class="list_section">
                        <div class="list_h_text">カテゴリE-3</div>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </li>
                    <li>×</li>
                </ul>
            </div><!-- store_item_box -->
        </div><!-- store_map -->
    </div><!-- store_main -->
    <!-- nav -->
    <div class="c__button_list">
        <ul>
            <li><a href="./seatch.php">お薬検索</a></li>
            <li><a href="./index.php">店内マップ</a></li>
            <li><a href="./list.php">お薬一覧</a></li>
        </ul>
    </div>
</div>