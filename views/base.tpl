<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=0.8, maximum-scale=0.8">
		<meta name="description" content="For those times when you feel like scuttling out of the room.">
		<meta name="author" content="Nehal Patel">
		<link rel="canonical" href="{{ @domain }}">
		<title>Instant Zoidberg Whoop</title>
		
		<!-- Facebook -->
		<meta property="fb:app_id" content="1374913459424162">
		<meta property="og:title" content="Instant Zoidberg Whoop">
		<meta property="og:description" content="For those times when you feel like scuttling out of the room.">
		<meta property="og:image" content="{{ @domain }}img/zoidberg.png">
		<meta property="og:url" content="{{ @domain }}">
		<meta property="og:type" content="website">
		
		<!-- Google+ -->
		<link href="https://plus.google.com/100457748880774253696" rel="publisher">
		
		<!-- Icons -->
		<link rel="apple-touch-icon" sizes="57x57" href="{{ @domain }}apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="114x114" href="{{ @domain }}apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="{{ @domain }}apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="60x60" href="{{ @domain }}apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="120x120" href="{{ @domain }}apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="{{ @domain }}apple-touch-icon-76x76.png">
		<link rel="icon" type="image/png" sizes="96x96" href="{{ @domain }}favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="32x32" href="{{ @domain }}favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="{{ @domain }}favicon-16x16.png">
		<meta name="msapplication-TileColor" content="#ffffff">
		
		<!-- CSS -->
		<link href="{{ @domain }}css/main.css?ver={{ @css_modified_time }}" rel="stylesheet" type="text/css">
	</head>
	<body>
		<h1 id="zoidberg-header">Instant Zoidberg Whoop</h1>
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
			<a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ @domain }}" data-text="Whoop" data-hashtags="Zoidberg" data-count="vertical">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		</div>
		<div class="center-button">
			<div id="arcade-container">
				<button id="arcade-button" onclick="playWhoop()"></button>
			</div>
		</div>

		<!-- Scripts -->
		<script type="application/javascript" src="<?php echo $domain; ?>js/main.js?ver = {{ @js_modified_time }}"></script>
	</body>
</html>