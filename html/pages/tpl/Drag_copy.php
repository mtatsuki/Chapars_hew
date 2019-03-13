
    <title>jquery</title>
  </head>
  <body>
  <script type="text/javascript">
      $(function(){
        let url = document.referrer;                          //遷移元URL取得
        let urlParam = location.search.substring(1);          //パラメーター取得
        $("#right_nav >a").css("display","none");             //印刷するボタンを消す
        //&& (url.indexOf('details.php') != -1)
        if(urlParam) {                                       //URLにパラメータが存在する場合
            var param = urlParam.split('&');                  //「&」が含まれている場合は「&」で分割
            var paramArray = [];                              // パラメーター配列
        
            for (i = 0; i < param.length; i++) {              // 用意した配列にパラメータを格納
                var paramItem = param[i].split('=');
                paramArray[paramItem[0]] = paramItem[1];
            }
            color=eval(paramArray.id);
            console.log(color);
            if(color > 10 && color <=15){
              $("#a").css("background","#ff8484"); //IDパラメーターの場所の色を変える
            }
            if(color > 4 && color <=8){
              $("#b").css("background","#ff8484"); //IDパラメーターの場所の色を変える
            }
            if(color > 8 && color <=9){
              $("#c").css("background","#ff8484"); //IDパラメーターの場所の色を変える
            }
            if(color > 20 && color <=23){
              $("#d").css("background","#ff8484"); //IDパラメーターの場所の色を変える
            }
            if(color > 30 && color <=32){
              $("#e").css("background","#ff8484"); //IDパラメーターの場所の色を変える
            }
        }
      })
    </script>

  <div class="wrapper" id="copy_main">
    <!-- title -->
    <header class="title">
        <h1>HAL薬局</h1>
    </header>
    <!-- main -->
    <div class="c__store_main">
      <div id="store_map">
          <img src="./image/Drag_list/sample.png" alt="店内マップ">
          <article id="store_item_box">
              <h2 id="a">A</h2>
              <h2 id="b">B</h2>
              <h2 id="c">C</h2>
              <h2 id="d">D</h2>
              <h2 id="e">E</h2>
          </article><!-- store_item_box -->
      </div>
    </div>
      
    <div class="copy_details">
      <table>
          <tr><th>薬品名　　：</th><td><?php echo $class_details ->get_itemName();?></td></p></tr>
          <tr><th>棚番号　　：</th><td></td></p></tr>
          <tr><th>製品番号　：</th><td><?php echo $class_details ->get_itemCode();?></td></p></tr>
          <tr><th>値段　　　：</th><td><?php echo $class_details ->get_itemPrice();?>円</td></p></tr>
          <!-- <tr><th>制作会社　：</th><td>会社の名前</td></p></tr> -->
          <!-- <tr><th>販売会社　：</th><td><</td></p></tr> -->
      </table>
      <article class="p_main_text_info" >
          <section class="list_section">
          <h3 class="list_h_text">薬品情報</h3>
          <div></div>

            <?php foreach ($itemCaption_array as $val) {?>
              <div>
                  <p class="line_text"> <?php echo $val;?></p>
                  
              </div>
            <?php }  ?>
          </section><!-- section  test1 -->
      </article><!-- article  main_text_info -->


    </div>

    <a href="javascript:void(0)" onclick="window.print();return false;"><img src="image/icon/printer_2.png"></a>

  </div>   
