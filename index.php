
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4paskaita</title>
</head>
<body>
    <form method="get" action="index.php">
        <input name="skaitiklis1">
        <input name="vardiklis1">
        <input name="skaitiklis2">
        <input name="vardiklis2">
        <button type="submit">Sudeti</button>
    </form>


    <p>Rezultatas:</p>
</body>
</html>

<?php 
//$_GET
//$_POST

//$_SERVER - inforamcinis superglobalus kintamasis, kuris pasiekiamas visame projekte
//mes į server kintamąjį pasidėti reikšmių NEGALIME.

var_dump($_SERVER);


// kokia narsykle sudare saugu rysi?
 echo $_SERVER['HTTP_SEC_CH_UA'];
echo "<br>";
// kokia narsykle as naudojos
 echo $_SERVER['HTTP_USER_AGENT']; //none - ""

 //prisijungimo laikas
echo $_SERVER['REQUEST_TIME'];
echo "<br>";
echo date("Y-m-d H:i:s", $_SERVER['REQUEST_TIME'] ); // reikia sureguliuoti laiko zona, utc - 0 utc - 8

echo "<br>";
//dabartine failo nuoroda(reliatyvus kelias)
echo $_SERVER['PHP_SELF'];
echo "<br>";

//absoliutus kelias
echo $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];


//get_browser(); //narsykle


//php versijos 7.4.0
//5.4 - neveiks
$narsykle = get_browser();
var_dump($narsykle);

//GitHub x
// Server kintamasis
// 2 namu darba