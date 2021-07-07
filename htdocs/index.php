<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SMS Launch</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com"> 
        <style>
            .card {
              /* Add shadows to create the "card" effect */
              box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
              transition: 0.3s;
              border-radius: 5px;
              width: 100%;
              padding-bottom: 1vw;
            }
            
            /* On mouse-over, add a deeper shadow */
            .card:hover, .iconcard:hover {
              box-shadow: 0 8px 16px 8px rgba(0,0,0,0.2);
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
            .iconcard {
              /* Add shadows to create the "card" effect */
              box-shadow: 0px 4px 8px 4px rgba(0,0,0,0.2);
              transition: 0.3s;
              border-radius: 50%;
            }
            div.iconcard {
                top:-4px;
                margin-top:-4px;
                padding-top:-4px;
            }
        </style>
        <link href="fonts.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body dir="ltr" style="margin: 4px 4px 0;">
        <div class="container" style="margin-top: 30px; width: 100%;">
            <div class="row">
                <div class="col-sm-4"><a href="https://google.smslaunch.epizy.com" hreflang="en" style="text-decoration: none;">
                    <div class="card">
                        <img src="i/googlelogo_color_272x92dp.png" alt="Google" width="256" style="padding: 47.5px 0;">
                        <hr>
                        <div class="selfcontainer" style="font-family: 'Google Sans' !important;">
                            <h3 style="font-family: inherit; color: initial;"><b>Google</b></h3> 
                            <i style="font-family: inherit; color: initial;">Search the world's information, including webpages, images, videos and more.</i> 
                        </div>
                    </div></a>
                </div>
                <div class="col-sm-4"><a href="http://bing.smslaunch.epizy.com" hreflang="en_US" style="text-decoration: none; color: initial;">
                    <div class="card">
                        <img src="i/1024px-Microsoft_Bing_logo.svg.png" alt="Microsoft Bing" width="288" style="padding: 68px 0;">
                        <hr>
                        <div class="selfcontainer" style="font-family: SegoeUI !important;">
                            <h3 style="font-family: inherit;"><b>Microsoft Bing</b></h3> 
                            <i style="font-family: inherit;">Bing helps you turn information into action, making it faster and easier to go from searching to doing.</i> 
                        </div>
                    </div></a>
                </div>
                <div class="col-sm-4"><a href="http://ddg.smslaunch.epizy.com" hreflang="en" style="text-decoration: none;color: initial;">
                    <div class="card">
                        <img src="i/DuckDuckGo-Logo.png" alt="DuckDuckGo" width="400" style="padding: 21.5px 0;">
                        <hr>
                        <div class="selfcontainer" style="font-family: 'Proxima Nova' !important;">
                            <h3 style="font-family: inherit;"><b>DuckDuckGo</b></h3> 
                            <small><i style="font-family: inherit;">The Internet privacy company that empowers you to seamlessly take control of your personal information online, without any tradeoffs.</i></small>
                        </div>
                    </div></a>
                </div>
            </div>
        </div>
        <div style="position:absolute;left: 50%;transform: translateX(-50%);text-align: center;">
            <h2 style="top:0; position: absoulte;">Or Quick Search right here</h2>
            <form>
                <div style="border: 1px solid gray;border-radius: 11.3px; width: 584px;height: calc(calc(96px + 2.8em) / 3);">
                    <input type="search" name="q" style="border:none; width: 96%;background-color: transparent;position: relative;top:50%;transform: translateY(-50%); left:0;position: relative;" maxlength="2048">
                        <style>input[type=search]:focus {border:none;outline: none;}</style>
                    <style>button[type=submit] {background-color: transparent; border: none; display: inline-block;margin-top: 5vh;}</style>
                    <button type="submit" formaction="https://google.smslaunch.epizy.com/search.php">
                        <img src="i/com.google.ico" sizes="16" alt="G" style="vertical-align: middle;width: 32px;" class="iconcard">
                    </button>
                    <button type="submit" formaction="javascript:void(0);" formaction="http://bing.smslaunch.epizy.com/search.php" class="iconcard" style="width: 32px !important;height: 32px !important;opacity: 50%;" onclick="void(0);">
                        <img src="i/com.bing.ico" sizes="16" alt="B" style="vertical-align: middle;width: 24px;">
                    </button>
                    <button type="submit" formaction="javascript:void(0);" formaction="http://ddg.smslaunch.epizy.com/search.php" style="opacity: 50%;" onclick="void(0);">
                        <img src="i/com.duckduckgo.ico" sizes="16" alt="D" style="vertical-align: middle;width: 32px;" class="iconcard">
                    </button>
                </div>
            </form>
        </div>
    </body>
</html>