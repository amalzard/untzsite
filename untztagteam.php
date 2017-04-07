<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/default.css" title="default">
<link rel="alternate stylesheet" type="text/css" href="css/megumin.css" title="megumin">
<link rel="alternate stylesheet" type="text/css" href="css/totori.css" title="totori">

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
<div class="loginstate">
<?php
if ($_SESSION["loginstate"] == 0) {
echo "<a href=#login-box class=login-window>Login / Sign In</a> <a href=http://untz.xen.prgmr.com/viewerregister.html> Register</a>";
}
else {
echo $_SESSION["username"] . "<a href=http://untz.xen.prgmr.com/viewerlogout.php>Logout</a>";
}
?>
<!--<a href=http://untz.xen.prgmr.com/untzextra.php>Gayming</a>-->
</div>
<div id="login-box" class="login-popup">
<a href="#" class="close"><img src="close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
  <form method="post" class="signin" action="viewerlogin.php">

        <fieldset class="textbox">
        <label class="username">
        <span>Username</span>
        <input id="username" name="username" value="" type="text" autocomplete="on" placeholder="Username">
        </label>
        <label class="password">
        <span>Password</span>
        <input id="password" name="password" value="" type="password" placeholder="Password">
        </label>
        <input type="submit" value="Log In"></input>
        <p>
        <a class="forgot" href="#">Forgot your password?</a>
        </p>        
        </fieldset>
  </form>
</div>




<div class='video'>
<div id="myElement">Loading the player...</div>
<script type="text/javascript">
var playerInstance = jwplayer("myElement");
playerInstance.setup({
	sources: [{
	    file: "rtmp://untz.xen.prgmr.com/live/flv:vjuntz.flv"
	},{
	    file: "http:///untz.xen.prgmr.com/live/vjuntz/index.m3u8"
	},{
	    file: "http://untz.xen.prgmr.com/live/vjuntz/index.mp4"
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
<div class='audio'>
<div id="container">Loading the player...</div>
<script type="text/javascript">
var playerInstance = jwplayer("container");
playerInstance.setup({
	sources: [{
	    file: "rtmp://untz.xen.prgmr.com/live/flv:djuntz.flv"
	},{
	    file: "http:///untz.xen.prgmr.com/live/djuntz/index.m3u8"
	},{
	    file: "http://untz.xen.prgmr.com/live/djuntz/index.mp4"
	}],
	rtmp: {

            bufferlength: 3
        },
            fallback: "false",
	    androidhls: "true",
	    height: "30",
	    width: "100%",
	    //image: "./myPoster.jpg",
	    autostart: "true",
	    primary: "flash"
	    //aspectratio: "16:9"

});
</script>
</div>



<div id='sidebar'>
<iframe src="https://kiwiirc.com/client?settings=5f7ff90fe655abb1a1f1b10440184afd" width="100%" height="100%" align="right" scrolling="no" seamless="no"></iframe>
</div>

<div id="stat">
<div id='viewcount'></div>
<div id='current'></div>
</div>

<div class="reminder">
<p>
<form>
<input type="button" value="Pop-out Chat" onclick="popChat()">
<input type="button" id='click' value="Show/Hide Chat Sidebar" />
</form>
</p>
</div>

<div id="footer">

<div id="info" style="font-family:untzFont;">
<h1> Welcome to UNTZTIME live broadcast! </h1>
Only LIVE DJ mixing with hardcore, j-core, house and EDM weeb tunes straight out of Japan.<br>
<h2> Like us? </h2>
Join our Discord community to chat with fellow untzers:<br>
https://discord.gg/0ha2CfyN2PXNiE9H<br>
Follow us on Twitter for anime streams, gaming streams, events and more:<br>
https://twitter.com/UntzTime<br>
Join our steam group and plan some vidya sessions:<br>
http://steamcommunity.com/groups/untztime<br>
<br>
<br>
</div>

<br>
<br>


<div class="drunek">
<img src="drunek.png" height="560" />
</div>

<form>
<select>
  <option onclick="switch_style('default');return false;" id="default">default</option>
  <option onclick="switch_style('megumin');return false;" id="megumin">megumin</option>
  <option onclick="switch_style('totori');return false;" id="totori">totori</option>
</select> 
</form>

</div>

</html>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74405756-1', 'auto');
  ga('send', 'pageview');

</script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

<script type="text/javascript">
       setInterval(refreshIframe1, 30000);
       function refreshIframe1() {
           $("#stats")[0].src = $("#stats")[0].src;
       }

   </script>
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
 
function getStatus() {
 
    $('div#current').load('displayUntzStreamer.php');
    $('div#viewcount').load('untzviews.php');
    setTimeout("getStatus()",5000);

}
 
</script>


<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>

<script>
$(document).ready(function() {
$('a.login-window').click(function() {
    
            //Getting the variable's value from a link 
    var loginBox = $(this).attr('href');

    //Fade in the Popup
    $(loginBox).fadeIn(300);
    
    //Set the center alignment padding + border see css style
    var popMargTop = ($(loginBox).height() + 24) / 2; 
    var popMargLeft = ($(loginBox).width() + 24) / 2; 
    
    $(loginBox).css({ 
        'margin-top' : -popMargTop,
        'margin-left' : -popMargLeft
    });
    
    // Add the mask to body
    $('body').append('<div id="mask"></div>');
    $('#mask').fadeIn(300);
    
    return false;
});

// When clicking on the button close or the mask layer the popup closed
$('a.close, #mask').live('click', function() { 
  $('#mask , .login-popup').fadeOut(300 , function() {
    $('#mask').remove();  
}); 
return false;
});
});

</script>

<script>
function popChat() {
    window.open("chat.html", width="300", height="650");
}
</script>

<script>

$('#click').click(function()
{   
	$("#sidebar").toggle();
	if ( $('#sidebar').is(':hidden') ) {
		$('.video').css('margin-right', '250px');
		$('.video').css('margin-left', '250px');
		$('#info').css('margin-right', '0px');
		$('#viewcount').css('margin-left', '250px');
	}else {$('.video').css('margin-right', '500px');
		$('.video').css('margin-left', '0px');
		$('#viewcount').css('margin-left', '0');
		$('#info').css('margin-right', '500px');
	}
	if ( $('#sidebar').is(':hidden') ) {
		$('.audio').css('margin-right', '250px');
		$('.audio').css('margin-left', '250px');
		$('#info').css('margin-right', '0px');
		$('#viewcount').css('margin-left', '250px');
	}else {$('.audio').css('margin-right', '500px');
		$('.audio').css('margin-left', '0px');
		$('#viewcount').css('margin-left', '0');
		$('#info').css('margin-right', '500px');
	}

		
});

</script>

<script>

// *** TO BE CUSTOMISED ***

var style_cookie_name = "style" ;
var style_cookie_duration = 30 ;
var style_domain = "untz.xen.prgmr.com" ;

// *** END OF CUSTOMISABLE SECTION ***
// You do not need to customise anything below this line

function switch_style ( css_title )
{
// You may use this script on your site free of charge provided
// you do not remove this notice or the URL below. Script from
// http://www.thesitewizard.com/javascripts/change-style-sheets.shtml
  var i, link_tag ;
  for (i = 0, link_tag = document.getElementsByTagName("link") ;
    i < link_tag.length ; i++ ) {
    if ((link_tag[i].rel.indexOf( "stylesheet" ) != -1) &&
      link_tag[i].title) {
      link_tag[i].disabled = true ;
      if (link_tag[i].title == css_title) {
        link_tag[i].disabled = false ;
      }
    }
    set_cookie( style_cookie_name, css_title,
      style_cookie_duration, style_domain );
  }
}
function set_style_from_cookie()
{
  var css_title = get_cookie( style_cookie_name );
  if (css_title.length) {
    switch_style( css_title );
  }
}
function set_cookie ( cookie_name, cookie_value,
    lifespan_in_days, valid_domain )
{
    // http://www.thesitewizard.com/javascripts/cookies.shtml
    var domain_string = valid_domain ?
                       ("; domain=" + valid_domain) : '' ;
    document.cookie = cookie_name +
                       "=" + encodeURIComponent( cookie_value ) +
                       "; max-age=" + 60 * 60 *
                       24 * lifespan_in_days +
                       "; path=/" + domain_string ;
}
function get_cookie ( cookie_name )
{
    // http://www.thesitewizard.com/javascripts/cookies.shtml
    var cookie_string = document.cookie ;
    if (cookie_string.length != 0) {
        var cookie_value = cookie_string.match (
                        '(^|;)[\s]*' +
                        cookie_name +
                        '=([^;]*)' );
        return decodeURIComponent ( cookie_value[2] ) ;
    }
    return '' ;
}

</script>

