<?php if(isset($_GET['q']) && !empty($_GET['q'])) {header("HTTP/2 308 Permanent Redirect"); header("Location: /search.php?q=".$_GET['q']);} ?>
<!DOCTYPE HTML>
<html lang="en_US" dir="ltr">
    <head>
        <!-- HTML Meta Tags -->
        <title>Google | SMS Launch</title>
        <meta name="description" content="'Search the world's information, including webpages, images, videos and more.' -Google. Search Google with SMS Search Page with Google.">

        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="https://wackyblackie.github.io/sms-launch/google/">
        <meta property="og:type" content="website">
        <meta property="og:title" content="SMS Search Page with Google">
        <meta property="og:description" content="'Search the world's information, including webpages, images, videos and more.' -Google. Search Google with SMS Search Page with Google.">
        <meta property="og:image" content="https://raw.githubusercontent.com/wackyblackie/sms-launch/main/og.png">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="wackyblackie.github.io">
        <meta property="twitter:url" content="https://wackyblackie.github.io/sms-launch/google/">
        <meta name="twitter:title" content="SMS Search Page with Google">
        <meta name="twitter:description" content="'Search the world's information, including webpages, images, videos and more.- -Google. Search Google with SMS Search Page with Google.">
        <meta name="twitter:image" content="https://raw.githubusercontent.com/wackyblackie/sms-launch/main/og.png">

        <!-- Meta Tags Generated via https://www.opengraph.xyz -->
      
        <meta charset="utf-8">
        <link rel="shortcut icon" href="cropped-LogoCircle-RGB-32x32.png" sizes="32x32">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Google+Sans">
        <meta name="google-site-verification" content="OA2BfDOwfiV1HjTba_1N-_478m1I-Aw1z8RtcJRdtmI" />
        <link rel="canonical" href="https://wackyblackie.github.io/sms-launch/google/" />
        <link rel='shortlink' href='https://wackyblackie.github.io/sms-launch/google/' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv='content-language' content='en-us'>
        <link rel="stylesheet" href="google.style.css">
        <style>
            @media (prefers-color-scheme: dark) {
                body {
                    background: #202124;
                    color: #bdc1c6;
                }
                .RNNXgb, .circular {
                    background: #202124;
                    display: flex;
                    border: 1px solid #5f6368;
                    box-shadow: none;
                    border-radius: 24px;
                    z-index: 3;
                    height: 44px;
                    margin: 0 auto;
                    width: auto;
                    max-width: 584px;
                }
                .RNNXgb:hover, .circular:hover {
                    background-color: #303134;
                    box-shadow: 0 1px 6px 0 #171717;
                    border-color: rgba(223,225,229,0);
                }
                .search, .gbqfba {
                    background-color: #303134 !important;
                    border: 1px solid #303134 !important;
                    background-image: none;
                    border-radius: 4px;
                    color: #e8eaed;
                    font-family: arial,sans-serif;
                    font-size: 14px;
                    margin: 11px 4px;
                    padding: 0 16px;
                    line-height: 27px;
                    height: 36px;
                    min-width: 54px;
                    text-align: center;
                    cursor: pointer;
                    user-select: none;
                }
                a, input[type="reset"] {color:white;}
                input[type="search"], #q {
                    color: #e8eaed;
                }
            }
        </style>
    </head>
    <body>
        <div style="padding: 10px; max-height: 12pt; height: 12pt;bottom: 6px; float: initial;">
            <div style="text-align: left; float: left;">
                <a href="google_legal.md.html">Legal</a>
            </div>
            <div style="text-align:right; float: right;">
                <a href="https://bing.smslaunch.ml">Bing</a>&emsp;
                <a href="https://ddg.smslaunch.ml">DuckDuckGo</a>
            </div>
        </div>
        <center>
            <div style="margin-left: auto; margin-right: auto; top: -16px;" class="iblpc">
                <h1 style="display: none;">Salem Montessori</h1>
                <div style="height: auto; max-height: 50%; width: auto; max-width: 50%; margin-left: auto; margin-right: auto; max-width: 548px;">
                    <img src="LogoHorizontal.png" alt="Salem Montessori" id="logo" data-height-percentage="74" data-actual-width="1519" data-actual-height="391" height="92" style="padding-top: 109px; padding-bottom: 15px;">
                </div>
            </div>
        </center>
        <div style="width: 584px; margin-left: auto; margin-right: auto;">
            <center>
                <form action="search.php" method="GET">
                    <div class="circular">
                        <button type="submit" id="submit">
                            &emsp;<img alt="&#128269;" height="20" id="hplogo" src="googleg_standard_color_20dp.png" width="auto" style="vertical-align: middle; cursor:pointer;">&ensp;
                        </button>
                        <div style="width: 100%;" class="a4bIc">
                            <input maxlength="2048" name="q" id="q" type="text" aria-autocomplete="both" aria-haspopup="false" autocapitalize="off" autocomplete="off" autocorrect="off" autofocus role="combobox" spellcheck="true"title="Search" value="" aria-label="Search" aria-required="true" required oninvalid="this.setCustomValidity('Please enter a term to search.')" aria-errormessage="Please enter a term to search.">
                        </div>
                        <input type="reset" value="&#10006;&emsp;&ensp;" id="submit" style="padding-right: 2px;">
                    </div>
                    <button class="search" type="submit" style="display: inline;">
                        <div style="display: inline;">
                            <p style="display: inline;">&ThinSpace;Search&ThinSpace;</p>
                        </div>
                    </button>
                </form>
            </center>
        </div>
        <!-- Cloudflare Web Analytics --><script defer src='https://static.cloudflareinsights.com/beacon.min.js' data-cf-beacon='{"token": "e689c05b031840a282d857312dde6c40"}'></script><!-- End Cloudflare Web Analytics -->
    </body>
</html>
