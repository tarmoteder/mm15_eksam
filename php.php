

<?php
// ühe rea kommenteerimin
/* 
Mitme rea komment
*/
# Trellid on kah üherealine kommentar

$ndl = array("Esmaspäev","Teisipäev","Kolmapäev","Neljapäev","Reede");
// Erinevad muutujad ja nende käitlemine
$nimi = "Tarmo";
$täna = "kolmapäev";
$homme = &$täna;
$päev = $_POST["päev"];
$tervitus = "Tere tulemast ";
$nr = 1;
$nr1 = 1;
echo 'Muutuja $nr väärtus on: '. $nr . '<br>';
$nr = $nr++;
echo 'Muutuja $nr väärtus on: '. $nr . '<br>';
echo 'Muutuja $nr1 väärtus on: '. $nr1 . '<br>';
$nr1 = ++$nr1;
echo 'Muutuja $nr1 väärtus on: '. $nr1 . '<br>';




if ($täna){
echo $tervitus."$nimi $homme on ilus ilm";
} else { echo "Ei ole midagi näidata!"; }
echo "<br>";

/*

Näide massiivist õige liikme leidmise kohta

switch(strtolower($päev)){

    case (strtolower($ndl[0])):
        echo "$ndl[0] on tööpäev";
        break;
    case (strtoupper($ndl[1])):
        echo "$ndl[1] on tööpäev";
        break;
    case (strtoupper($ndl[2])):
        echo "$ndl[2] on tööpäev";
        break;
    case (strtoupper($ndl[3])):
        echo "$ndl[3] on tööpäev";
        break;
    case (strtoupper($ndl[4])):
        echo "$ndl[4] on tööpäev";
        break;
    default:
        echo "$päev on vaba päev";
        break;
}
 */

for ($i=0; $i<count($ndl); $i++) {

    if ($päev == $ndl[$i]) {
        echo "$ndl[$i] on tööpäev";
        
    } elseif ($päev == "Laupäev" or $päev == "Pühapäev"){
        echo $päev." on puhkepäev"; 
        die;
    } 
}

$i = 0;
while ($i < count($ndl)){
    echo $ndl[$i]."<br>";
    $i++;
}

$i = 0;
do { echo $i."<br>"; $i++; } while ($i = 0 );

?>