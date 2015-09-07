<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=0.5, maximum-scale=0.5">
		<meta name="description" content="For those times when you feel like scuttling out of the room.">
		<meta name="keywords" content="instant whoop, whoop, csi, rimshot, zoidberg, futurama, zoidberg whoop, zoidberg whooping, whoop whoop whoop, whoop whoop, three stooges, moe, zoidberg noise, zoidberg sound">
		<meta name="author" content="Nehal Patel">
		<link rel="canonical" href="http://www.instantwhoop.com/">
		<title>Instant Zoidberg Whoop</title>
		
		<!-- facebook -->
		<meta property="fb:app_id" content="1374913459424162">
		<meta property="og:title" content="Instant Zoidberg Whoop">
		<meta property="og:description" content="For those times when you feel like scuttling out of the room.">
		<meta property="og:image" content="http://www.instantwhoop.com/img/zoidberg.png">
		<meta property="og:url" content="http://www.instantwhoop.com/">
		<meta property="og:type" content="website">
		
		<!-- Google+ -->
		<link href="https://plus.google.com/100457748880774253696" rel="publisher">
		
		<!-- Icons -->
		<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
		<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
		<meta name="msapplication-TileColor" content="#ffffff">
		
		<!-- Scripts -->
		<script type="text/javascript" src="http://www.instantwhoop.com/js/soundmanager2-nodebug-jsmin.js"></script>
		<script type="text/javascript">
			soundManager.url = 'http://www.instantwhoop.com/swf/';
			soundManager.onready(function(){
				var mySound = soundManager.createSound({
					autoLoad: true,
					id:"whoop",
					url:"http://www.instantwhoop.com/audio/whoop-mono.mp3"
				});
			});
		</script>
		
		<!-- CSS -->
		<link href="http://www.instantwhoop.com/css/main.css" rel="stylesheet" type="text/css">
		<link href="http://www.instantwhoop.com/css/arcade.css" rel="stylesheet" type="text/css">
		<!--[if lt IE 9]>
			<style type="text/css">
				#arcade-button {
					behavior: url(/pie/PIE.htc);
				}
				
				#arcade-container {
					behavior: url(/pie/PIE.htc);
				}
			</style>
		<![endif]-->
	</head>
	<body>
		<h1 id="zoidberg-header">Instant Zoidberg Whoop</h1>
		<!--<span>Download Ringtone<br>(<a href="http://instantwhoop.com/audio/download.php?format=m4r" onmousedown="_gaq.push(['_trackEvent', 'Whoop', 'Download', 'iPhone']);">iPhone</a> - <a href="http://instantwhoop.com/audio/download.php?format=mp3" onmousedown="_gaq.push(['_trackEvent', 'Whoop', 'Download', 'Android']);">Android</a>)</span>-->
		<div class="social-buttons">
			<!-- Like -->
			<div id="fb-root"></div>
			<script>
				(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=1374913459424162";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			</script>
			<div class="fb-like" data-href="https://www.facebook.com/513259148759550" data-colorscheme="light" data-layout="box_count" data-action="like" data-show-faces="true" data-send="false"></div>
			
			<!-- Tweet -->
			<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.instantwhoop.com" data-text="Whoop" data-hashtags="Zoidberg" data-count="vertical">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			
			<!-- Plus -->
			<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
			<div class="g-plusone" data-size="tall" data-href="http://www.instantwhoop.com"></div>
		</div>
		<div class="center-button">
			<div id="arcade-container">
			<button id="arcade-button" onclick="soundManager.play('whoop',{onfinish: function() { _gaq.push(['_trackEvent', 'Whoop', 'Play']); }});"></button>
			</div>
			<!-- http://codepen.io/jiserra/details/nEfjp -->
		</div>
		<!-- http://css-tricks.com/centering-in-the-unknown/ --> 
	</body>
</html>