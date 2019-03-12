<?php
  function str_judge($input){
    require_once "../../conf.php";
    $path = MeCab_URL;

    //パイプ処理
    $descriptorspec = array(
    0 => array("pipe","r"),
    1 => array("pipe","w")
    );
    $process = proc_open($path, $descriptorspec, $pipes);
    if(is_resource($process)) {
    fwrite($pipes[0], $input);
    fclose($pipes[0]);
    while(!feof($pipes[1])){
    $output[] = fgets($pipes[1]);
    }
    fclose($pipes[1]);
    proc_close($process);
    }
    
    $array_word = array();
    foreach($output as $value){
      if(preg_match("/名詞|形容詞|動詞|接頭詞/", $value)){
        if(strpos($value,'接頭詞') !== false){
          $value = mb_strstr($value, "接頭詞" , true);
          $value = trim($value);
        }
        elseif(strpos($value,'名詞') !== false){
          $value = mb_strstr($value, "名詞" , true);
          $array_word[] = trim($value);
        }
        elseif(strpos($value,'形容詞') !== false){
          $value = mb_strstr($value, "形容詞" , true);
          $value = trim($value);
          $array_word[] = trim($value);
        }
        elseif(strpos($value,'感動詞') !== false){
          $value = mb_strstr($value, "感動詞" , true);
          $array_word[] = trim($value);
        }
        elseif(strpos($value,'動詞') !== false && strpos($value,'助動詞') === false){
          $value = mb_strstr($value, "動詞" , true);
          $array_word[] = trim($value);
        }
      }
    }
    return $array_word;
  }
?>