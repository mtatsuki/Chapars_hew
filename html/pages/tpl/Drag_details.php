
  <title>jquery</title>
</head>
<body>
<div class="wrapper">
    <!-- title -->
    <header class="title">
        <h1>お薬詳細</h1>
    </header>
    <!-- main -->
    <div class="c__store_main">
        <div id="details">
            <h2><?php echo $class_details ->get_itemName();?></h2>
            <div>
                <aside id="right_nav">
                    <a href="./index.php?id=<?php echo $_GET['id'];?>"><img src="./image/icon/map.png" alt="map_icon"> <span>店内マップで表示</span> </a>
                    <a href="./copy.php?id=<?php echo $_GET['id'];?>"> <img src="./image/icon/printer.png" alt="printer_icon"> <span>情報を印刷する</span> </a>
                    <a href="./qr_code.php?id=<?php echo $_GET['id'];?>"> <img src="./image/icon/qr.png" alt="qr_icon"> <span>QRコード作成</span> </a>
                </aside><!-- aside  right_nav -->
                <div class="p__main_img"><img src="<?php echo $class_details ->get_mediumImageUrls(); ?>" alt="薬の名前が入る"></div>
                <div class="p__text_info list_section">
                    <h3 class="list_h_text">製薬会社</h3>
                    <table>
                        <tr><th>薬品名　　：</th><td><?php echo $class_details ->get_itemName();?></td></p></tr>
                        <tr><th>棚番号　　：</th><td></td></p></tr>
                        <tr><th>製品番号　：</th><td><?php echo $class_details ->get_itemCode();?></td></p></tr>
                        <tr><th>値段　　　：</th><td><?php echo $class_details ->get_itemPrice();?>円</td></p></tr>
                        <!-- <tr><th>制作会社　：</th><td>会社の名前</td></p></tr> -->
                        <!-- <tr><th>販売会社　：</th><td><</td></p></tr> -->
                    </table>
                </div><!-- text_info -->
            </div>
            <article class="p__main_text_info" >
                <section class="list_section">
                <h3 class="list_h_text">test1</h3>
                <?php foreach($itemCaption_array as $val){?>
                    <div>
                        <p> <?php echo $val;?></p>
                        
                    </div>
                <?php }  ?>
                </section><!-- section  test1 -->
            </article><!-- article  main_text_info -->
        </div>
    </div>
    <!-- nav -->
    <nav class="c__button_list" >
        <ul>
            <li><a href="./seatch.php">お薬検索</a></li>
            <li><a href="./index.php">店内マップ</a></li>
            <li><a href="./list.php">お薬一覧</a></li>
        </ul>
    </nav>

</div>