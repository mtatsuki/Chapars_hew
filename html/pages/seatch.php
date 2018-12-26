
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



  
  $jsonUrl = "./tpl/test.json"; //JSONファイルの場所とファイル名を記述
//==================================

include "./tpl/header.php";
include "./tpl/Drag_seatch.php";
include "./tpl/fooder.html";

//==================================

?>