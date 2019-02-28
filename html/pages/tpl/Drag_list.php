<div class="wrapper">
    <!-- title -->
    <header>
        <h1>お薬一覧</h1>
    </header>
    <!-- main -->
    <div class="c__store_main">
        <article id="list" >
            <h2>※項目をクリックすると綱目にあう薬が表示されます。</h2>
            <section class="list_section">
                <h3 class="list_h_text">解熱鎮痛剤</h3>
                <ul>
                    <?php foreach ($drag0 as $value) {?>
                    <li>
                        <div>
                            <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                        </div>
                        <div>
                            <h4><?php echo $value["name"]; ?></h4>
                            <p><?php  ?></p>
                        </div>
                        <div>
                            <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </section>
            <section class="list_section">
                <h3 class="list_h_text">総合感冒薬</h3>
                <ul>
                <?php foreach ($drag1 as $value) {?>
                    <li>
                        <div>
                            <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                        </div>
                        <div>
                            <h4><?php echo $value["name"]; ?></h4>
                            <p><?php  ?></p>
                        </div>
                        <div>
                            <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                        </div>

                    </li>
                    <?php } ?>            
                </ul>
            </section>
            <section class="list_section">
                <h3 class="list_h_text">鎮咳去痰薬</h3>
                <ul>
                <?php foreach ($drag2 as $value) {?>
                    <li>
                        <div>
                            <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                        </div>
                        <div>
                            <h4><?php echo $value["name"]; ?></h4>
                            <p><?php  ?></p>
                        </div>
                        <div>
                            <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </section>
            <section class="list_section">
                <h3 class="list_h_text">解鼻炎用薬</h3>
                <ul>
                <?php foreach ($drag3 as $value) {?>
                    <li>
                        <div>
                            <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                        </div>
                        <div>
                            <h4><?php echo $value["name"]; ?></h4>
                            <p><?php  ?></p>
                        </div>
                        <div>
                            <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                        </div>
                    </li>
                    <?php } ?> 
                </ul>
            </section>
            <section class="list_section">
                <h3 class="list_h_text">解胃腸薬</h3>
                <ul>
                <?php foreach ($drag4 as $value) {?>
                    <li>
                        <div>
                            <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                        </div>
                        <div>
                            <h4><?php echo $value["name"]; ?></h4>
                            <p><?php  ?></p>
                        </div>
                        <div>
                            <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                        </div>
                    </li>
                    <?php } ?>            
                </ul>
            </section>
            <section class="list_section">
                <h3 class="list_h_text">下痢止め・整腸剤</h3>
                <ul>
                <?php foreach ($drag5 as $value) {?>
                    <li>
                        <div>
                            <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                        </div>
                        <div>
                            <h4><?php echo $value["name"]; ?></h4>
                            <p><?php  ?></p>
                        </div>
                        <div>
                            <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                        </div>

                    </li>
                    <?php } ?>            
                </ul>
            </section>
            <section class="list_section">
                <h3 class="list_h_text">便秘薬</h3>
                <ul>
                <?php foreach ($drag6 as $value) {?>
                    <li>
                        <div>
                            <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                        </div>
                        <div>
                            <h4><?php echo $value["name"]; ?></h4>
                            <p><?php  ?></p>
                        </div>
                        <div>
                            <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                        </div>

                    </li>
                    <?php } ?>            
                </ul>
            </section>
            <section class="list_section">
                <h3 class="list_h_text">痔疾用薬</h3>
                <ul>
                <?php foreach ($drag7 as $value) {?>
                    <li>
                        <div>
                            <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                        </div>
                        <div>
                            <h4><?php echo $value["name"]; ?></h4>
                            <p><?php  ?></p>
                        </div>
                        <div>
                            <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                        </div>

                    </li>
                    <?php } ?>
                </ul>
            </section>
            <section class="list_section">
                <h3 class="list_h_text">乗り物酔い薬</h3>
                <ul>
                <?php foreach ($drag8 as $value) {?>
                    <li>
                        <div>
                            <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                        </div>
                        <div>
                            <h4><?php echo $value["name"]; ?></h4>
                            <p><?php  ?></p>
                        </div>
                        <div>
                            <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                        </div>

                    </li>
                    <?php } ?>
                </ul>
            </section>
            <section class="list_section">
                <h3 class="list_h_text">目薬</h3>
                <ul>
                <?php foreach ($drag9 as $value) {?>
                    <li>
                        <div>
                            <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                        </div>
                        <div>
                            <h4><?php echo $value["name"]; ?></h4>
                            <p><?php  ?></p>
                        </div>
                        <div>
                            <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                        </div>
                    </li>
                    <?php } ?> 
                </ul>
            </section>
            <section class="list_section">
                <h3 class="list_h_text">口内炎・口唇ヘルパス</h3>
                <ul>
                <?php foreach ($drag10 as $value) {?>
                    <li>
                        <div>
                            <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                        </div>
                        <div>
                            <h4><?php echo $value["name"]; ?></h4>
                            <p><?php  ?></p>
                        </div>
                        <div>
                            <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                        </div>

                    </li>
                    <?php } ?>
                </ul>
            </section>
            <section class="list_section">
                <h3 class="list_h_text">皮膚炎</h3>
                <ul>
                <?php foreach ($drag11 as $value) {?>
                    <li>
                        <div>
                            <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                        </div>
                        <div>
                            <h4><?php echo $value["name"]; ?></h4>
                            <p><?php  ?></p>
                        </div>
                        <div>
                            <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                        </div>

                    </li>
                    <?php } ?> 
                </ul>
            </section>
            <section class="list_section">
                <h3 class="list_h_text">傷創・消毒薬</h3>
                <ul>
                <?php foreach ($drag12 as $value) {?>
                    <li>
                        <div>
                            <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                        </div>
                        <div>
                            <h4><?php echo $value["name"]; ?></h4>
                            <p><?php  ?></p>
                        </div>
                        <div>
                            <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                        </div>
                    </li>
                    <?php } ?> 
                </ul>
            </section>
            <section class="list_section">
                <h3 class="list_h_text">筋肉痛・捻挫・関節痛薬</h3>
                <ul>
                <?php foreach ($drag13 as $value) {?>
                    <li>
                        <div>
                            <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                        </div>
                        <div>
                            <h4><?php echo $value["name"]; ?></h4>
                            <p><?php  ?></p>
                        </div>
                        <div>
                            <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                        </div>

                    </li>
                    <?php } ?>
                </ul>
            </section>
            <section class="list_section">
                <h3 class="list_h_text">ドリンク・ビタミン剤</h3>
                <ul>
                <?php foreach ($drag14 as $value) {?>
                    <li>
                        <div>
                            <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                        </div>
                        <div>
                            <h4><?php echo $value["name"]; ?></h4>
                            <p><?php  ?></p>
                        </div>
                        <div>
                            <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                        </div>
                    </li>
                    <?php } ?>           
                </ul>
            </section>
            <section class="list_section">
                <h3 class="list_h_text">その他</h3>
                <ul>
                <?php foreach ($drag15 as $value) {?>
                    <li>
                        <div>
                            <img src="./image/Drag_search/<?php echo $value["image"][0];?>" alt="">
                        </div>
                        <div>
                            <h4><?php echo $value["name"]; ?></h4>
                            <p><?php  ?></p>
                        </div>
                        <div>
                            <a href="./details.php?id=<?php echo $value["code"];?>">詳しくはこちら</a>
                        </div>
                    </li>
                    <?php } ?> 
                </ul>
            </section>
        </article>
    </div>
    <!-- nav -->
    <nav class="c__button_list">
        <ul>
            <li id="puppeteer_login"><a href="./seatch.php" >お薬検索</a></li>
            <li><a href="./index.php">店内マップ</a></li>
            <li id="puppeteer_login"><a href="./list.php" >お薬一覧</a></li>
        </ul>
    </nav>
</div>