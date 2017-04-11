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

	<div class='statContainer'>
		<div id="stat">
			<div class='statsBackground streamStatsGrey' id='viewcount' style="font-family:untzFont;"><span id='viewcount'></span></div>
			<div class='statsBackground streamStatsGrey' id='current' style="font-family:untzFont;"><span id='current'></span></div>
		</div>
	</div>


	<div class="reminder">
		<div align= 'center' class='PopOut buttonGrey unselectable' onclick="popChat()">
			<span class='PopOut'>Pop-out Chat</span>
		</div>
	</div>
	<div align= 'center' class='PopOut buttonGrey unselectable' id='click'>
		<span class='PopOut'>Show/Hide Chat Sidebar</span>
	</div>
</div>

<div class="info" style="font-family:untzFont;">
	<h1><br/><br/> Welcome to UNTZTIME live broadcast! </h1>
	Only LIVE DJ mixing with hardcore, j-core, house and EDM weeb tunes straight out of Japan.<br>
	<h2> Like us? </h2>
	Join our Discord community to chat with fellow untzers:<br>
	https://discord.gg/0ha2CfyN2PXNiE9H<br>
	Follow us on Twitter for anime streams, gaming streams, events and more:<br>
	https://twitter.com/UntzTime<br>
	Join our steam group and plan some vidya sessions:<br>
	http://steamcommunity.com/groups/untztime<br>
	<br>
</div>

<div id='sidebar'>
<iframe src="https://kiwiirc.com/client?settings=5f7ff90fe655abb1a1f1b10440184afd" width="100%" height="100%" align="right" scrolling="no" seamless="no"></iframe>
</div>

</body>
</html>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

<script>
function myFunction() {
	if(document.getElementById("panel").style.display == "none") {
    		document.getElementById("panel").style.display = "block";
	} else {document.getElementById("panel").style.display = "none"}
}
</script>


<script src="jquery.min.js" type="text/javascript"></script>
 
<script type="text/javascript">
 
$(function() {
 
    getStatus();
 
});
 
function getStatus() {		//function to update current number of viewers and current streamer.
 
    $('span#current').load('displayUntzStreamer.php');
    $('span#viewcount').load('untzviews.php');
    setTimeout("getStatus()",5000);

}
 
</script>


<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>



<script>
function popChat() {
    window.open("chat.html", width="300", height="650");
}
</script>

<script>

$('#click').click(function()	//function that changes margin properties of content on sidebar toggle.
{   
	$("#sidebar").toggle();
	if ( $('#sidebar').is(':hidden') ) {
		$('.video').css('margin-left', '250px');
		$('.video').css('margin-right', '250px');
		$('.info').css('margin-left', '250px');
		$('.info').css('margin-right', '250px');
		$('.statContainer').css('margin-left', '250px');
	}else {
		$('.video').css('margin-right', '500px');
		$('.video').css('margin-left', '0px');
		$('.info').css('margin-right', '500px');
		$('.info').css('margin-left', '0px');
		$('.statContainer').css('margin-left', '0px');
	}

		
});

</script>

