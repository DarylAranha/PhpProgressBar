<?php
require("progressBar.php");

$i = 0;
$final = 10000;

$progress = new progressBar($final, "hello world", 50);

while($i < $final) {
    $progress->displayProgress($i);
    $i++;
}
