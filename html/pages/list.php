
<?php

$jsonUrl = "./tpl/test.json"; //JSONファイルの場所とファイル名を記述
if(file_exists($jsonUrl)){
  $json = file_get_contents($jsonUrl);
  $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
  $obj = json_decode($json,true);
  $obj = $obj["res"]["Drags"];
  foreach ($obj as $key => $val){
    switch ($val["category"]) {
      case '解熱鎮痛剤':
      $drag0[]=$val;
        break;
      case '総合感冒薬':
      $drag1[]=$val;
        break;
      case '鎮咳去痰薬':
      $drag2[]=$val;
        break;
      case '解鼻炎用薬':
      $drag3[]=$val;
        break;
      case '解胃腸薬':
      $drag4[]=$val;
        break;
      case '下痢止め・整腸剤':
      $drag5[]=$val;
        break;
      case '便秘薬':
      $drag6[]=$val;
        break;
      case '痔疾用薬':
      $drag7[]=$val;
        break;
      case '乗り物酔い薬':
      $drag8[]=$val;
        break;
      case '目薬':
      $drag9[]=$val;
        break;
      case '口内炎・口唇ヘルパス':
      $drag10[]=$val;
        break;
      case '皮膚炎':
      $drag11[]=$val;
        break;
      case '傷創・消毒薬':
      $drag12[]=$val;
        break;
      case '筋肉痛・捻挫・関節痛薬':
      $drag13[]=$val;
        break;
      case 'ドリンク・ビタミン剤':
      $drag14[]=$val;
        break;
      default:
      $drag15[]=$val;
        break;
    }
  }
}  
//==================================

include "./tpl/header.php";
include "./tpl/Drag_list.php";
include "./tpl/footer.html";

//==================================

?>