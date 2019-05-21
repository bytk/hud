<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, shrink-to-fit=no">
	<script src="js/jquery.min.js"></script>
	<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

	<script src="js/roundslider.min.js"></script>
	<link rel="stylesheet" href="js/roundslider.min.css">

	<script>
	/* speed */
	$(document).ready(function() {
		navigator.geolocation.watchPosition(function(e){
			$("#speed").text(parseInt(e.coords.speed * 3.6));
			var speed = parseInt(e.coords.speed * 3.6);
			$( "#progressbar" ).progressbar({
				value: speed * 10
			});
			/*
			$("#slider").roundSlider({
				sliderType: "min-range",
				width: 10,
				value: speed,
				showTooltip: false, 
				editableTooltip: false,
				keyboardAction: false,
				radius: "90",
				lineCap: "round",
				circleShape: "pie",
				handleSize: "+10"
			});	*/
			$("#slider").roundSlider({
				sliderType: "min-range",
				showTooltip: false, 
				editableTooltip: false,
				radius: 105,
				width: 16,
				value: speed * 10,
				handleSize: 0,
				handleShape: "square",
				circleShape: "custom-half",
				startAngle: 300,
				tooltipFormat: "changeTooltip"
			});

			function changeTooltip(e) {
				var val = e.value, speed;
				if (val < 20) speed = "Slow";
				else if (val < 40) speed = "Normal";
				else if (val < 70) speed = "Speed";
				else speed = "Very Speed";

				return val + " km/h" + "<div>" + speed + "<div>";
			}

			
		}, function(e) {}, { enableHighAccuracy: true, maximumAge: 30000 });

		$( "#speed" ).click(function() {
		  document.body.requestFullscreen();
		});


	});
	
	</script>
	<style>
		html, body { background: #0; color: #4bb8f0; font: 18px DigitalDismay;  margin: 0 auto; width: 100%; height:100%; margin:0; padding:0; }
		@font-face { font-family: 'DigitalDismay'; src: url('./fnt/DigitalDismay.eot'); src: url('./fnt/DigitalDismay.eot?#iefix') format('embedded-opentype'), url('./fnt/DigitalDismay.woff2') format('woff2'); font-weight: normal; font-style: normal;}
		
		# slider {transform: scaleX(-1) rotate(0deg);}
		
		
		. rs-path-color {border:0; background:transparent; }
		. rs-range-color,. rs-border {border:0;}
		#slider .rs-handle  { background-color: transparent; border: 8px solid transparent; border-right-color: black; margin: -6px 0px 0px 14px !important; border-width: 6px 104px 6px 4px;}
		#slider .rs-handle:before  { display: block; content: " "; position: absolute; height: 22px; width: 22px; background: black; right: -11px; bottom: -11px; border-radius: 100px;}
		#slider .rs-tooltip  { top: 75%; font-size: 11px;}
		#slider .rs-tooltip div  { text-align: center; background: orange; color: white; border-radius: 4px; padding: 1px 5px 2px; margin-top: 4px;}
		#slider .rs-range-color  { background-color: #DB5959;}
		#slider .rs-path-color  { background-color: #F0C5C5;}
	</style>
</head>
<body>	

<div class="hud"><span id="speed">66</span>
<div id="progressbar"></div>
</div>
<div id="slider"></div>






</body>
</html>