<?php
class search
{
    private $word = ""; //検索ワード

    public function search_data($text)
    {
 //検索 (1.薬品名2.会社名)
        $this->set_word($text);
        $search = $this->get_word();
      //configを読み込む
        require_once "./../../conf.php";
        $dsn = "mysql:dbname=".DB.";
              host=".DB_HOST.";
              charset=utf8";
        $dbh = new PDO($dsn, DB_USER, DB_PASS);

        $stmt = $dbh -> prepare("SELECT id,itemName,smallImageUrls FROM stocks WHERE itemName LIKE '%".$search."%'");
        $stmt -> execute();
        $data = array();
        $datas = array();
      
        $i = 0; //最後を判断する用の変数
        while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
            $cnt = count($row["id"]);
            $data["id"] = $row["id"];
            $data["itemName"] = $row["itemName"];
            $data["smallImageUrls"] = $row["smallImageUrls"];
            $i++;
            $data["hit_flg"] = 1;
            $datas = $data;
        }
        $stmt2 = $dbh -> prepare("SELECT id,itemName,smallImageUrls FROM stocks WHERE itemCaption LIKE '%".$search."%'");
        $stmt2 -> execute();
        $data = array();
        $datas = array();
        $cnt = 0;
        while ($row2 = $stmt2 -> fetch(PDO::FETCH_ASSOC)) {
            $data["id"] = $row2["id"];
            $data["itemName"] = $row2["itemName"];
            $data["smallImageUrls"] = $row2["smallImageUrls"];
            $i++;
            $data["hit_flg"] = 1;
            $datas[] = $data;
            $cnt++;
        }
        if (!empty($datas)) {
            return $datas;
        }
        $data["hit_flg"] = 0;
        $datas[] = $data;
        return $datas;
    }

    public function set_word($text)
    {
  //検索ワードセット
        return $this->word = $text;
    }

    public function get_word()
    {
  //検索ワード取得
        return $this->word;
    }
}
