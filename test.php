<?php
$myfile = fopen("solr_conf", "r") or die("Unable to open file!");
// echo fread($myfile,filesize("solr_conf"));
$port = explode('=', fgets($myfile))[1];
echo ($port);
fclose($myfile);
?>
