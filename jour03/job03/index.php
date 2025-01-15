<?php

$str = "I'm sorry Dave I'm afraid I can't do that";
echo preg_replace ('/[^aeiouyAEIOUY]/', '', $str);

?>