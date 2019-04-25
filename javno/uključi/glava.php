<title>vDinar - <?php

 if($naslov == "")
 {
  switch($jezik)
  {
   case "SH":
   echo("virtualni Dinar");
   break;

   case "EN":
   echo("virtual Dinar");
   break;

   case "IT":
   echo("Dinaro virtuale");
   break;
  }
 }
 else
 {
  echo($naslov);
 }

?></title>
<meta charset="UTF-8">
<?php if($jezik == "SH"): ?>
<meta name="description" content="Međunarodno digitalno sredstvo za plaćanje iz bivše Jugoslavije: pošaljite i dobijte pare bez trećih strana i sa najmanjim porezima na svijetu!">
<meta name="keywords" content="Kriptovaluta, Digitalno sredstvo, Biv&#353;a Jugoslavija">
<?php elseif($jezik == "EN"): ?>
<meta name="description" content="International digital asset from former Yugoslavia: send and receive money without third parties and with the lowest fees around!">
<meta name="keywords" content="Cryptocurrency, Digital asset, Former Yugoslavia">
<?php elseif($jezik == "IT"): ?>
<meta name="description" content="Risorsa digitale internazionale dell'ex-Jugoslavia: invia e ricevi soldi senza terzi e con le pi&ugrave; basse tasse che ci siano!">
<meta name="keywords" content="Crittovaluta, Risorsa digitale, Ex Jugoslavia">
<?php endif; ?>
<link rel="icon" href="/ikona.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="/stil.css">
<meta property="og:image" content="https://www.vdinar.info/slike/pregled560x292px.png">
