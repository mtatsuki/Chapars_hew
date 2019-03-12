
    <title>jquery</title>
  </head>
  <script>
    $(function() {
    $.getJSON("./json/id_array.json" , function(data) {
        var ulObj = $("#demo")
        var length = Object.keys(data).length;
        // console.log(length); 要素個数
        // const require = require('require');
        command_url="node /works/project_file/chapars/Chapars_hew/html/pages/js/js_screenshot.js";
        for(var i = 0; i < length; i++) {
            command_url=command_url+" "+data[i];
        }
        ulObj.append($("<p>").text(command_url));

        });
        
    });

  </script>
  <body>
  <script type="text/javascript"></script>

  <div class="wrapper" >
      <div id="demo"></div>
  </div>   
