<div class="wrapper">
    <!-- title -->
    <div class="title">
        <h1>お薬詳細</h1>
    </div>
    <!-- main -->
    <div class="c__store_main">
        <div id="details">
            <div class="p__text_title">
                <p>薬の名前が入る</p>
            </div>
            <div>
                <div id="right_nav">
                    <a href="./index.php?id=<?php echo $_GET['id'];?>">店内マップで表示</a>
                    <a href="./copy.php?id=<?php echo $_GET['id'];?>">情報を印刷する</a>
                </div><!-- right_nav -->
                <div class="p__main_img"><img src="./image/Drag_search/IJxfad.png" alt="薬の名前が入る"></div>
                <div class="p__text_info list_section">
                    <div class="list_h_text">製薬会社</div>
                    <table>
                        <tr><th>薬品名　　：</th><td>薬品名</td></p></tr>
                        <tr><th>棚番号　　：</th><td>A-999</td></p></tr>
                        <tr><th>製品番号　：</th><td><?php echo $_GET['id'];?></td></p></tr>
                        <tr><th>制作会社　：</th><td>会社の名前</td></p></tr>
                        <tr><th>販売会社　：</th><td>会社の名前</td></p></tr>
                    </table>
                </div><!-- text_info -->
            </div>
            <div class="p__main_text_info" >
                <div class="list_section">
                    <div class="list_h_text">test1</div>
                    <div>
                        内容
                    </div>
                </div>
                <div class="list_section">
                    <div class="list_h_text">test2</div>
                    <div>
                        内容
                    </div>
                </div>
                <div class="list_section">
                    <div class="list_h_text">test3</div>
                    <div>
                        内容
                    </div>
                </div>
                <div class="list_section">
                    <div class="list_h_text">test4</div>
                    <div>
                        内容
                    </div>
                </div>
            </div><!-- main_text_info -->
        </div>
    </div>
    <!-- nav -->
    <div class="c__button_list" >
        <ul>
            <li><a href="./seatch.php">お薬検索</a></li>
            <li><a href="./index.php">店内マップ</a></li>
            <li><a href="./list.php">お薬一覧</a></li>
        </ul>
    </div>

</div>