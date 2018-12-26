<div class="wrapper">
    <!-- title -->
    <div class="title">
        <h1>お薬一覧</h1>
    </div>
    <!-- main -->
    <div class="c__store_main">
        <div id="list">
            <div>
                <p>解熱鎮痛剤</p>
            </div>
            <ul>
                <?php foreach ($drag0 as $value) {?>
                <li>
                    <div>
                        <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                    </div>
                    <div>
                        <h2><?php echo $value["name"]; ?></h2>
                        <p><?php  ?></p>
                    </div>
                    <div>
                        <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                    </div>

                </li>
                <?php } ?>
            </ul>
            <div>
                <p>総合感冒薬</p>
            </div>
            <ul>
            <?php foreach ($drag1 as $value) {?>
                <li>
                    <div>
                        <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                    </div>
                    <div>
                        <h2><?php echo $value["name"]; ?></h2>
                        <p><?php  ?></p>
                    </div>
                    <div>
                        <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                    </div>

                </li>
                <?php } ?>            </ul>
            <div>
                <p>鎮咳去痰薬</p>
            </div>
            <ul>
            <?php foreach ($drag2 as $value) {?>
                <li>
                    <div>
                        <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                    </div>
                    <div>
                        <h2><?php echo $value["name"]; ?></h2>
                        <p><?php  ?></p>
                    </div>
                    <div>
                        <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                    </div>

                </li>
                <?php } ?>            </ul>
            <div>
                <p>解鼻炎用薬</p>
            </div>
            <ul>
            <?php foreach ($drag3 as $value) {?>
                <li>
                    <div>
                        <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                    </div>
                    <div>
                        <h2><?php echo $value["name"]; ?></h2>
                        <p><?php  ?></p>
                    </div>
                    <div>
                        <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                    </div>

                </li>
                <?php } ?>            </ul>

            <div>
                <p>解胃腸薬</p>
            </div>
            <ul>
            <?php foreach ($drag4 as $value) {?>
                <li>
                    <div>
                        <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                    </div>
                    <div>
                        <h2><?php echo $value["name"]; ?></h2>
                        <p><?php  ?></p>
                    </div>
                    <div>
                        <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                    </div>

                </li>
                <?php } ?>            </ul>

            <div>
                <p>下痢止め・整腸剤</p>
            </div>
            <ul>
            <?php foreach ($drag5 as $value) {?>
                <li>
                    <div>
                        <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                    </div>
                    <div>
                        <h2><?php echo $value["name"]; ?></h2>
                        <p><?php  ?></p>
                    </div>
                    <div>
                        <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                    </div>

                </li>
                <?php } ?>            </ul>

            <div>
                <p>便秘薬</p>
            </div>
            <ul>
            <?php foreach ($drag6 as $value) {?>
                <li>
                    <div>
                        <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                    </div>
                    <div>
                        <h2><?php echo $value["name"]; ?></h2>
                        <p><?php  ?></p>
                    </div>
                    <div>
                        <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                    </div>

                </li>
                <?php } ?>            </ul>

            <div>
                <p>痔疾用薬</p>
            </div>
            <ul>
            <?php foreach ($drag7 as $value) {?>
                <li>
                    <div>
                        <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                    </div>
                    <div>
                        <h2><?php echo $value["name"]; ?></h2>
                        <p><?php  ?></p>
                    </div>
                    <div>
                        <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                    </div>

                </li>
                <?php } ?>
            </ul>

            <div>
                <p>乗り物酔い薬</p>
            </div>
            <ul>
            <?php foreach ($drag8 as $value) {?>
                <li>
                    <div>
                        <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                    </div>
                    <div>
                        <h2><?php echo $value["name"]; ?></h2>
                        <p><?php  ?></p>
                    </div>
                    <div>
                        <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                    </div>

                </li>
                <?php } ?>            </ul>
            <div>
                <p>目薬</p>
            </div>
            <ul>
            <?php foreach ($drag9 as $value) {?>
                <li>
                    <div>
                        <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                    </div>
                    <div>
                        <h2><?php echo $value["name"]; ?></h2>
                        <p><?php  ?></p>
                    </div>
                    <div>
                        <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                    </div>

                </li>
                <?php } ?>            </ul>
            <div>
                <p>口内炎・口唇ヘルパス</p>
            </div>
            <ul>
            <?php foreach ($drag10 as $value) {?>
                <li>
                    <div>
                        <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                    </div>
                    <div>
                        <h2><?php echo $value["name"]; ?></h2>
                        <p><?php  ?></p>
                    </div>
                    <div>
                        <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                    </div>

                </li>
                <?php } ?>            </ul>

            <div>
                <p>皮膚炎</p>
            </div>
            <ul>
            <?php foreach ($drag11 as $value) {?>
                <li>
                    <div>
                        <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                    </div>
                    <div>
                        <h2><?php echo $value["name"]; ?></h2>
                        <p><?php  ?></p>
                    </div>
                    <div>
                        <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                    </div>

                </li>
                <?php } ?>            </ul>

            <div>
                <p>傷創・消毒薬</p>
            </div>
            <ul>
            <?php foreach ($drag12 as $value) {?>
                <li>
                    <div>
                        <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                    </div>
                    <div>
                        <h2><?php echo $value["name"]; ?></h2>
                        <p><?php  ?></p>
                    </div>
                    <div>
                        <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                    </div>

                </li>
                <?php } ?>            </ul>

            <div>
                <p>筋肉痛・捻挫・関節痛薬</p>
            </div>
            <ul>
            <?php foreach ($drag13 as $value) {?>
                <li>
                    <div>
                        <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                    </div>
                    <div>
                        <h2><?php echo $value["name"]; ?></h2>
                        <p><?php  ?></p>
                    </div>
                    <div>
                        <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                    </div>

                </li>
                <?php } ?>            </ul>
            <div>
                <p>ドリンク・ビタミン剤</p>
            </div>
            <ul>
            <?php foreach ($drag14 as $value) {?>
                <li>
                    <div>
                        <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                    </div>
                    <div>
                        <h2><?php echo $value["name"]; ?></h2>
                        <p><?php  ?></p>
                    </div>
                    <div>
                        <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                    </div>
                </li>
                <?php } ?>           
            </ul>
            <div>
                <p>その他</p>
            </div>
            <ul>
            <?php foreach ($drag15 as $value) {?>
                <li>
                    <div>
                        <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                    </div>
                    <div>
                        <h2><?php echo $value["name"]; ?></h2>
                        <p><?php  ?></p>
                    </div>
                    <div>
                        <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                    </div>
                </li>
                <?php } ?> 
            </ul>
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