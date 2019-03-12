
  <title>jquery</title>
</head>
<body>
<div class="wrapper">
    <!-- title -->
    <header>
        <h1>お薬一覧</h1>
    </header>
    <!-- main -->
    <div class="c__store_main">
        <article id="list" >
            <h2>※項目をクリックすると綱目にあう薬が表示されます。</h2>
            <?php foreach($datas as $key => $data){ ?>
            <section class="list_section">
                <h3 class="list_h_text"><?php echo $key; ?></h3>
                <ul>
                    <li>
                        <div>
                            <img src="<?php echo $data["smallImageUrls"]; ?>" alt="">
                        </div>
                        <div>
                            <h4><?php echo $data["itemName"]; ?></h4>
                        </div>
                        <div>
                            <a href="./details.php?id=<?php echo $data["id"];?>">詳しくはこちら</a>
                        </div>
                    </li>
                </ul>
            </section>
            <?php } ?>
        </article>
    </div>
    <!-- nav -->
    <nav class="c__button_list">
        <ul>
            <li id="puppeteer_login"><a href="./search.php" >お薬検索</a></li>
            <li><a href="./index.php">店内マップ</a></li>
            <li id="puppeteer_login"><a href="./list.php" >お薬一覧</a></li>
        </ul>
    </nav>
</div>