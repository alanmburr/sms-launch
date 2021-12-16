<?php
if ($_GET['q'] != "") {
    header("HTTP/2 308 Permanent Redirect");
    header("Location: https://www.bing.com/search?q=".$_GET['q']);
} elseif ($_GET['q'] == "") {
    header("HTTP/2 307 Temporary Redirect");
    header("Location: /#scope=web");
}
?>