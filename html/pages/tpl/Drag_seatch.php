<div class="wrapper">
    <!-- title -->
    <div class="title">
        <h1>お薬検索</h1>
    </div>
    <!-- main -->
    <div class="c__store_main">
        <div id="seatch">
            <form method="get" name="form" action="seatch.php">
            <table>
                <tr>
                    <th align="left">薬名検索</th><td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <th align="left">症状検索</th><td><input type="text" name="症状"></td>
                </tr>
                <tr>
                    <th align="left">薬品会社検索</th><td><input type="text" name="薬品会社"></td>
                </tr>
            </table>
            <div class="c__seatch_bottom">
                <input type="submit" value="検索">
            </div>
            </form>
            <div class="seatch_block">  
                <div>
                    <p>検索結果一覧</p>
                </div>
                <ul>
                    <?php
                    if(file_exists($jsonUrl)){
                    $json = file_get_contents($jsonUrl);
                    $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
                    $obj = json_decode($json,true);
                    $obj = $obj["res"]["Drags"];
                    foreach ($obj as $key => $val){
                    ?>
                    <li>
                        <div>
                            <img src="./image/Drag_search/<?php echo $val["image"][0]; ?>" alt="">
                        </div>
                        <div>
                            <h2><?php echo $val["name"]; ?></h2>
                            <p><?php echo $val["category"], $val["remarks"][0] ,$val["remarks"][1] , $val["remarks"][2]; ?></p>
                        </div>
                        <div>
                            <a href="./details.php?id=<?php echo $val["code"]; ?>">詳しくはこちら</a>
                        </div>
                    </li>
                    <?php } 
                }?>
                </ul>

            </div>

        </div>
    </div>
    <!-- nav -->
    <div class="c__button_list">
        <ul>
            <li><a href="./seatch.php" >お薬検索</a></li>
            <li><a href="./index.php">店内マップ</a></li>
            <li><a href="./list.php">お薬一覧</a></li>
        </ul>
    </div>
</div>