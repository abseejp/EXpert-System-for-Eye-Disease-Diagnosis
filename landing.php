
<!DOCTYPE HTML>
<html>
<head>
<title>Expert System</title>
<!--Custom Theme files-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Analog Cum Digital Clock Widget Responsive, Smartphone Compatible web template" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- font files -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!-- /font files -->
<!-- css files -->
<link href="css/flipclock.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css files -->
<!-- js files -->

<!-- /js files -->
<body style="background-image:url(./images/eye13.jpg);">
<section class="header">
	<h1>Eye Expert</h1>
</section>
<section class="analog-w3ls">
	<div class="container">
		<div id="myclock"></div>
	</div>
</section>
<section class="digital">
	<div class="clock" style="margin:2em;"></div>
	<p style="color: white;">click <a href="index.php" style="color: #A52A2A">here</a> to proceed</p>
</section>   
<div class="footer">
	<p> &copy; 2018 Eye Expert. All Rights Reserved | Designed by Abseejp</p>
</div>
<!-- js files for analog clock -->
<script language="javascript" type="text/javascript" src="js/jquery-latest.min.js"></script> 
<script language="javascript" type="text/javascript" src="js/jquery.thooClock.js"></script>  
<script language="javascript">
	var intVal, myclock;

	$(window).resize(function(){
		window.location.reload()
	});
	$(document).ready(function(){

		var audioElement = new Audio("");

		//clock plugin constructor
		$('#myclock').thooClock({
			size:$(document).height()/1.4,
			onAlarm:function(){
				//all that happens onAlarm
				$('#alarm1').show();
				alarmBackground(0);
				//audio element just for alarm sound
				document.body.appendChild(audioElement);
				var canPlayType = audioElement.canPlayType("audio/ogg");
				if(canPlayType.match(/maybe|probably/i)) {
					audioElement.src = 'alarm.ogg';
				} else {
					audioElement.src = 'alarm.mp3';
				}
				// erst abspielen wenn genug vom mp3 geladen wurde
				audioElement.addEventListener('canplay', function() {
					audioElement.loop = true;
					audioElement.play();
				}, false);
			},
			showNumerals:true,
			brandText:'Analog Clock',
			brandText2:'Widget',
			onEverySecond:function(){
				//callback that should be fired every second
			}
		});

	});


</script>
<!-- /js files for analog clock -->
<!-- js files for digital clock -->
<script src="js/flipclock.js"></script>	
<script type="text/javascript">
	var clock;			
	$(document).ready(function() {
		clock = $('.clock').FlipClock({
		clockFace: 'TwelveHourClock'
		});
	});
</script>
<!-- /js files for digital clock -->
</body>
</html>