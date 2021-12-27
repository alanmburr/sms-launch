<?php if(isset($_GET['q']) && !empty($_GET['q'])) {header("HTTP/2 308 Permanent Redirect"); header("Location: /search.php?q=".$_GET['q']);} ?>
<!DOCTYPE html>
<html lang="en_US">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8;charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1" />
		<meta name="HandheldFriendly" content="true"/>
		<link rel="stylesheet" href="s1947.css" type="text/css">
		<link rel="stylesheet" href="o1947.css" type="text/css">
		<link rel="preload" href="ProximaNova-Reg-webfont.woff2" as="font" type="font/woff2" crossorigin="anonymous"/>
		<link rel="preload" href="ProximaNova-Sbold-webfont.woff2" as="font" type="font/woff2" crossorigin="anonymous"/>
		<link rel="preload" href="ProximaNova-ExtraBold-webfont.woff2" as="font" type="font/woff2" crossorigin="anonymous"/>
		<link rel="shortcut icon" href="cropped-LogoCircle-RGB-32x32.png" type="image/x-icon"/>
		
        	<!-- HTML Meta Tags -->
			<title>DuckDuckGo | SMS Launch</title>
        	<meta name="description" content="'Seamlessly take control of your personal information online' -DuckDuckGo. Search DDG with SMS Search Page with DDG.">

        	<!-- Facebook Meta Tags -->
        	<meta property="og:url" content="https://ddg.smslaunch.ml/">
        	<meta property="og:type" content="website">
        	<meta property="og:title" content="SMS Search Page with DuckDuckGo">
        	<meta property="og:description" content="'Seamlessly take control of your personal information online' -DuckDuckGo. Search DDG with SMS Search Page with DDG.">
        	<meta property="og:image" content="https://raw.githubusercontent.com/wackyblackie/sms-launch/main/og.png">

        	<!-- Twitter Meta Tags -->
        	<meta name="twitter:card" content="summary_large_image">
        	<meta property="twitter:domain" content="wackyblackie.github.io">
        	<meta property="twitter:url" content="https://ddg.smslaunch.ml/">
        	<meta name="twitter:title" content="SMS Search Page with DuckDuckGo">
        	<meta name="twitter:description" content="'Seamlessly take control of your personal information online' -DuckDuckGo. Search DDG with SMS Search Page with DDG.">
        	<meta name="twitter:image" content="https://raw.githubusercontent.com/wackyblackie/sms-launch/main/og.png">

        	<!-- Meta Tags Generated via https://www.opengraph.xyz -->
      

        	<link rel="canonical" href="https://ddg.smslaunch.ml/" />
        	<link rel='shortlink' href='https://ddg.smslaunch.ml/' />
      
		<link rel="stylesheet" href="ddg.style.css">
	</head>
	<body>
		<div class="header-wrap--home  js-header-wrap">
			<div class="header--aside js-header-aside" style="padding-left: 4px !important;">
				<a class="js-side-menu-open" href="https://google.smslaunch.ml">Google</a>&nbsp;&nbsp;&VerticalSeparator;&nbsp;
				<a class="js-side-menu-open" href="https://bing.smslaunch.ml">Bing</a>&nbsp;&nbsp;&VerticalSeparator;&nbsp;
				<a class="js-side-menu-open" href="https://foreverfree.ga/?utm_source=nav.ddg.smslaunch.ml">RoyalityFree Web Hosting</a>&nbsp;&nbsp;
			</div>
		</div>
		<div class="center form_length">
			<div style="margin-left: auto; margin-right: auto;">
				<img src="LogoHorizontal.png" alt="Salem Montessori" id="logo" sizes="64" style="padding-bottom: 5%;">
			</div>
			<br>
			<form class="search  search--home" name="x" method="GET" action="search.php">
				<input id="search_form_input_homepage" class="search__input  js-search-input" type="text" autocomplete="off" name="q" tabindex="1" value="" required>
				<input id="search_button_homepage" class="search__button  js-search-button" type="submit" tabindex="2" value="">
			</form>	
		</div>	
	</body>
</html>
