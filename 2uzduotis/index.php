<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4paskaita</title>
</head>
<?php 

// 2. Sukurkite skaičiuotuvą, sudedantį dvi trupmenas. Rezultatas atvaizduojamas su sveikąja ir trupmenine dalimi į div.
// Kiekvienas laukelis turi turėti patikrinimą, ar jame yra įvestas skaičius.
?>


<?php 
// ar mygtukas paspaustas
    if(isset($_GET["sudeti"])) {


//is_integer() - tikrina ar sveikas skaicius
//intval - pavercia i sveika skaiciu.
//grazinamas skaicius
//jei ne skaicius false reiksme
//

    // 1 trupmena
        $skaitiklis1 = intval($_GET['skaitiklis1']);
        $vardiklis1 = intval($_GET['vardiklis1']);

        // 2 trupmena
        $skaitiklis2 = intval($_GET['skaitiklis2']);
        $vardiklis2 = intval($_GET['vardiklis2']);


        var_dump($skaitiklis1);
        var_dump($vardiklis1);
        var_dump($skaitiklis2);
        var_dump($vardiklis2);
        
        if($skaitiklis1 == false || $vardiklis1 == false || $skaitiklis2 == false || $vardiklis2 ==false ) 
        {
            $rezultats = "Kazkuris is kintamju nera sveikasis skaicius";
        } else {

        
        // 1/2 + 3/4 

        //bendravadrdiklinimo veiksmas

            $bendrasVardiklis = $vardiklis1 * $vardiklis2; //2 * 4 = 8
            $skaitiklis1 = $skaitiklis1 * $vardiklis2; // 1 * 4 = 4
            $skaitiklis2 = $skaitiklis2 * $vardiklis1; // 3 * 2 = 
            
            $vardiklis1 = $bendrasVardiklis;
            $vardiklis2 = $bendrasVardiklis;

            // 4/8 + 6/8

            // echo $skaitiklis1." ".$vardiklis1;
            // echo "<br>";
            // echo $skaitiklis2." ".$vardiklis2;

            //sudetis
            $sumSkaitiklis = $skaitiklis1 + $skaitiklis2;
            $sumVardiklis = $bendrasVardiklis;
            //  echo "<br>";
            //  echo $sumSkaitiklis." ".$sumVardiklis;
            
            //iskirti sveikaja dali
            $sveikojiDalis = intval($sumSkaitiklis/$sumVardiklis); // 10/ 8 = 1
            $sumSkaitiklis = $sumSkaitiklis % $sumVardiklis; // 10 % 8 = 2
            
            $rezultats = $sveikojiDalis." ".$sumSkaitiklis."/".$sumVardiklis;
        }
    }


?>
<body>
    <form method="get" action="index.php">
        <input type="number" name="skaitiklis1">
        <input type="number" name="vardiklis1">
        <input type="number" name="skaitiklis2">
        <input type="number" name="vardiklis2">
        <button type="submit" name="sudeti">Sudeti</button>
    </form>

    <?php 
    
    if(isset($_GET["sudeti"])) {
       echo  "<div>Rezultatas:$rezultats</div>";
    }
    ?>
</body>
</html>