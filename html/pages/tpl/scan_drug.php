<title>jquery</title>
</head>
<body>
<div class="container wrapper">
    <!-- title -->
    <header class="title">
        <h1>バーコードリーダー</h1>
    </header>
    <!-- main -->
    <div class="row c__store_main " id="bar_code" >
        <div class="col-md-12">
            <span id="scanned-TYPE">CODE TYPE</span>
            <form action="#" method="GET">
                <div>
                <textarea rows="3" id="scanned-QR" name="barcode"></textarea>
                </div>
                <button>読み取る</button>
            </form>
        </div>
        <div class="col-md-12">
            <div class="thumbnail" id="result" style="width:320px;height:240px;max-width:320px;">
                <img id="scanned-img" style="width:100%;height:100%;min-height:150px;max-height:320px;">
            </div>
            <div>
                <canvas width="640" height="480" id="webcodecam-canvas"></canvas>
                <div class="scanner-laser laser-rightBottom" style="opacity:0.5;"></div>
                <div class="scanner-laser laser-rightTop" style="opacity:0.5;"></div>
                <div class="scanner-laser laser-leftBottom" style="opacity:0.5;"></div>
                <div class="scanner-laser laser-leftTop " style="opacity:0.5;"></div>
                <div class="cp_ipselect cp_sl04">
                    <select id="camera-select" class="form-control"></select>
                </div>
                <div class="btn-group" role="group"id="button_box">
                    <button class="btn btn-default" type="button" id="play">play</button>
                    <button class="btn btn-default" type="button" id="pause"><strong>pause</strong></button>
                    <button class="btn btn-default" type="button" id="stop"><strong>stop</strong><br></button>
                </div>
            </div>
        </div>
        <div class="col-md-12" id="ber_line_box">
            <p><img src="./image/icon/gear_icon.png" alt="設定アイコン"> 設定</p>
            <div>
                <p>
                    <span class="label label-default" id="zoom-value">倍率 : 2</span>
                    <input type="range" min="10" max="50" value="0" id="zoom" onchange="Page.changeZoom();"/>
                </p>
                <p>
                    <span class="label label-default" id="brightness-value">明るさ : 20</span>
                    <input type="range" value="20" min="0" max="128" id="brightness" onchange="Page.changeBrightness();"/>
                </p>
                <p>
                    <span class="label label-default" id="contrast-value">コントラスト : 0</span>
                    <input type="range" value="0" min="0" max="64" id="contrast" onchange="Page.changeContrast();"/>
                </p>
                <p>
                    <span class="label label-default" id="threshold-value">2値化 : 0</span>
                    <input type="range" value="0" min="0" max="512" id="threshold" onchange="Page.changeThreshold();"/>
                </p>
                <p>
                    <span class="label label-default" id="sharpness-value">鋭化 : off</span>
                    <input type="checkbox" id="sharpness" onchange="Page.changeSharpness();"/>
                </p>
                <p>
                    <span class="label label-default" id="grayscale-value">白黒 : off</span>
                    <input type="checkbox" id="grayscale" onchange="Page.changeGrayscale();"/>
                </p>
                <p>
                    <span class="label label-default" id="flipVertical-value">垂直反転 : off</span>
                    <input type="checkbox" id="flipVertical" onchange="Page.changeVertical();"/>
                </p>
                <p>
                    <span class="label label-default" id="flipHorizontal-value">水平反転: off</span>
                    <input type="checkbox" id="flipHorizontal" onchange="Page.changeHorizontal();"/>
                </p>
            </div>
        </div>
    </div>
    
</div>
<div class="not-use-img">
    <button id="decode-img"></button>
    <button id="grab-img"></button>
</div>
<script type="text/javascript" src="js/qrcodelib.js"></script>
<script type="text/javascript" src="js/webcodecamjs.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>