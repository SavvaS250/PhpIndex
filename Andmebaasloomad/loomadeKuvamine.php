<?php
require ('conf.php');
global $yhendus;
if(isset($_REQUEST["kustuta"])){
    $kask = $yhendus ->prepare("DELETE FROM loomad WHERE loomId=?");
    $kask->bind_param("i", $_REQUEST["kustuta"]);
    $kask->execute();
}
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <title>Loomad SQL - andmebaasist</title>
    <link rel="stylesheet" href="andmebaasStyle.css">
</head>
<body>
<h1>Loomade tabeli sisu</h1>
<table>
    <tr>
        <td>LoomaNimi</td>
        <td>Kaal</td>
        <td>Värv</td>
    </tr>

<?php
global $yhendus;
$kask = $yhendus -> prepare("SELECT loomId, loomaNimi, kaal, varv from loomad");
$kask -> bind_result($loomId, $loomaNimi, $kaal, $varv);
$kask -> execute();

while ($kask -> fetch()) {
    echo "<tr>";
    echo "<td>".$loomaNimi."</td>";
    echo "<td>".$kaal."</td>";
    echo "<td>".$varv."</td>";
    echo "<td><a href='?kustuta=$loomId'>xxx</a></td>";
    echo "</tr>";
}
?>
</table>
<a href="loomaLisamine.php">Lisa loom...</a>
</body>
</html>
