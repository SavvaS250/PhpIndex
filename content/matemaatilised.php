<?php
echo "<h2>Matemaatilised tehted/funktsioonid</h2>";
$arv1 = 100;
$arv2 = 15;
$liitmine=$arv1+$arv2;
$lahutamine=$arv1-$arv2;
$korrutis=$arv1*$arv2;
$jagamine=$arv1/$arv2;
echo "arv1 on ".$arv1." ja arv2 on ".$arv2."<br>";
echo "<strong>Vastused:</strong> Liitmine ".$liitmine."<br>";
echo "Lahutaamine: ".$lahutamine."<br>";
echo "Korrutis: ".$korrutis."<br>";
echo "Jagamine: ".$jagamine."<br>";
echo "Omistamise operaatorid: ";
echo "<br>";
// $arv1++ - suurendamine ühe võrra $arv1=$arv1+1
$arv1++;
echo $arv1." - suurendamine ühe võrra";
echo "<br>";
// $arv1-- - vähendamine ühe võrra $arv1=$arv1-1
$arv1--;
echo $arv1." - vähendamine ühe võrra";
echo "<br>";
echo "<strong>Ruutjuur -sqrt()</strong>  = ".sqrt($arv1);
echo "<br>";
$arvud = array(11,21,32,43,54);
echo "Suurim arv massiivist - ".max($arvud);
echo "<br>";
echo "Väikseim arv massiivist - ".min($arvud);
echo "<br>";
echo "Juhuslik arv - ".rand();
echo "<br>";
$arv3 = 3.456;
echo "Ümardamine - ".round($arv3);

