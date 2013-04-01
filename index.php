#!/usr/local/bin/php
<?php

$result=exec('python counter.py');
exec('python increment.py');
exec('python time.py');
echo $result;
?>
