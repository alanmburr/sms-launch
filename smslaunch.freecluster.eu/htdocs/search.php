<?php
$q = $_GET['q'];
$forbidden = "<html><title>403 Forbidden</title><body style=\"background-color: red; color: white;\"><h1>403 Forbidden</h1><p>This resource is forbidden by this engine.</p><pre>"."</pre></body></html>";
if (!stripos($q, 'porn') || !stripos($q, 'adult') || !stripos($q, 'xxx') || !stripos($q, 'sex')) {
    echo $forbidden;
} else {
    if (isset($_GET['e'])) {
        switch ($_GET['e']) {
            case google:
                echo "<script>window.location.replace('https://www.google.com/search?q=".$q."');</script>";
                break;
            case bing:
                echo "<script>window.location.replace('https://www.bing.com/search?q=".$q."');</script>";
                break;
            case ddg:
                echo "<script>window.location.replace('https://duckduckgo.com/?q=".$q."');</script>";
                break;
            default:
                echo "<h1>No Search Engine specified.</h1><p>Parameter <code>e</code> is missing or malformed.</p><hr><h1>400 Bad request</h1></html>";
                http_response_code(400);
            break;
        }
    } else { 
        echo "<h1>No Search Engine specified.</h1><p>Parameter <code>e</code> is missing or malformed. You shouln't try this request again.</p><hr><h1>400 Bad request</h1></html>";
        http_response_code(400);
    }
}
?>