<?php
if ($_GET['q'] != "") {
    header("HTTP/2 308 Permanent Redirect");
    header("Location: https://duckduckgo.com/?q=".$_GET['q']."#ia=web");
} elseif ($_GET['q'] == "") {
    header("HTTP/2 307 Temporary Redirect");
    header("Location: /#ia=web");
}
?>