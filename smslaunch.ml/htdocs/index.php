<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SMS Launch</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Use the SMS Launch Search Homepage to quickly search the Internet with your favorite Search Engines.">
        
        <meta property="og:url" content="https://www.smslaunch.ml/">
        <meta property="og:type" content="website">
        <meta property="og:title" content="SMS Search Page">
        <meta property="og:description" content="Use the SMS Launch Search Homepage to quickly search the Internet with your favorite Search Engines.">
        <meta property="og:image" content="https://raw.githubusercontent.com/wackyblackie/sms-launch/main/og.png">
        
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="www.smslaunch.ml">
        <meta property="twitter:url" content="https://www.smslaunch.ml/">
        <meta name="twitter:title" content="SMS Search Page">
        <meta name="twitter:description" content="Use the SMS Launch Search Homepage to quickly search the Internet with your favorite Search Engines.">
        <meta name="twitter:image" content="https://raw.githubusercontent.com/wackyblackie/sms-launch/main/og.png">
        
        <link rel="canonical" href="https://www.smslaunch.ml/" />
        <link rel='shortlink' href='https://www.smslaunch.ml/' />
        <link rel="shortcut icon" href="i/cropped-LogoCircle-RGB-32x32.png">
        <link rel="preload" href="MariaM_blog-1024x576.png" type="image/jpg">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="fonts.css" rel="stylesheet">
        <link href="sprites.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
        <style>
            a {color: black !important;}
            .card {
              /* Add shadows to create the "card" effect */
              box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
              transition: 0.3s;
              border-radius: 5px;
              width: 100%;
              padding-bottom: 1vw;
            }
            /*.iconcard {
                box-shadow: 0px 4px 8px 4px rgba(0,0,0,0.2);
                transition: 0.3s;
                border-radius: 50%;
            }*/
            /* On mouse-over, add a deeper shadow */
            .card:hover/*, .iconcard:hover*/ {
              box-shadow: 0 2px 4px 4px rgba(0,0,0,0.2);
            }
            
            /* Add some padding inside the card container */
            .selfcontainer {
              padding: 2px 16px;
              display: block;
              margin-left: auto;
              margin-right: auto;
              text-align: center;
            }
            /* Add rounded corners to the top left and the top right corner of the image */
            .card img {
              padding: 1vw 0;
              border-radius: 5px 5px 0 0;
              display: block;
              margin-left: auto;
              margin-right: auto;
            }
            .card hr {
                color: black;
                height: 1px;
                margin: 0;
                padding: 0;
                border-top: 1px solid black;
                border-bottom: none; border-left: none; border-right: none;
                color: rgba(0,0,0,0.2);
            }
            .sub {
                border: 1px solid rgba(0,0,0,0.2);
                border-radius: 51%;
            }
            div.iconcard {
                top:-4px;
                margin-top:-4px;
                padding-top:-4px;
            }
            .g {font-family: 'Google Sans', Tahoma, Geneva, sans-serif !important;color: black;}
            .b {font-family: 'Segoe UI', Tahoma, Geneva, sans-serif !important; color: black;}
            .d {font-family: 'Proxima Nova', Tahoma, Geneva, sans-serif !important; color: black;}
            report-icon { position: fixed; bottom: 16px; left: 16px; height: 20px; width: 20px; opacity: .50;}
        </style>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    </head>
    <body dir="ltr" style="margin: 4px 4px 0;">
        <div class="container" style="margin-top: 30px; width: 100%;">
            <div class="row">
                <div class="col-sm-4"><a href="https://google.smslaunch.ml" hreflang="en" style="text-decoration: none;">
                    <div class="card btn btn-outline-light">
                        <img src="i/LogoHorizontal.png" alt="Google" width="306" style="padding: 24px 0;">
                        <hr>
                        <div class="selfcontainer g">
                            <h3 class="g"><strong class="g">Google</strong></h3> 
                            <em class="g">Search the world's information, including webpages, images, videos and more.</em> 
                        </div>
                    </div></a>
                </div>
                <div class="col-sm-4"><a href="https://bing.smslaunch.ml" hreflang="en_US" style="text-decoration: none; color: initial;">
                    <div class="card btn btn-outline-light">
                        <img src="i/LogoHorizontal.png" alt="Microsoft Bing" width="306" style="padding: 24px 0;">
                        <hr>
                        <div class="selfcontainer b">
                            <h3 class="b"><strong class="b">Microsoft Bing</strong></h3> 
                            <em class="b">Bing helps you turn information into action, making it faster and easier to go from searching to doing.</em> 
                        </div>
                    </div></a>
                </div>
                <div class="col-sm-4"><a href="https://ddg.smslaunch.ml" hreflang="en" style="text-decoration: none;color: initial;">
                    <div class="card btn btn-outline-light">
                        <img src="i/LogoHorizontal.png" alt="DuckDuckGo" width="306" style="padding: 24px 0;">
                        <hr>
                        <div class="selfcontainer d">
                            <h3 class="d"><strong class="d">DuckDuckGo</strong></h3> 
                            <em class="d">Seamlessly take control of your personal information online, without any tradeoffs.</em>
                        </div>
                    </div></a>
                </div>
            </div>
        </div>
        <center style="margin-top: 5vh;">
            <h2>Or Quick Search right here</h2>
            <form>
                <input type="search" name="q" id="q" style="position: relative; display: block; width: 36%;" maxlength="2048" class="form-control" minlength="2">
                <div style="margin-top: 0px;padding-top: 0px;font-size: 12pt;position: relative; top:-12pt">
                    <style>button[type=submit] {border-radius: 6px; display: inline-block; margin-top: 5vh;}</style>
                    <button type="submit" formaction="https://google.smslaunch.ml/search.php" class="btn btn-outline-secondary">
                        <img src="i/com.google.ico" sizes="16" alt="G">
                    </button>
                    <button type="submit" formaction="https://bing.smslaunch.ml/search.php" class="btn btn-outline-secondary">
                        <img src="i/com.bing.ico" sizes="16" alt="b">
                    </button>
                    <button type="submit" formaction="https://ddg.smslaunch.ml/search.php" class="btn btn-outline-secondary">
                        <img src="i/com.duckduckgo.ico" sizes="16" alt="&#129414;">
                    </button>
                    </button>
                    <button type="submit" formaction="https://forum.royalityfree.com/search" class="btn btn-outline-secondary">
                        <img src="i/com.royalityfree.forum.ico" sizes="16" alt="&#128081;" height="32">
                    </button>
                </div>
            </form>
        </center>
        <a href="https://foreverfree.ga/?utm_source=pop-outer.smslaunch.ml" style="height: 200px; width: 100%; position: sicky; bottom: 0; left:0; ">
            <div class="position-absolute bottom-0 end-0 border-dark text-center w-100" style="overflow-x: hidden;">
                <div style="height: 200px; width: 200px; overflow: hidden; text-overflow: ellipsis; transition: all 3.33s ease-in-out; animation: ani 10s infinite;" class="position-relative border border-dark ps-1 pe-1 pt-0 pb-1" id="newdiv">
                    <a href="http://foreverfree.ga/?utm_source=pop-inner.smslaunch.ml" style="text-decoration: none;">
                        <h3>RoyalityFree Web Hosting!</h3>
                        <div style="overflow: hidden; text-overflow: ellipsis;">
                            Free Hosting with Unlimited Disk Space, Unlimited Bandwidth, and Unlimited Websites from RoyalityFree. With PHP and MySQL and no forced ads on your site.
                        </div>
                        &hellip;
                    </a>
                </div>
                <style>
                    @keyframes ani {
                        0% {
                            left: 0%;
                        }
                        50% {
                            left: 50%;
                        }
                        100% {
                            left: 100%;
                        }
                    }
                    div#newdiv:hover {
                        animation: none;
                        transition: none;
                    }
                </style>
            </div>
        </a>
    </body>
</html>