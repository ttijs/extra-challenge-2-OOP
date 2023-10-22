<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo 'aaaaaa';

//require 'vendor/autoload.php';
require_once __DIR__ . '/vendor/autoload.php';

// deze is makkerlijker dan die van LasseRafn hieronder
use YoHang88\LetterAvatar\LetterAvatar;
$naam = 'Thomas Tijs';
$yohang_avatar = new LetterAvatar($naam);
?>
<img src="<?php echo $yohang_avatar ?>" />


<?php


//$avatar = new LasseRafn\InitialAvatarGenerator\InitialAvatar();
// dit werkt" svg van maken
//echo $avatar->name('Lasse Rafn')->generateSvg()->toXMLString(); // returns SVG XML string
//exit();

// dit werkt, dan wordt dit bestand als afbeelding weergegeven, geresponsed
//$image = $avatar->name('Lasse Rafn')->generate();
//echo $image->response();

// dit werkt, opgeslagen op schijf
//$image = $avatar->name('Lasse Rafn')->generate();
//$image->save('bar.jpg');

// dit werkt, als extern aangeroepen img-src
// echo $avatar->name('Thomas Tijs')
//     ->length(2)
//     ->fontSize(0.5)
//     ->size(20) // 48 * 2
//     ->background('#EE00AA')
//     ->color('#fff')
//     ->generate()
//     ->stream('png', 100);
// exit();


// dit werkt
//$image = $avatar->name('Lasse Rafn')->generate();
//$type = 'png';
//
//$base64 = 'data:image/' . $type . ';base64,' . base64_encode($image->stream($type, 50));
// deze ook
//$base64 = 'data:image/' . $type . ';base64,' . base64_encode($image->encode($type, 50));
// en dit kun je dan in beeld brengen met
/*
<img src="<?php echo $base64; ?>" style="width: 20px;">
*/

?>
