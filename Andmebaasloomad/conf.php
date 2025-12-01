<?php
$servername = '127.0.0.1';
$kasutajanimi = 'savvasmirnyagin';
$parool = '123456';
$andmebaasinimi = 'savvasmirnyagin';
$yhendus =new mysqli($servername, $kasutajanimi, $parool, $andmebaasinimi);
$yhendus->set_charset("utf8");

/*zone.ee
$servername = d141161.mysql.zonevs.eu;
$kasutajanimi = 'd141161_savvasmirnyagin';
$parool = 'SofiMy...';
$andmebaasinimi = 'd141161_phpbaas';
$yhendus =new mysqli($servername, $kasutajanimi, $parool, $andmebaasinimi);
$yhendus->set_charset("utf8");
*/