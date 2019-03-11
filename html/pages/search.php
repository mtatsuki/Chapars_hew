<?php
  /*
    JSON_UNESCAPED_UNICODE (integer)
    マルチバイト Unicode 文字をそのままの形式で扱います (デフォルトでは \uXXXX にエスケープします)。 PHP 5.4.0 以降で使用可能です。

    SON_UNESCAPED_SLASHES (integer)
    / をエスケープしません。 PHP 5.4.0 以降で使用可能です。

    JSON_NUMERIC_CHECK (integer)
    数値形式の文字列を数値としてエンコードします。 PHP 5.3.3 以降で使用可能です。

    JSON_PRETTY_PRINT (integer)
    返される結果の書式を、スペースを使って整えます。 PHP 5.4.0 以降で使用可能です。

    JSON_FORCE_OBJECT (integer)
    非連想配列を使用した場合に、配列ではなくオブジェクトを出力します。 出力を受け取る側がオブジェクトを期待しており、配列が空っぽである場合などに特に便利です。 この定数は PHP 5.3.0 以降で使用可能です。

    その他 ：（http://php.net/manual/ja/json.constants.php）
  */
  //JSON形式に文字列を変換
  // $arr = json_encode($arr , JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK  | JSON_PRETTY_PRINT | JSON_FORCE_OBJECT );

  //ファイルに保存 文字列の文字コードを指定（文字化防止）
  // file_put_contents("test.json" , mb_convert_encoding($arr, 'utf-8'));

  session_start();  //検索ワードを残しておく用
  require_once "./func/getdata.php";  //DBから検索する関数を呼び出す
  //検索用変数
  $name = ""; //検索ワード
  $datas = array();
  require_once "./func/htmlchars.php";
  require_once "./class/class_search.php";

if (isset($_GET["name"]) && isset($_GET["search"])) {
    $_SESSION["name_search"] = h($_GET["name"]);
    $name =  $_SESSION["name_search"];
    $array_word = array();
    require_once "./func/str_judge.php";
    $array_word = str_judge($name);
  
    require_once "./class/class_search.php";
    //  検索1回目  //

    $del_position = 0;  //配列の削除位置
    $i = 0; //検索結果の位置
    $search_result = array();

    $s = new Search();
    foreach ($array_word as $word) {
        $search_result[] = $s->search_data($word);
        if ($search_result[$i][0]["hit_flg"] == 1) {
            unset($array_word[$del_position]);  //検索でヒットした要素を削除
            $del_position++;
            $array_word = array_values($array_word);  //indexを詰める(欠番が出来たため)
            reset($array_word);
        }
        $i++;
    }

    //  検索2回目  //

    require_once "./func/get_kanji.php";
    $array_word_second = array();
    $array_word_second = get_kanji($array_word);

    $del_position = 0;  //配列の削除位置
    $s = new Search();
    foreach ($array_word_second as $word) {
        $search_result[] = $s->search_data($word);
        if ($search_result[$i][0]["hit_flg"] == 1) {
            unset($array_word_second[$del_position]);  //検索でヒットした要素を削除
            $del_position++;
            $array_word_second = array_values($array_word_second);  //indexを詰める(欠番が出来たため)
            reset($array_word_second);
        }
        $i++;
    }

    //  hit_flgが0の要素を排除する  //

    $i = 0; //削除位置を指定する変数
    $del_flg = 0; //削除されたかどうかを判断する変数
    $last_array = array();  //最終的に使用する配列

    //表示用に検索結果を整理する
    foreach($search_result as $search_word){
        foreach($search_word as $search){
            if($search["hit_flg"] == 1){
                $last_array[$search["id"]]["itemName"] = $search["itemName"];
                $last_array[$search["id"]]["smallImageUrls"] = $search["smallImageUrls"];
                $last_array[$search["id"]]["itemName"] = $search["itemName"];
            }
        }
    }
    $last_array = array_unique($last_array,SORT_REGULAR);
} else {
    $name = "";
    $search_result[] = getdatas($name);
    $last_array = array();  //最終的に使用する配列

    //表示用に検索結果を整理する
    foreach($search_result as $search_word){
        foreach($search_word as $search){
                $last_array[$search["id"]]["itemName"] = $search["itemName"];
                $last_array[$search["id"]]["smallImageUrls"] = $search["smallImageUrls"];
                $last_array[$search["id"]]["itemName"] = $search["itemName"];
        }
    }
    $last_array = array_unique($last_array,SORT_REGULAR);
}

//==================================

include "./tpl/header.php";
include "./tpl/Drag_search.php";
include "./tpl/footer.html";

//==================================
