<div class="wrapper">
    <!-- title -->
    <header class="title">
        <h1>お薬検索</h1>
    </header>
    <!-- <form method="post" action="seatch.php"><input type="submit" name="del" value="削除"></form> -->
    <!-- main -->
    <div class="c__store_main">
        <div id="seatch">
            <form method="get" name="form" action="seatch.php">
                <table>
                    <tr>
                        <th align="left">薬名</th><td><input type="text" name="name" value="<?php echo $name; ?>"></td>
                    </tr>
                    <tr>
                        <th align="left">症状</th><td><input type="text" name="symptom" value="<?php echo $symptom; ?>"></td>
                    </tr>
                    <tr>
                        <th align="left">製薬会社</th><td><input type="text" name="company" value="<?php echo $company; ?>"></td>
                    </tr>
                    <tr>
                        <th align="left">音声検索</th><td><input type="text" name="voice_sound" value="<?php echo $company; ?>"></td>
                    </tr>

                    <tr class="p_cate_list" id="checkboox">
                        <th align="left">カテゴリ</th>
                        <td>
                            <div><p>選択する<span>▼</span></p></div>
                            <ul>
                                <li><label for="cate_1"><input type="checkbox" name="cate" value="cate1" id="cate_1">カテゴリ１</label></li>
                                <li><label for="cate_2"><input type="checkbox" name="cate" value="cate2" id="cate_2">カテゴリ２</label></li>
                                <li><label for="cate_3"><input type="checkbox" name="cate" value="cate3" id="cate_3">カテゴリ３</label></li>
                                <li><label for="cate_4"><input type="checkbox" name="cate" value="cate4" id="cate_4">カテゴリ４</label></li>
                                <li><label for="cate_5"><input type="checkbox" name="cate" value="cate5" id="cate_5">カテゴリ５</label></li>
                                <li><label for="cate_6"><input type="checkbox" name="cate" value="cate6" id="cate_6">カテゴリ６</label></li>
                                <li><label for="cate_7"><input type="checkbox" name="cate" value="cate7" id="cate_7">カテゴリ７</label></li>
                                <li><label for="cate_8"><input type="checkbox" name="cate" value="cate8" id="cate_8">カテゴリ８</label></li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="p_type_list" id="checkboox">
                        <th align="left">種類</th>
                        <td>
                            <div><p>選択する<span>▼</span></p></div>
                            <ul>
                                <li><label for="type_1"><input type="checkbox" name="type" value="type1" id="type_1">種類１</label></li>
                                <li><label for="type_2"><input type="checkbox" name="type" value="type2" id="type_2">種類２</label></li>
                                <li><label for="type_3"><input type="checkbox" name="type" value="type3" id="type_3">種類３</label></li>
                                <li><label for="type_4"><input type="checkbox" name="type" value="type4" id="type_4">種類４</label></li>
                                <li><label for="type_5"><input type="checkbox" name="type" value="type5" id="type_5">種類５</label></li>
                                <li><label for="type_6"><input type="checkbox" name="type" value="type6" id="type_6">種類６</label></li>
                                <li><label for="type_7"><input type="checkbox" name="type" value="type7" id="type_7">種類７</label></li>
                                <li><label for="type_8"><input type="checkbox" name="type" value="type8" id="type_8">種類８</label></li>
                            </ul>
                        </td>
                    </tr>

                </table>
                <div class="c__seatch_bottom">
                    <!-- <input type="submit" name="search" value="検索"> -->
                    <button name="search">検索</button>
                    <button name="voice_sound_search"><img src="./image/icon/maic.png" alt="map_icon"></button>
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