<?php

class scrine_image{

        public function image_url($id_array,$id_url){
                echo count($id_array);
                for($i=0;count($id_array)>$i;$i++){
                    $id_url=$id_url." ".$id_array[$i];
                }
            $this->image_command($id_url);
        }           

        //===========================================================
        //SQL接続
        //===========================================================
        //引き数　： DB DB_HOST DB_USER DB_PASS
        //戻り値　：　dbh
        //-----------------------------------------------------------
        public function image_command($id_url){
            var_dump(exec($id_url));
            
        }           

}

?>