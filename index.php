
<meta name="viewport" content=" maximum-scale=1.0, user-scalable=0">
<link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon"> 
<title>loading</title>
<link rel="stylesheet" href="./index/styles.css">

<body style="background-color: #000000;">

    <img class="opt" style="width: 1px;" src="./index/opt.bmp" onclick="phnopt();">
    <div class="images">

    </div>
    <img class="phide phidem"  style="opacity: .1;width:1px;" src="./index/hide.bmp" onclick="phide()">
    <img class="phide phideb reload" style="opacity: .1;width:1px;" src="./index/reload.bmp" onclick="reload()">
    <div id="snackbar"></div>
    
    <div id="image-viewer" style="display: none;">
      <span class="right arrow">▶</span><span class="rightl arrow">▶</span>
      <span class="left arrow">◀</span><span class="leftl arrow">◀</span>
      
      <span class="close">+</span>
      <img src='./index/full.bmp' class="fullscreen" onclick="fullscreen();" style="color:blue;">
      <img src='./index/play.bmp' class="play" onclick="play();" style="color:blue;">
      <img src='./index/play.bmp' class="playl play" onclick="playl();" style="color:blue;">
      <img class="modal-content" id="full-image" loading="lazy">
      <img src="./index/hide.bmp" class="phide phideb" onclick="phide()">
      <img src="./index/del.bmp" class="play del" onclick="Delete()">
      <span style="left: 0px;" class="bar">-</span>
      <span style="right: 0px;" class="bar">-</span>
    </div>
<script src="./index/panzoom.min.js"></script>
    <script src="dir.js" ></script>
    <script src='./index/jquery-3.1.0.min.js' type="text/javascript"></script>
    <script src='./index/jquery-ui.min.js' type="text/javascript"></script>
    <script src='./index/main.js' type="text/javascript"></script>
    <script src='./index/index.js' type="text/javascript"></script>
    <script src='./index/indexweb.js' type="text/javascript"></script>
    <script src='./index/underscore-umd-min.js' type="text/javascript"></script>
  </body>

