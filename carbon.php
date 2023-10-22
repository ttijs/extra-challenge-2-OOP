<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//echo 'aaaaaa';

//require 'vendor/autoload.php';
require_once __DIR__ . '/vendor/autoload.php';

use Carbon\Carbon;
printf("Now: %s", Carbon::now());


echo '<hr>';

#$post_date = Carbon::createFromDate(2023, 10, 20);
$post_date = Carbon::createFromDate('2023-10-22 13:34:00');
echo 'post_date = ' .  $post_date;

echo '<br>';

$how_long_ago = $post_date->diffForHumans();
echo 'how long ago = ' .  $how_long_ago;

