<link href="kujundus.css" rel="stylesheet" type="text/css" />
<h1>Mobiilimalli konspekt</h1>
<br>
<div>Minu ülesanne oli teha mobiilimall, ehk lehekülg mis sobib
vaatamiseks nii arvutil, kui ka mobiilil.</div>
<div> Lehe tegemiseks kasutasin PhpStorm-i.</div>
<pre>
    &lt;php require("p2is.php"); ?>
&lt;h2>Tuletõlrje anekdood&lt;/h2&gt;
&lt;br>
&lt;div>"Hallo! Kas see on tuletõrje? Tulge ruttu siia, mul maja põleb!"
    "Palun rahunege seltsimees ja seletage, kuidas teie juurde saab!"
    "Tule jumal appi! Seletan! Istuge oma suurde, punasesse masinasse ja sõitke!"&lt;/div>
&lt;br>
&lt;php require("jalus.php"); ?></pre>
<div>See koodi osa on see mida sa näed iga anekdoodi vajutades. php require
tähendab seda, et sinna lisandub koodi osa mis on kirjutatud p2is.php failis,
sama asi ka jalus.php-ga. Iga anekdoodi jaoks on taoline leht ja
nende ainuke erinevus ongi anekdood.</div>
<pre>&lt;div id="header">
    &lt;div class="nav">
        &lt;ul>
            &lt;li>&lt;a href="anekdood1.php">Tuletõlrje anekdood&lt;/a>&lt;/li>
            &lt;li>&lt;a href="anekdood2.php">Juku anekdood&lt;/a>&lt;/li>
            &lt;li>&lt;a href="anekdood3.php">Arvutifriik anekdood&lt;/a>&lt;/li>
            &lt;li>&lt;a href="anekdood4.php">Aja muutus&lt;/a>&lt;/li>
            &lt;li>&lt;a href="anekdood5.php">Politseikoer anekdood&lt;/a>&lt;/li>
        &lt;/ul>
    &lt;/div>
&lt;/div>
&lt;div class="clear">&lt;/div>
&lt;h2>Tuletõlrje anekdood&lt;/h2>
&lt;div>"Hallo! Kas see on tuletõrje? Tulge ruttu siia, mul maja põleb!"
    "Palun rahunege seltsimees ja seletage, kuidas teie juurde saab!"
    "Tule jumal appi! Seletan! Istuge oma suurde, punasesse masinasse ja sõitke!"&lt;/div>
    &lt;div class="nav2">
    &lt;p>Design by ChatGPT&lt;/p>
&lt;/div></pre>
<div>See koodi osa põhimõtteliselt paneb kõik kokku ja samuti kui
jõuad lehele näed alguses seda mis siin on.</div>
<pre>body {
    background: #0f0f0f;
    font-family: "Inter", Arial, sans-serif;
    margin: 0;
    padding: 0;
    color: #e6e6e6;
}</pre>
<div>See on CSS kujundus ja see on body jaoks. Siin lisatakse
tausta värvi, teksti värvi ja samuti teksti fonti.</div>
<pre>.nav ul li a:hover {
    background: #00eaff;
    color: #0f0f0f;
    border-radius: 6px;
}</pre>
<div>See on CSS kujundus navigeerimis menüü jaoks. See ei ole terve
navigeerimis menüü kujundus, vaid see on ainult osa sellest kui
hiir on nuppu peal. See muudab nuppu tausta värvi siniseks,
teksti värvi mustaks ja teeb nurgad natuke ilusamaks.</div>
<pre>h2 {
    font-size: 20px;
    font-weight: 600;
    color: #00eaff;
    border-left: 4px solid #00eaff;
    padding: 10px 14px;
    margin: 15px 10px;
    background: #1a1a1a;
    border-radius: 6px;
    box-shadow: 0 2px 6px rgba(0, 234, 255, 0.15);
}</pre>
<div>See CSS kood lisab kujunduse anekdoodide pealkirjade jaoks. Näiteks
lisab pealkirja teksti värvi, tausta värvi, kasti varja ja selle värvi.</div>
<pre>@media screen and (max-width: 768px)  {
    html{
        scroll-behavior: smooth;
    }
}</pre>
<div>See CSS aitab sobitada lehe ehk css kujunduse mobiili jaoks.</div>

