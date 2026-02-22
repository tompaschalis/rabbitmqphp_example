#!/usr/bin/php
<?php

/**
 * File for testing how errors work in php
 * @link https://www.php.net/manual/en/reserved.constants.php#constant.php-eol
 */

$randomText;
$randomText = "this is the best burrito that I've ever eaten";


echo "what is this var? PHP_EOL (string) The correct 'End Of Line' symbol for this platform." . PHP_EOL;
echo "PHP_VERSION constant: " . PHP_VERSION . PHP_EOL;
printf("Connect failed: %s\n", $randomText);
printf("seeing how this deals without a newline: %s", $randomText);
printf("hi" . PHP_EOL);
echo "hi2\n";
/* It seems like \n and PHP_EOL are the same */

?>