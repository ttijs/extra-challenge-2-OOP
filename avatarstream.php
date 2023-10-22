<?php
header('Content-Type: image/png');

// deze kun je aanroepen vanuit een HTML-pagina, als src van een img.

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


require_once __DIR__ . '/vendor/autoload.php';
$avatar = new LasseRafn\InitialAvatarGenerator\InitialAvatar();

#dit werkt, als extern aangeroepen img-src
echo $avatar->name('Thomas Tijs')
    ->length(2)
    ->fontSize(0.5)
    ->size(50) // 48 * 2
    ->background('#EE00AA')
    ->color('#fff')
    ->generate()
    ->stream('png', 100);
exit();


// dit werkt" svg van maken
//echo $avatar->name('Lasse Rafn')->generateSvg()->toXMLString(); // returns SVG XML string
//exit();

// dit werkt, dan wordt dit bestand als afbeelding weergegeven, geresponsed
//$image = $avatar->name('Lasse Rafn')->generate();
//echo $image->response();

// dit werkt, opgeslagen op schijf
//$image = $avatar->name('Lasse Rafn')->generate();
//$image->save('bar.jpg');

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
