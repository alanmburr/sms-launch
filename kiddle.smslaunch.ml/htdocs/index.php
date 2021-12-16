<!DOCTYPE html>
<html class="html_home" lang="en_US">
	<head>
		<meta charset="utf-8">
		<title>Kiddle | SMS Launch</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="viewport" content="initial-scale=1, width=device-width">
		<meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
		<meta name="keywords" content="search,kids,safe,search engine">
		<meta name="description" content="Kiddle is a safe search engine, offering a safe web, image, and video search. Results are vetted by editors.">
		<link rel="search" type="application/opensearchdescription+xml" title="Kiddle" href="https://www.kiddle.co/opensearchdescription.xml">
		<link rel="icon" href="https://www.kiddle.co/favicon.ico">
		<link rel="apple-touch-icon" sizes="180x180" href="https://www.kiddle.co/apple-touch-icon.png">
		<link rel="icon" type="image/png" href="https://www.kiddle.co/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="https://www.kiddle.co/favicon-16x16.png" sizes="16x16">
  		<link href="style.css" rel="stylesheet">
	</head>

	<body class="home">
		<div class="wrapper">
  			<div class="logo">
				<img src="https://www.smslaunch.ml/i/LogoHorizontal.png" style="height:75px; width:auto;" alt="Kids search engine" border="0">
  			</div>
  			<div class="search_form">
				<form action="search.php" id="cse-search-box" name="SearchForm">
					<div id="search_container" class="">  
						<div class="search_field_clear">
							<input type="search" name="q" style="width: 98%;" id="q" maxlength="2048" autocapitalize="none" autocomplete="off" autocorrect="off" autofocus required>
						</div>
						<button type="submit"><img src="https://kiddle.co/favicon.ico"></button>
					</div>
				</form>
				<script type="text/javascript">
					var clearbut = document.getElementById('search_form_input_clear_one');
					var searchfield = document.getElementById('q');
					var submitbtn = document.getElementById('s_btn');
					var srcx = document.getElementById('search_container');
					
					if (searchfield.value != '') { clearbut.className = 'search_form_input_clear_opened'; srcx.className = 'active'; }
					else if (searchfield.value === '') { clearbut.className = 'search_form_input_clear_closed'; srcx.className = ''; }
				</script>
  			</div>
		</div>
		<style>
			@media (prefers-color-scheme: dark) {
				body {
					height: 100%;
					margin: 0;
					padding: 0;
					overflow-y: auto; 
					background-color: hsl(229, 76%, 10%);
				}
			}
		</style>
	</body>
</html>