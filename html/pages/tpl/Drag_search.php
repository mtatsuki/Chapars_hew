
  <title>jquery</title>
</head>
<body>
<div class="wrapper">
    <!-- title -->
    <header class="title">
        <h1>お薬検索</h1>
    </header>
    <!-- main -->
    <div class="c__store_main">
        <div id="search">
            <form method="get" name="form" action="search.php">
                <table>
                    <tr>
                        <td id="form_box">
                            <input id="name_search" type="text" name="name" value="<?php echo $name; ?>" placeholder="  検索ワードを入力" >
                            <button id="recBtn" name="voice_sound_search"><img src="./image/icon/maic.png" alt="map_icon"></button>
                            <button name="search">検索</button>
                        </td>
                    </tr>
                </table>
                <div class="c__search_bottom">
                    <!-- <input type="submit" name="search" value="検索"> -->
                </div>
            </form>

            <div class="search_block">  
                <div>
                    <p>商品一覧<?php echo isset($_GET["search"]) ? "　検索ワード:".$name : ""; ?></p>
                </div>
                <ul>
                <?php
                if (empty($last_array) && isset($_GET["search"])) {
                    ?>
                        <p>お探しのワードに一致する商品は見つかりませんでした。</p>
                    <?php
                } elseif (isset($last_array)) {
                    foreach ($last_array as $key=>$value) {
                        ?>
                    <li>
                        <div>
                            <img src="<?php echo $value["smallImageUrls"] ?>" alt="">
                        </div>
                        <div>
                            <h2><?php echo $value["itemName"]; ?></h2>
                        </div>
                        <div>
                            <a href="./details.php?id=<?php echo $key; ?>">詳しくはこちら</a>
                        </div>
                    </li>
                        <?php
                    }
                }
                ?>
                </ul>
            </div>

        </div>
    </div>
    <!-- nav -->
    <nav class="c__button_list">
        <ul>
            <li><a href="./search.php" >お薬検索</a></li>
            <li><a href="./index.php">店内マップ</a></li>
            <li><a href="./list.php">お薬一覧</a></li>
        </ul>
    </nav>
</div>