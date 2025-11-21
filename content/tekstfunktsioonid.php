<?php
echo "<h2>Tekstfunktsioonid</h2>";
$tekst = 'Veebirakendus on arvutitarkvara programm';
echo $tekst;
echo "<br>";
echo "Mitu sõna on lauses - str_word_count() = ".str_word_count($tekst). "tk";
//metshein.com -- PHP alused
echo "<br>";
echo "Muutab kõik tähed väiksemaks - strtolower() = ".strtolower($tekst);
echo '<br>';
echo "Muutab kõik tähed suuremaks - strtoupper() = ".strtoupper($tekst);
echo '<br>';
echo "Muutab esimese tähe suureks - ucfirst() = ".ucfirst(strtolower($tekst));
echo '<br>';
echo "Loeb kokku märkide arvu tekstis, ka tühikud ja kirjavahemärgid - strlen() = ".strlen($tekst);
echo '<br>';
echo "<pre>$tekst</pre>";
echo "<pre>"."Eemaldab tühikud tekstist - trim() = ".trim($tekst)."</pre>";
echo "<pre>"."Eemaldab tühikud teksti eest - ltrim() = ".ltrim($tekst)."</pre>";
echo "<pre>"."Eemaldab tühikud teksti taga - rtrim() = ".rtrim($tekst)."</pre>";
echo "<br>";
echo "<h3>Tekst kui massiiv</h3>";
echo "<br>";
echo "Võtab tekstist esimese tähe - tekst[0] = ".$tekst[0];
echo '<br>';
echo "Võtab tekstist viienda tähe - tekst[4] = ".$tekst[4];
echo '<br>';
echo "Võtab alates 4 indeks 5 tähte - substr(tekst, 4, 5) = ".substr($tekst, 3, 5);		//thin
echo '<br>';
echo "Võtab alates 4 indeks -13 tähte - substr(tekst, 4, -13) = ".substr($tekst, 4, -13);	//thinking men
echo '<br>';
echo "Võtab alates -8 indeks 7 tähte - substr(tekst, -8, 7) = ".substr($tekst, -8, 7);
echo '<br>';
print_r(str_word_count($tekst, 1)); //prindib: Array ( [0] => Veebirakendus [1] => on [2] => arvutitarkvara [3] => programm )
echo '<br>';
$sona = str_word_count($tekst, 1);
echo "Kolmas sõna teksti massiivist - sõna[2] = ".$sona[2];
echo "<br>";
echo "<h3>Teksti asendamine</h3>";
echo "<br>";
$asendus = 'tarkvara';
$otsitav_algus = 17;
$otsitav_pikkus = 14;
echo "Asendab sõna - substr_replace() = ".substr_replace($tekst, $asendus, $otsitav_algus, $otsitav_pikkus);
echo "<br>";
$otsi = array('on', 'programm');
$asenda = array('-', 'software');
echo "Otsib ja asendab sõnad massiivi abil - str_replace() = ".str_replace($otsi, $asenda, $tekst);
echo "<h3>Mõistatus, arva ära linn</h3>";
$linn = 'Jõhvi';
echo "Linna sõna pikkus on ".mb_strlen($linn, 'utf8')." tähte";
echo "<br>";
echo "Esimene täht on ".substr($linn, 0, 1);
echo "<br>";
echo "Kaks viimast tähte on ".substr($linn, 4, 4);
echo "<br>";
$asendus1 = 'är';
$otsitav_algus1 = 1;
$otsitav_pikkus1 = 3;
echo "Kui muudan linna nimes paar asja siis tuleb selline nimetus: ".substr_replace($linn, $asendus1, $otsitav_algus1, $otsitav_pikkus1);
echo "<br>";
?>
<form action="tekstfunktsioonid.php" method="post">
    <label for="linn">Sisesta linna nime</label>
    <input type="text" id="linn" name="linn">
    <input type="submit" value="Kontrolli">
</form>
<?php
if(isset($_REQUEST["linn"])){
    if($_REQUEST["linn"] == 'Jõhvi'){
        echo $_REQUEST["linn"]." on õige!";
    } else {
        echo $_REQUEST["linn"]." on vale!";
    }
}
