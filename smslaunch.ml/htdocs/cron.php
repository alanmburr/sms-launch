<?php
$diskfree = round(disk_free_space(".") / 1000000000);
$disktotal = round(disk_total_space(".") / 1000000000);
$diskused = round($disktotal - $diskfree);
$diskusage = round($diskused/$disktotal*100);
echo $diskusage;
?>