<?php if(isset($_GET['q']) && !empty($_GET['q'])) {header("HTTP/2 308 Permanent Redirect"); header("Location: /search.php?q=".$_GET['q']);} ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <!-- HTML Meta Tags -->
        <title>Bing | SMS Launch</title>
        <meta name="description" content="'Bing helps you turn information into action, making it faster and easier to go from searching to doing.' -Bing. Search Bing with SMS Search Page with Bing.">

        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="https://bing.smslaunch.ml/">
        <meta property="og:type" content="website">
        <meta property="og:title" content="SMS Search Page with Bing">
        <meta property="og:description" content="'Bing helps you turn information into action, making it faster and easier to go from searching to doing.' -Bing. Search Bing with SMS Search Page with Bing.">
        <meta property="og:image" content="https://raw.githubusercontent.com/wackyblackie/sms-launch/main/og.png">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="wackyblackie.github.io">
        <meta property="twitter:url" content="https://bing.smslaunch.ml/">
        <meta name="twitter:title" content="SMS Search Page with Bing">
        <meta name="twitter:description" content="'Bing helps you turn information into action, making it faster and easier to go from searching to doing.' -Bing. Search Bing with SMS Search Page with Bing.">
        <meta name="twitter:image" content="https://raw.githubusercontent.com/wackyblackie/sms-launch/main/og.png">

        <!-- Meta Tags Generated via https://www.opengraph.xyz -->

        <link rel="canonical" href="https://bing.smslaunch.ml/" />
        <link rel='shortlink' href='https://bing.smslaunch.ml/' />
      
        <link rel="shortcut icon" href="cropped-LogoCircle-RGB-32x32.png">
        <link rel="stylesheet" href="bing.style.css">
        <link rel="preload" href="MariaM_blog-1024x576.png" type="image/jpg">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body data-priority="2">
        <div class="hpapp">
            <div class="hp_body  ">
                <div class="hpl">
                    <div class="img_cont" id="bg_img">
                        <div class="shaders shade"></div>
                    </div>
                </div>
                <div class="hpl"></div>
                <div class="hpl hp_cont">
                    <header class="header" id="hdr">
                        <div class="head_cont">
                            <h1 class="logo_cont" aria-labelledby="bLogo" style="color: #808080; vertical-align: bottom;">
                                <img src="LogoHorizontal.png" alt="Salem Montessori" id="bLogo" data-height-percentage="100" height="32" style="padding-top: .4vh; vertical-align: middle; display: inline;">
                            </h1>
                            <div class="scope_cont">
                                <ul style="margin-top: .7vh;">
                                    <li class="scope" style="color: rgba(255,255,255,.8); display: inline; margin-right: 36px;">
                                        <a href="http://google.smslaunch.ml" style="color: inherit; font-size: small;">Google</a>
                                    </li>
                                    <li class="scope try_exp" style="color: rgba(255,255,255,.8); display: inline; margin-right: 36px;">
                                        <a href="http://ddg.smslaunch.ml" style="color: inherit; font-size: small;">DuckDuckGo</a>
                                    </li>
                                    <li class="scope try_exp" style="color: rgba(255,255,255,.8); display: inline; margin-right: 36px;">
                                        <a href="https://foreverfree.ga" style="color: inherit; font-size: small;">RoyalityFree.com</a>
                                    </li>
                                    <li class="scope try_exp" style="color: rgba(255,255,255,.8); display: hidden;"></li>
                                    <li class="scope dots" style="display: hidden;"></li>
                                </ul>
                            </div>
                        </div>
                        <div style="right: 0; position: absolute; text-align: center; top: .7vh; color: rgba(255,255,255,.8); background-color: transparent; visibility: hidden;">
                            <div>
                                <a id="id_sc--bgdsbl" class="idp_ham hphbtop" aria-label="Disable the Background Image" aria-expanded="false" aria-controls="id_hbfo" aria-hidden="true" aria-haspopup="false" role="button" tabindex="0" href="javascript:void(0)" h="ID=SERP,5025.1" style="color: inherit; background-color: rgba(200,200,200,.3); margin: 2px; border: 1px solid rgba(200,200,200,.3); border-radius: 24px; cursor:default;">
                                    <script>
                                        function setVar(variable, data) {
                                            var variable = data;
                                            return variable;
                                        }
                                        const xhr = new XMLHttpRequest();
                                        xhr.open('GET', 'https://bpotd.herokuapp.com/api', true);
                                        xhr.onload = function() {
                                            const data = JSON.parse(this.response);
                                            var myHref = data.href;
                                            myHref = myHref.replace(/&quot;/g, '"');
                                            document.querySelector(".img_cont#bg_img").style.backgroundImage = "url("+data.image.url+")";
                                        }
                                        xhr.send();
                                    </script>
                                    <label for="bg_disable" style="color: inherit;cursor: default;">
                                        &nbsp;<input style="cursor: default;" type="checkbox" name="bg_disable" onchange="if (this.checked == true) {document.getElementById('bg_img').style.backgroundImage = 'none';console.warn('Warning: The Background Image will soon be removed. The corresponding toggle will be reomved as well.');} else {document.getElementById('bg_img').style.backgroundImage = 'url('+bgimgurl+')';console.warn('Warning: The Background Image will soon be removed. The corresponding toggle will be reomved as well.');}" class="disableBgImage" id="bg_disable">
                                        <small style="color: inherit;">No Image</small>
                                    </label>&nbsp;
                                </a>
                            </div>
                        </div>
                    </header>
                    <div class="dimmer"></div>
                    <div class="sbox ">
                        <form data-h="ID=HpApp,21474.1" class="sb_form hassbi hasmic" id="sb_form" action="/search.php">
                            <input id="sb_form_q" class="sb_form_q" name="q" type="search" maxlength="1000" autocomplete="off" aria-label="Enter your search term" autofocus="" aria-controls="sw_as" aria-autocomplete="both" aria-owns="sw_as" spellcheck="false" data-ms-editor="false" required>
                            <input id="sb_form_go" type="submit" aria-label="Search" name="search" value="">
                            <label for="sb_form_go" class="search icon tooltip sb_logo" aria-label="Search the web" style="vertical-align: top; display: inline-block;">
                                <img src="favicon-2x.ico" style="display: block;" id="search_logo">
                            </label>
                            <div id="sw_as" style="display: block; margin-left: 0px; margin-right: -10px;" aria-expanded="false">
                                <div class="sa_as" data-priority="2" style="display: none;"></div>
                                <div class="sa_as" data-priority="2" style="display: none;"></div>
                            </div>
                            <div class="below_sbox"></div>
                            <a data-h="ID=HpApp,19180.1" id="sb_hidden"></a>
                            <input type="hidden" value="QBLH" name="form">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
