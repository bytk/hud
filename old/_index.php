﻿<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<meta name="mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, shrink-to-fit=no">

  <script>
  /* speed */
$(document).ready(function() {
  navigator.geolocation.watchPosition(function(e){
    $("#speed").text(parseInt(e.coords.speed * 3.6));
	var speed = parseInt(e.coords.speed * 3.6);
      $( "#progressbar" ).progressbar({
      value: speed * 10
    });

  }, function(e) {}, { enableHighAccuracy: true, maximumAge: 30000 });
window.scrollTo(0,1);

});
$(document).ready(function() {
$( "#speed" ).click(function() {
  document.body.requestFullscreen();
});
});
  </script>
</head>
<body onload="window.scrollTo(0,1);">
 
 
 
<style>

@font-face { font-family: 'DigitalDismay'; src: url('./fnt/DigitalDismay.svg#DigitalDismay') format('svg'), url('./fnt/DigitalDismay.ttf') format('truetype'), url('./fnt/DigitalDismay.woff') format('woff'); font-weight: normal; font-style: normal;}
@font-face { font-family: 'DigitalDismay'; src: url('./fnt/DigitalDismay.eot'); src: url('./fnt/DigitalDismay.eot?#iefix') format('embedded-opentype'), url('./fnt/DigitalDismay.woff2') format('woff2'); font-weight: normal; font-style: normal;}


@font-face { font-family: 'WWDigital'; src: url('./fnt/WWDigital.svg#WWDigital') format('svg'), url('./fnt/WWDigital.ttf') format('truetype'), url('./fnt/WWDigital.woff') format('woff'); font-weight: normal; font-style: normal;}
@font-face { font-family: 'WWDigital'; src: url('./fnt/WWDigital.eot'); src: url('./fnt/WWDigital.eot?#iefix') format('embedded-opentype'), url('./fnt/WWDigital.woff2') format('woff2'); font-weight: normal; font-style: normal;}


.hud { transform: scaleX(-1) rotate(180deg);
width: 100%; height: 200%; background: #000; position: absolute; margin: 0 auto; left: 0; right: 0;}

html, body { background: #0; color: #4bb8f0; font: 18px DigitalDismay;  margin: 0 auto; width: 100%; height:100%; margin:0; padding:0; }

#speed {width: 100%; height: 359px; display: table; margin: 0 auto; font-size: 402px; text-align: center; position: absolute; top: 560px;}
#progressbar {    background: transparent; margin: 10px; border: 0; position: absolute; display: inline-block; width: 100%; top: 485px;}
.ui-progressbar .ui-progressbar-value {background: -moz-linear-gradient(left, rgba(38,85,139,0.1) 0%, rgba(58,139,194,0.51) 45%, rgba(75,184,240,1) 100%);background: -webkit-linear-gradient(left, rgba(38,85,139,0.1) 0%,rgba(58,139,194,0.51) 45%,rgba(75,184,240,1) 100%);background: linear-gradient(to right, rgba(38,85,139,0.1) 0%,rgba(58,139,194,0.51) 45%,rgba(75,184,240,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1a26558b', endColorstr='#4bb8f0',GradientType=1 ); border:0}
</style>


<div class="hud"><span id="speed">66</span>
<div id="progressbar"></div>
</div>
</body>
</html>




