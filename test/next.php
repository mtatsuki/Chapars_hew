
<?php
//https://jslob.repop.jp/2017/07/sortable.html


////////////////////////////////////////sort変更が送信された時の処理
  $sort = $_POST['sort'];
  if($sort){
  //DB接続
  $mysqli = new mysqli('localhost', 'root', '', 'sampledb');
  if ($mysqli->connect_error) {error_log($mysqli->connect_error);exit;}
  $mysqli->set_charset("utf8");

  foreach ($sort as $num => $id) {
  $str_sql = "UPDATE sortable SET sort = '$num' WHERE id = '$id'";
  $res = $mysqli->query($str_sql);
  if (!$res) {exit('データベースの更新に失敗しました');}
  $log = $log.'ID:'.$id.' SORT:'.$num.'<br />';
  }

  die('データベースに保存しました<br />'.$log);
  }
//////////////////////////////////////////////////////////



////////////////////////////////////////////////////表示用
//DB接続
  $mysqli = new mysqli('xxx', 'xxx', 'xxx', 'xxx');
  if ($mysqli->connect_error) {error_log($mysqli->connect_error);exit;}
  $mysqli->set_charset("utf8");

   $str_sql = "select * from `sortable` ORDER BY `sort`";
  $res = $mysqli->query($str_sql);
  if (!$res) {error_log($mysqli->error);exit;}

//接続
  while($dat = $res->fetch_assoc()){
  $list = $list.'<li id='.$dat[id].'>'.$dat[id].'</li>';
  }

//DB切断
  mysqli_close($mysqli);
//////////////////////////////////////////////////////////

?>

<html><head><title>sortableサンプル</title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<style type="text/css">
<!--
li{
 width:100px;
 margin: 5px;
 padding: 5px;
 background: #FFF;
 border: solid 1px #000;
 list-style:none;
}
-->
</style>
<head><body>
<ul id="datas"><? echo $list ?></ul>
<p id="log"></p>
<script>
$('#datas').sortable({
        update: function(){
          console.log($(this).sortable("toArray"));
$.post("sortable.php",{sort: $(this).sortable("toArray")},
  function(data){
 $("#log").append('<p>' + data + '</p>');
  });
 }
});
</script>
</body></html>