<?php
  function get_kanji($get_array){
    $str_array = array(); //初期化(ここに1文字ずつ区切った文字が入る)
    foreach($get_array as $str){
      $str_array[] = preg_split("//u",$str,-1,PREG_SPLIT_NO_EMPTY);
    }

    $kanji_array = array(); //return用の配列(漢字だけが格納される)
    foreach($str_array as $str_words){
      foreach($str_words as $value){
        if(!preg_match('/[^一-龠]/u',$value)){
          $kanji_array[] = $value;  //漢字なら格納する
        }
      }
    }
    return $kanji_array;
  }
?>