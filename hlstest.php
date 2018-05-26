<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/default.css" title="default">

<meta charset="UTF-8">
<title>Welcome to UNTZ!</title>
<script src="./jwplayer/jwplayer.js"></script>
<script>jwplayer.key="Zas9MYoZBb7BspmsIndG3D3Cgkd595f9XA5Z/A==";</script>

</head>
<body>

<div class="title">
<img src="sitelogo.png" height="52" width="52" />
<img src="logo.png"/>
</div>

<div class='page'>
	<div class='video'>
		<div id="myElement">Loading the player...</div>
		<script type="text/javascript">	//Script to initilise and load the video player.
		var playerInstance = jwplayer("myElement");
		playerInstance.setup({
	

		sources: [{
	    		file: "rtmp://untz.xen.prgmr.com/live/flv:untz.flv"
			},{
	    		file: "http:///untz.xen.prgmr.com/live/untz/index.m3u8"
			},{
	   		 file: "http://untz.xen.prgmr.com/live/untz/index.mp4"
			}],
			rtmp: {

            		bufferlength: 3
        		},
           		fallback: "false",
	   		androidhls: "true",
	   		width: "100%",
	    		image: "./myPoster.jpg",
	    		autostart: "true",
	    		primary: "flash",
	    		aspectratio: "16:9"


			});
		</script>
	</div>
</div>
</body>
</html>
