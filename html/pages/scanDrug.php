<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <span id="scanned-TYPE">CODE TYPE</span>
            <textarea rows="3" id="scanned-QR"></textarea>
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
                <div class="scanner-laser laser-leftTop" style="opacity:0.5;"></div>
                <select id="camera-select" class="form-control"></select>
                <div class="btn-group" role="group">
                    <button class="btn btn-default" type="button" id="play">play</button>
                    <button class="btn btn-default" type="button" id="pause"><strong>pause</strong></button>
                    <button class="btn btn-default" type="button" id="stop"><strong>stop</strong><br></button>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <span class="label label-default" id="zoom-value">倍率 : 2</span>
            <input type="range" min="10" max="50" value="0" id="zoom" onchange="Page.changeZoom();"/>
            <span class="label label-default" id="brightness-value">明るさ : 20</span>
            <input type="range" value="20" min="0" max="128" id="brightness" onchange="Page.changeBrightness();"/>
            <span class="label label-default" id="contrast-value">コントラスト : 0</span>
            <input type="range" value="0" min="0" max="64" id="contrast" onchange="Page.changeContrast();"/>
            <span class="label label-default" id="threshold-value">2値化 : 0</span>
            <input type="range" value="0" min="0" max="512" id="threshold" onchange="Page.changeThreshold();"/>
            <span class="label label-default" id="sharpness-value">鋭化 : off</span>
            <input type="checkbox" id="sharpness" onchange="Page.changeSharpness();"/>
            <span class="label label-default" id="grayscale-value">白黒 : off</span>
            <input type="checkbox" id="grayscale" onchange="Page.changeGrayscale();"/>
            <span class="label label-default" id="flipVertical-value">垂直反転 : off</span>
            <input type="checkbox" id="flipVertical" onchange="Page.changeVertical();"/>
            <span class="label label-default" id="flipHorizontal-value">水平反転: off</span>
            <input type="checkbox" id="flipHorizontal" onchange="Page.changeHorizontal();"/>
        </div>
    </div>
</div>
<div>
使わないけど設置しておかないとエラーが表示されるボタン
<button id="decode-img"></button>
<button id="grab-img"></button>
</div>
<script type="text/javascript" src="js/qrcodelib.js"></script>
<script type="text/javascript" src="js/webcodecamjs.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>