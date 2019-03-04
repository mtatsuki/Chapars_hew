
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
        <div id="seatch">
            <form method="get" name="form" action="seatch.php">
                <table>
                    <tr>
                        <td id="form_box">
                            <input type="text" name="name" value="<?php echo $name; ?>" placeholder="  検索ワードを入力" >
                            <button name="voice_sound_search"><img src="./image/icon/maic.png" alt="map_icon"></button>
                            <button name="search">検索</button>
                        </td>
                    </tr>
                </table>
                <div class="c__seatch_bottom">
                    <!-- <input type="submit" name="search" value="検索"> -->
                </div>
            </form>
            <div class="seatch_block">  
                <div>
                    <h2>検索結果一覧  検索ワード:<?php //echo  $name_ans.",".$symptom_ans.",".$company_ans; ?></h2>
                </div>
                <ul>
                    <?php
                        foreach($datas as $data){
                    ?>
                    <li>
                        <div>
                            <img src="./image/Drag_search/IJxfad.png" alt="">
                        </div>
                        <div>
                            <h3><?php echo $data["itemName"]; ?></h3>
                            <p><?php echo $data["shopName"]; ?></p>
                        </div>
                        <div>
                            <a href="./details.php?id=<?php echo $data["id"]; ?>">詳しくはこちら</a>
                        </div>
                    </li>
                    <?php
                        }
                    ?>
                </ul>

            </div>

        </div>
    </div>
    <!-- nav -->
    <nav class="c__button_list">
        <ul>
            <li><a href="./seatch.php" >お薬検索</a></li>
            <li><a href="./index.php">店内マップ</a></li>
            <li><a href="./list.php">お薬一覧</a></li>
        </ul>
    </nav>
</div>