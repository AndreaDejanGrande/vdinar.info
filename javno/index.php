<?php include("uključi/statistike.php"); ?>
<!DOCTYPE html>
<html lang="sh">
<head>
 <?php

  $naslov = "";
  $jezik = "SH";
  require("uključi/glava.php");

 ?>
</head>
<body>

<script src="/skriptovi/meni.js"></script>

<div class="stranica pocetna">

 <div class="vrh">
  <a class="logo" href="/">
   <div>
    <img src="/slike/logo320x80px.png" alt="vDinar - virtualni Dinar">
   </div>
  </a>

  <div class="mobilni-alati">
   <a class="mobilni-jezici" href="#" onclick="padajuciJezici(); return false;">
    <img src="/slike/ikone/jezici80px.png" alt="Mobilni jezici">
   </a>
   <a class="mobilni-meni" href="#" onclick="padajuciMeni(); return false;">
    <img src="/slike/ikone/meni80px.png" alt="Mobilni meni">
   </a>
  </div>

  <ul>
   <a href="#o-projektu">
    <li>
     O projektu
    </li>
   <a href="#kako-poceti">
    <li>
     Kako po&#269;eti
    </li>
   </a>
   <a href="#instaliranje">
    <li>
     Instaliranje
    </li>
   </a>
   <a href="#dobiti-dinare">
    <li>
     Dobiti Dinare
    </li>
   </a>
   <li>
    <select name="jezik" onchange="location = this.value;">
     <option selected value="/">SH</option>
     <option value="/en/">EN</option>
     <option value="/it/">IT</option>
    </select>
   </li>
  </ul>
 </div>

 <ul class="padajuci-jezici" id="padajuciJezici">
  <a href="/en/">
   <li>
    English
   </li>
  </a>
  <a href="/it/">
   <li>
    Italiano
   </li>
  </a>
 </ul>
 <ul class="padajuci-meni" id="padajuciMeni">
  <a href="#o-projektu">
   <li>
    O projektu
   </li>
  <a href="#kako-poceti">
   <li>
    Kako po&#269;eti
   </li>
  </a>
  <a href="#instaliranje">
   <li>
    Instaliranje
   </li>
  </a>
  <a href="#dobiti-dinare">
   <li>
    Dobiti Dinare
   </li>
  </a>
 </ul>

 <div class="prezentacija">
  <div class="naslov">
   <h1>Najjeftinije sredstvo za pla&#263;anje</h1>
   <h2>Digitalni most prema svijetu za biv&#353;u Jugoslaviju</h2>
   <div class="dugmad">
    <a class="dugme" href="#o-projektu">
     <div>
      Introdukcija
     </div>
    </a>
    <a class="dugme" href="#instaliranje">
     <div>
      Nov&#269;anik
     </div>
    </a>
    <a class="dugme" href="#dobiti-dinare">
     <div>
      Dobij Dinare
     </div>
    </a>
   </div>
  </div>
 </div>

 <div class="traka-donacija">
  <div class="pozadina">
   <div class="traka">
    <p class="opis">&#8625; 2% sa&#269;uvano za donacije &rarr;
    <?php
     $donacije = file_get_contents("https://svarog.jugoslaven.com/?page=api&action=getblockcount&api_key=780e43ba0383e8e7edeb6777dd4fb89f8d15be66a85aef4067d3bc9b78d85480");
     $donacije = json_decode($donacije);
     $donacije = $donacije->getblockcount->data;
     $donacije = str_replace(".", ",", $donacije);
     echo("<font class=\"zeleno\"><b>");
      echo($donacije);
    ?>
    VDN</b></font> spremno za donaciju</p>
    <div class="postotak">
     <div class="punjenje">

     </div>
     <p class="veza">98% zara&#273;uju korisnici</p>
    </div>
   </div>
  </div>
 </div>

 <!-- Kraj glavne stranice --!>

 <div class="o-projektu" id="o-projektu">
  <div class="panel">
   <h2>&#352;ta je virtualni Dinar?</h2>
   <p>Virtualni Dinar je digitalni, decentralizovani sistem pla&#263;anja gdje svaki korisnik automatski provjerava svojim nov&#269;anikom,
      to jest jednim programom na svom kompjuteru, sve transakcije i kredite ostalih korisnika: vlasnici digitalnog nov&#269;anika virtualnih
      Dinara mogu dobiti i slati novac bez banka i bez tre&#263;ih partija, direktno sa svog kompjutera ili mobilnog ure&#273;aja!</p>
  </div>

  <div class="panel">
   <h2>&#352;ta je nov&#269;anik?</h2>
   <p>Nov&#269;anik je osnovni program virtualnog Dinara, program koji automatski preuzima sve informacije i provjerava ih za vas kako biste
      saznali kredite i transakcije &#269;itave mre&#382;e. U va&#353;em se nov&#269;aniku tako&#273;er nalaze sve va&#353;e virtualne, javne
      adrese na koje &#263;ete dobiti virtualne Dinare i kojima mo&#382;ete slati Dinare na tu&#273;e adrese.</p>
  </div>

  <div class="panel">
   <h2>Gdje je dostupno?</h2>
   <p>Pravila mre&#382;e ne razlikuju strane korisnike od lokalnih i dakle ne postavljaju nikakve granice. Ipak, sistem virtualnog Dinara
      skuplja 2% svih proizvedenih digitalnih nov&#269;i&#263;a za lokalne donacije koje &#263;e biti upotrebljene kao pomo&#263; za
      ljude u potrebi, brane&#263;i lokalizaciju projekta i njegovu dru&#353;tvenu korisnost!</p>
  </div>

  <div class="rucica">
  </div>
 </div>

 <div class="kako-poceti">
  <h2 id="kako-poceti">Kako po&#269;eti</h2>
  <div class="panel">
   <p>Prije svega potreban je <b>nov&#269;anik</b> kako bi se napravile nove javne digitalne adrese gdje &#263;e se dobiti virtualne Dinare.
      Nov&#269;anikom dobivamo pristup <b>mre&#382;i</b> i dozvoljeno nam je obavijestiti sve korisnike o na&#353;im akcijama, o na&#353;im
      <b>transakcijama</b>. Nov&#269;anik je besplatan program koji se mo&#382;e jednostavno instalirati na svakom kompjuteru.</p>
   <div>
    <div class="slika">
    </div>
    <p>Nov&#269;anik ne mora ostati uklju&#269;en kako bi se dobile virtualne Dinare, jer &#263;e ostali aktivni korisnici dobiti informaciju
       i <b>&#269;uvati</b> je za vas i, &#269;im se ponovo priklju&#269;ite, obavijestit &#263;e i vas. Va&#382;no je da nikada ne gubite lozinke
       va&#353;ih <b>adresa</b> koje su sa&#269;uvane u njemu deinstaliraju&#263;i nov&#269;anik dok ih niste sve kopirali, jer su va&#353;e lozinke
       i va&#353;e adrese va&#353; digitalni <b>identitet</b>.</p>
   </div>
  </div>

  <h2 id="instaliranje">Instaliranje</h2>
  <h3>Izaberite operativni sistem va&#353;eg kompjutera</h3>
  <div class="novcanici">
   <div class="windows">
    <div class="logo">
    </div>
    <h3>Windows</h3>
    <p><a href="https://github.com/AndreaDejanGrande/vDinar/releases/download/v2.0/vDinar-2.0-Win32.zip" target="_blank">(Preuzmi
       Windows nov&#269;anik)</a></p>
   </div>

   <div class="linux">
    <div class="logo">
    </div>
    <h3>Linux</h3>
    <p><a href="https://github.com/AndreaDejanGrande/vDinar/archive/v2.0.tar.gz" target="_blank">(Preuzmi 
       izvorni kod)</a></p>
   </div>
  </div>
 </div>

 <div class="dobiti-dinare">
  <h2 id="dobiti-dinare">Kako dobiti Dinare</h2>
  <h3>Dakle &#353;to je virtualni Dinar decentralizovani sistem, bez glavnog entiteta koji bi proizveo nove nov&#269;i&#263;e, svakih 2
      minuta i po otprilike mre&#382;a nagra&#273;uje korisnike koji su ostavili njihove ure&#273;aje na usluzi virtualnog Dinara
      novim, tek formiranim novcem. No, kako ostaviti svoj kompjuter na usluzi mre&#382;e? Kako biti nagra&#273;eni Dinarima?</h3>

  <div class="kopanje">
   <h2>Kopanje</h2>
   <h3>Kopanje je proces koji istovremeno dokazuje sigurnost mre&#382;e i proizvodi nove nov&#269;i&#263;e: ure&#273;aj, kompjuter, koji
       automatski poga&#273;a solucije jednog matemati&#269;kog problema, smije slobodno odabrati adresu kojoj &#263;e biti poslani
       novoformirani nov&#269;i&#263;i. Ovaj se problem a&#382;urira kad god je prethodni rije&#353;en, tako da je nemogu&#263;e znati
       unaprijed soluciju jednog budu&#263;eg problema. Ovim se isto dokazuje ra&#269;unalna snaga iza svih potvr&#273;enih transakcija.</h3>
   <div class="rudari">
    <font class="naslov">Rudari</font>
    <div class="pocetnici">
     <font class="opis">Za po&#269;etnike</font>
     <a href="https://github.com/AndreaDejanGrande/Svarog/releases" target="_blank">
      <div class="rudar rudar--cpu">
       <font class="vrsta">CPU</font>
      </div>
     </a>
    </div>
    <div class="napredno">
     <font class="opis">Za napredne korisnike</font>
     <a href="https://github.com/AndreaDejanGrande/Triglav/releases" target="_blank">
      <div class="rudar rudar--amd">
       <font class="vrsta">AMD</font>
      </div>
     </a>
     <a href="https://github.com/AndreaDejanGrande/Veles/releases" target="_blank">
      <div class="rudar rudar--nvidia">
       <font class="vrsta">Nvidia</font>
      </div>
     </a>
    </div>
   </div>
  </div>
  <h2>Drugi na&#269;ini</h2>
  <h3>Mo&#382;ete virtualne Dinare dobiti kao sa svakom drugom postoje&#263;om valutom, kupuju&#263;i ih ili bilo kojim dogovorom kojim &#263;e
      vlasnik koli&#269;ine virtualnih Dinara prihvatiti da vam ih po&#353;alje nekoliko u zamjenu za uslugu ili u zamjenu za novac druge
      vrste. Mo&#382;ete na primjer zamijeniti Bitcoin, jedna razli&#269;ita ali popularna kriptovaluta, za virtualne Dinare na na&#353;oj
      <a href="https://voda.network/sh/" target="_blank">slu&#382;benoj mjenja&#269;nici "Voda"</a>.</h3>
 </div>

 <div class="kraj">
  <p class="autorsko-pravo">&copy; Za&#353;tita autorskog prava vDinar.info 2018-2019</p>

  <div class="table">

   <div class="tabla">
    <h2>Kontakti</h2>
    <ul>
     <li>
      kontakti@vdinar.info
     </li>
     <li>
      pomoc@vdinar.info
     </li>
    </ul>
   </div>

   <div class="tabla">
    <h2>Usluge</h2>
    <ul>
     <li>
      <a href="https://pro.vdinar.info" target="_blank">vDinar za programere</a>
     </li>
     <li>
      <a href="https://www.vdinar.info/viki" target="_blank">vDinar Viki</a>
     </li>
     <li>
      <a href="https://vdinar.jugoslaven.com/en/wallet" target="_blank">Mre&#382;ni nov&#269;anik</a>
     </li>
    </ul>
   </div>

   <div class="tabla">
    <h2>Mediji</h2>
    <ul>
     <li>
      <a href="https://t.me/vdinar" target="_blank">Telegram</a>
      <i>(@vDinar)</i>
     </li>
     <li>
      <a href="https://twitter.com/virtualniDinar" target="_blank">Twitter</a>
      <i>(@virtualniDinar)</i>
     </li>
     <li>
      <a href="https://www.facebook.com/vDinar" target="_blank">Facebook</a>
     </li>
    </ul>
   </div>

  </div>
 </div>
</div>

</body>
</html>
