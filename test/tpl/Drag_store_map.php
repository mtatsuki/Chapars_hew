<div class="wrapper">

<?php

$jsonUrl = "test.json"; //JSONファイルの場所とファイル名を記述
if(file_exists($jsonUrl)){
$json = file_get_contents($jsonUrl);
$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
$obj = json_decode($json,true);
$obj = $obj["res"]["Drags"];
foreach ($obj as $key => $val){
// if($val["category"]=="解胃腸薬"){
  ?>

<div class='box' style='margin: 0 0 40px'>
  <img src="./image/<?php echo $val["image"][0]; ?>" alt="">
  <div >
    <p id="name">名前：<?php echo $val["name"]; ?></p>
    <p id="code">薬品コード：<?php echo $val["code"]; ?></p>
    <p id="category">区分：<?php echo $val["category"];?></p>
    <p id="component">成分：<?php echo $val["component"];?></p>
    <p id="standard">規格：<?php echo $val["standard"];?></p>
    <p id="marker">メーカー：<?php echo $val["maker"];?></p>
    <p id="money">薬価：<?php echo $val["money"];?></p>
  </div>
</div>
<?php
// }
}
}else {
}
?>
<a href="next.php"></a>

</div>