<?php
    class details{
        //プロパティ
        private $id ="";
        private $itemCode = "";
        private $itemName = "";
        private $catchcopy = "";
        private $itemPrice = "";
        private $itemCaption = "";
        private $imageFlag = "";
        private $smallImageUrls = "";
        private $mediumImageUrls = "";
        private $created_at = "";
        private $updated_at = "";

        //===========================================================
        //薬の詳細データのセット
        //===========================================================
        //id
        public function set_id($str){
            $this->id=$str;
        }    
                
        //itemCode
        public function set_itemCode($str){
            $this->itemCode=$str;
        }    
                
        //itemName
        public function set_itemName($str){
            $this->itemName=$str;
        }    
                
        //catchcopy
        public function set_catchcopy($str){
            $this->catchcopy=$str;
        }    
                
        //itemPrice
        public function set_itemPrice($str){
            $this->itemPrice=$str;
        }    
                
        //itemCaption
        public function set_itemCaption($str){
            $this->itemCaption=$str;
        }    
                
        //imageFlag
        public function set_imageFlag($str){
            $this->imageFlag=$str;
        }    
                
        //smallImageUrls
        public function set_smallImageUrls($str){
            $this->smallImageUrls=$str;
        }    
                
        //mediumImageUrls
        public function set_mediumImageUrls($str){
            $this->mediumImageUrls=$str;
        }    
                
        //created_at
        public function set_created_at($str){
            $this->created_at=$str;
        }    
                
        //updated_at
        public function set_updated_at($str){
            $this->updated_at=$str;
        }    
        //===========================================================
        //薬の詳細データのゲット
        //===========================================================
        //id
        public function get_id(){
            return $this ->id;

        }    
                
        //itemCode
        public function get_itemCode(){
            return $this->itemCode;
        }    
                
        //itemName
        public function get_itemName(){
            return $this->itemName;
        }    
                
        //catchcopy
        public function get_catchcopy(){
            return $this->catchcopy;
        }    
                
        //itemPrice
        public function get_itemPrice(){
            return $this->itemPrice;
        }    
                
        //itemCaption
        public function get_itemCaption(){
            return $this->itemCaption;
        }    
                
        //imageFlag
        public function get_imageFlag(){
            return $this->imageFlag;
        }    
                
        //smallImageUrls
        public function get_smallImageUrls(){
            return $this->smallImageUrls;
        }    
                
        //mediumImageUrls
        public function get_mediumImageUrls(){
            return $this->mediumImageUrls;
        }    
                
        //created_at
        public function get_created_at(){
            return $this->created_at;
        }    
                
        //updated_at
        public function get_updated_at(){
            return $this->updated_at;
        }    
                

        //===========================================================
        //全データ取得
        //===========================================================
        //引き数　：　薬のID、dbh
        //戻り値　：　DBの一行データ
        //-----------------------------------------------------------
        public function get_date_one($id,$dbh){
            //-------------------------------------------------------
            //変数初期化
            //-------------------------------------------------------
            $data_all=array();
            //-------------------------------------------------------
            //SQL処理
            //-------------------------------------------------------
            $dbh -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);                           //エラーレベル設定
            $sql="SELECT * FROM stocks WHERE id=".$id."";                                           //SQL文作成 
            $stmt = $dbh -> prepare($sql);      
            $stmt -> execute();                                                                     //クエリの実行
            // var_dump($stmt);                                                                     //配列表示(確認のため)
            $data_one = $stmt->fetch(PDO::FETCH_ASSOC);                                             //一行取得
            return $data_one;
        }
        //===========================================================
        //IDのみ取得
        //===========================================================
        //引き数　：　薬のID、dbh
        //戻り値　：　ID全データ
        //-----------------------------------------------------------
        public function get_id_date($dbh){
            //-------------------------------------------------------
            //変数初期化
            //-------------------------------------------------------
            $data_all=array();
            //-------------------------------------------------------
            //SQL処理
            //-------------------------------------------------------
            $dbh -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);                           //エラーレベル設定
            $sql="SELECT id FROM stocks";                                           //SQL文作成 
            $stmt = $dbh -> prepare($sql);      
            $stmt -> execute();                                                                     //クエリの実行
            // var_dump($stmt);                                                                     //配列表示(確認のため)
            while($data_one = $stmt->fetch(PDO::FETCH_ASSOC)){
                $id[] = $data_one['id'];
            }                                             //一行取得
            return $id;
        }
    }
?>