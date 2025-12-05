<?php
$servername = '127.0.0.1';
$kasutajanimi = 'savvasmirnyagin';
$parool = '123456';
$andmebaasinimi = 'savvasmirnyagin';
$yhendus =new mysqli($servername, $kasutajanimi, $parool, $andmebaasinimi);
$yhendus->set_charset("utf8");