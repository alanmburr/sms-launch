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

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <link rel="shortcut icon" href="cropped-LogoCircle-RGB-32x32.png">
        <link rel="preconnect" href="https://morning-plains-51732.herokuapp.com/bing_image.php">
        <link rel="stylesheet" href="bing.style.css">
        <link rel="preload" href="https://morning-plains-51732.herokuapp.com/bing_image.php" type="image/jpg" as="image">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body data-priority="2" class="d-flex justify-content-center">
        <div class="hpapp col-12 col-md-10 justify-content-center">
            <div class="hp_body ms-md-2 container-fluid justify-content-start">
                <div class="hpl">
                    <div class="img_cont" id="bg_img" style="background-image: url(https://morning-plains-51732.herokuapp.com/bing_image.php);">
                        <div class="shaders shade"></div>
                    </div>
                </div>
                <div class="hpl"></div>
                <div class="hpl hp_cont">
                    <header class="header" id="hdr">
                        <div class="head_cont">
                            <h1 class="logo_cont" aria-labelledby="bLogo" style="color: #808080; vertical-align: bottom;">
                                <img src="LogoHorizontal.png" alt="Salem Montessori" class="pt-1" id="bLogo" data-height-percentage="100" height="32px" style="height: 2.5rem;vertical-align: middle; display: inline;">
                            </h1>
                            <div class="scope_cont" >
                                <ul style="margin-top: .7vh; text-overflow: ''; white-space: nowrap; overflow-wrap: anywhere;">
                                    <li class="scope" style="color: rgba(255,255,255,.8); display: inline; margin-right: 36px;">
                                        <a href="http://google.smslaunch.ml" style="color: inherit; font-size: small;">Google</a>
                                    </li>
                                    <li class="scope try_exp" style="color: rgba(255,255,255,.8); display: inline; margin-right: 36px;">
                                        <a href="http://ddg.smslaunch.ml" style="color: inherit; font-size: small;">DuckDuckGo</a>
                                    </li>
                                    <li class="scope try_exp" style="color: rgba(255,255,255,.8); display: inline; margin-right: 36px;">
                                        <a href="https://foreverfree.ga/?utm_source=nav.bing.smslaunch.ml" style="color: inherit; font-size: small;">RoyalityFree Web Hosting</a>
                                    </li>
                                    <li class="scope try_exp" style="color: rgba(255,255,255,.8); display: hidden;"></li>
                                    <li class="scope dots" style="display: hidden;"></li>
                                </ul>
                            </div>
                        </div>
                    </header>
                    <div class="dimmer"></div>
                    <div class="sbox ">
                        <form data-h="ID=HpApp,21474.1" class="sb_form hassbi hasmic" id="sb_form" action="/search.php">
                            <input id="sb_form_q" class="sb_form_q" name="q" type="search" maxlength="1000" autocomplete="off" aria-label="Enter your search term" autofocus="" aria-controls="sw_as" aria-autocomplete="both" aria-owns="sw_as" spellcheck="false" data-ms-editor="false" required>
                            <input id="sb_form_go" type="submit" aria-label="Search" name="search" value="">
                            <label for="sb_form_go" class="search icon sb_logo" aria-label="Search the web" style="vertical-align: top; display: inline-block;">
                                <img src="favicon-2x.ico" style="display: block;position:sticky; z-index:100000;" id="search_logo">
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
            <style>
                #quote {
                    opacity: 0.5;
                    -webkit-transition: opacity 0.5s ease-in-out;
                    -moz-transition: opacity 0.5s ease-in-out;
                    -ms-transition: opacity 0.5s ease-in-out;
                    -o-transition: opacity 0.5s ease-in-out;
                    transition: opacity 0.5s ease-in-out;
                } #quote:hover, #quote:focus {opacity:1;}</style>
            <figure style="position:absolute; right: 10vw; bottom: 15vh; max-width: 324px;" id="quote">
                <div class="mt-5 ms-3 card bg-secondary">
                    <div class="card-header">
                        Quote for today, <?=date('F d, Y')?>
                    </div>
                    <div class="card-body">
                        <blockquote class="ps-3">
                            <?=file_get_contents('https://morning-plains-51732.herokuapp.com/bing_quote.php');?>
                        </blockquote>
                        <figcaption class="blockquote-footer ps-5 mb-1 text-white-50">
                            <?=file_get_contents('https://morning-plains-51732.herokuapp.com/bing_quote_author.php');?>
                        </figcaption>
                    </div> 
                </div> 
            </figure>
        </div>
    </body>
</html>
