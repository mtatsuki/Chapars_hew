<div class="wrapper">
    <!-- title -->
    <div class="title">
        <h1>お薬検索</h1>
    </div>
    <!-- main -->
    <div class="c__store_main">
        <div id="seatch">
            <form method="get" name="form" action="search.php">
            <table>
                <tr>
                    <th align="left">薬名検索</th><td><input id="name_search" type="text" name="name" value="<?php echo $name; ?>"></td><td><button id="startRecBtn" class="btn btn-default">!!ここにマイクアイコン追加!!</button><button id="stopRecBtn" class="btn btn-default">停止</button></td>
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
                    <p>商品一覧<?php echo isset($_GET["search"]) ? "　検索ワード:".$name." ".$symptom." ".$company : ""; ?></p>
                </div>
                <ul>
                <?php
                    if(empty($datas)){
                ?>
                        <p>お探しのワードに一致する商品は見つかりませんでした。</p>
                <?php
                    }
                    else{
                        foreach($datas as $data){
                ?>
                        <li>
                            <div>
                                <img src="./image/Drag_search/IJxfad.png" alt="">
                            </div>
                            <div>
                                <h2><?php echo $data["itemName"]; ?></h2>
                            </div>
                            <div>
                                <a href="./details.php?id=<?php echo $data["id"]; ?>">詳しくはこちら</a>
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
    <div class="c__button_list">
        <ul>
            <li><a href="./search.php">お薬検索</a></li>
            <li><a href="./index.php">店内マップ</a></li>
            <li><a href="./list.php">お薬一覧</a></li>
        </ul>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
<script src="./js/voice.js"></script>