<div class="wrapper">
    <!-- title -->
    <div class="title">
        <h1>お薬検索</h1>
    </div>
    <form method="post" action="seatch.php"><input type="submit" name="del" value="削除"></form>
    <!-- main -->
    <div class="c__store_main">
        <div id="seatch">
            <form method="get" name="form" action="seatch.php">
            <table>
                <tr>
                    <th align="left">薬名検索</th><td><input type="text" name="name" value="<?php echo $name; ?>"></td>
                </tr>
                <tr>
                    <th align="left">症状検索</th><td><input type="text" name="symptom" value="<?php echo $symptom; ?>"></td>
                </tr>
                <tr>
                    <th align="left">製薬会社検索</th><td><input type="text" name="company" value="<?php echo $company; ?>"></td>
                </tr>
            </table>
            <div class="c__seatch_bottom">
                <input type="submit" name="search" value="検索">
            </div>
            </form>
            <div class="seatch_block">  
                <div>
                    <p>検索結果一覧<?php echo isset($_GET["search"]) ? "　検索ワード:".$name." ".$symptom." ".$company : ""; ?></p>
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
                            <h2><?php echo $data["itemName"]; ?></h2>
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
    <div class="c__button_list">
        <ul>
            <li><a href="./seatch.php">お薬検索</a></li>
            <li><a href="./index.php">店内マップ</a></li>
            <li><a href="./list.php">お薬一覧</a></li>
        </ul>
    </div>
</div>