<?php
echo "<div class = 'flex-container'>";
echo "<div>";
echo "<h1>Ajafunktsioonid</h1>";
echo "Tänane kuupäev ".date("d.m.Y");
//time zone - juhul kui timezone ei ole määratud, siis php kasutab aega mis on localhostis
date_default_timezone_set("Europe/Tallinn");
echo "<br>";
echo "<a href='https://www.php.net/manual/en/timezones.europe.php'>timezone</a>";
echo "<br>";
echo "time() - aeg sekundites ".time();
echo "<br>";
echo "date() - ".date("d.m.Y G:i:s", time());
echo "<pre>
date('d.m.Y G:i:s', time());
d - päev 01...31
m - kuu 1...12
Y - neljakohane arv
G - 24h formaat
i - minutid 0...59
s - sekundid 0...59
</pre>";
echo "<br>";
echo "<h2>Tehted kuupäevadega</h2>";
echo "<br>";
echo "+1min - time()+60 = ".date("d.m.Y G:i:s", time()+60);
echo "<br>";
echo "+1tund - time()+60*60 = ".date("d.m.Y G:i:s", time()+60*60);
echo "<br>";
echo "+1päev - time()+60*60*24 = ".date("d.m.Y G:i:s", time()+60*60*24);
echo "<br>";
echo "<h2>Kuupäeva genereerimine</h2>";
echo "<br>";
echo "mktime(tunnid, minutid, sekundid, kuu, päev, aasta)";
echo "<br>";
$synnipaev = mktime(14, 00, 00, 9, 11, 2008);
echo "Minu sünnipäev ".date("d.m.Y G:i:s", $synnipaev);
echo "<br>";
echo "Massiivi (array) abil näidata tänase kuu nimetuse";
echo "<br>";
$kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'april', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
$paev = date('d');
$aasta = date('Y');
$kuu = $kuud[date('m')]; // kuu nimega
echo "Tänane kuupäev kuu nimega ".$paev.".".$kuu." ".$aasta."a";
//ise kirjuta oma sünnipäeva kuu nimega
echo "<br>";
$paev1 = 11;
$aasta1 = 2008;
$kuu1 = $kuud[9];
echo "Minu sünnipäev kuu nimega ".$paev1.".".$kuu1." ".$aasta1."a";






