
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
            if(paramArray.id>="999999950"&&paramArray.id<="9999999959"){
              $("#A").css("background","#ff8484"); //IDパラメーターの場所の色を変える
            }
            else if(paramArray.id>="9999999960"&&paramArray.id<="9999999969"){
              $("#B").css("background","#ff8484"); //IDパラメーターの場所の色を変える
            }
            else if(paramArray.id>="9999999970"&&paramArray.id<="9999999979"){
              $("#C").css("background","#ff8484"); //IDパラメーターの場所の色を変える
            }
            else if(paramArray.id>="9999999980"&&paramArray.id<="9999999989"){
              $("#D").css("background","#ff8484"); //IDパラメーターの場所の色を変える
            }
            else if(paramArray.id>="9999999990"&&paramArray.id<="99999999"){
              $("#E").css("background","#ff8484"); //IDパラメーターの場所の色を変える
            }

        }
      })
    </script>

  <div class="wrapper" id="copy_main">
    <!-- title -->
    <header class="title">
        <h1>yakkyokumei</h1>
    </header>
    <!-- main -->
    <div class="c__store_main">
      <div id="store_map">
          <img src="./image/Drag_list/sample.png" alt="店内マップ">
          <article id="store_item_box">
              <h2 id="A">A</h2>
              <h2 id="B">B</h2>
              <h2 id="C">C</h2>
              <h2 id="D">D</h2>
              <h2 id="E">E</h2>
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
          <h3 class="list_h_text">test1</h3>
          <?php foreach($itemCaption_array as $val){?>
              <div>
                  <p class="line_text"> <?php echo $val;?></p>
                  
              </div>
          <?php }  ?>
          </section><!-- section  test1 -->
      </article><!-- article  main_text_info -->


    </div>

    <a href="javascript:void(0)" onclick="window.print();return false;"><img src="image/icon/printer_2.png"></a>

  </div>   
