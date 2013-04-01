#!/usr/local/bin/php
<?php

$result=exec('python counter.py');
exec('python increment.py');
exec('python time.py');
echo $result;
/*
$count=("counter.txt");
$hits=file($count);
echo $hits[0];
$hits[0] = $hits[0]+1;
$fp=fopen($count,"w");
fputs($fp,"$hits[0]");
fclose($fp);*/
?>
