<div class="wrapper">
    <!-- title -->
    <div class="title">
        <h1>カテゴリー別お薬一覧</h1>
    </div>
    <!-- main -->
    <div class="c__store_main">
        <div id="list" class="list_section">
        <?php foreach($datas as $key => $data){ ?>
            <div>
                <h2><?php echo $key; ?></h2>
            <ul>
                <?php foreach ($data as $value) {?>
                <li>
                    <div>
                        <img src="./image/Drag_search/IJxfad.png" alt="">
                    </div>
                    <div>
                        <h3><?php echo $value["itemName"]; ?></h3>
                    </div>
                    <div>
                        <a href="./details.php?id=<?php echo $value["id"];?>">詳しくはこちら</a>
                    </div>
                </li>
                <?php } ?>
            </ul>
        <?php } ?>
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