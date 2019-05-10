<!DOCTYPE html>
<html lang="it-IT">
<head>
 <?php

  $naslov = "";
  $jezik = "IT";
  require("../uključi/glava.php");

 ?>
</head>
<body>

<script src="/skriptovi/meni.js"></script>

<div class="stranica pocetna">

 <div class="vrh">
  <a class="logo" href="/">
   <div>
    <img src="/slike/logo320x80px.png" alt="vDinar - Dinaro virtuale">
   </div>
  </a>

  <div class="mobilni-alati">
   <a class="mobilni-jezici" href="#" onclick="padajuciJezici(); return false;">
    <img src="/slike/ikone/jezici80px.png" alt="Lingue">
   </a>
   <a class="mobilni-meni" href="#" onclick="padajuciMeni(); return false;">
    <img src="/slike/ikone/meni80px.png" alt="Men&ugrave; cellulare">
   </a>
  </div>

  <ul>
   <a href="#introduzione">
    <li>
     Introduzione
    </li>
   <a href="#come-iniziare">
    <li>
     Come iniziare
    </li>
   </a>
   <a href="#installazione">
    <li>
     Installazione
    </li>
   </a>
   <a href="#ottenere-dinari">
    <li>
     Ottenere Dinari
    </li>
   </a>
   <li>
    <select name="jezik" onchange="location = this.value;">
     <option value="/">SH</option>
     <option value="/en/">EN</option>
     <option selected value="/it/">IT</option>
    </select>
   </li>
  </ul>
 </div>

 <ul class="padajuci-jezici" id="padajuciJezici">
  <a href="/">
   <li>
    SrpskoHrvatski
   </li>
  </a>
  <a href="/en/">
   <li>
    English
   </li>
  </a>
 </ul>
 <ul class="padajuci-meni" id="padajuciMeni">
  <a href="#introduzione">
   <li>
    Scopri cos'&egrave;
   </li>
  <a href="#come-iniziare">
   <li>
    Come iniziare
   </li>
  </a>
  <a href="#installazione">
   <li>
    Installazione
   </li>
  </a>
  <a href="#ottenere-dinari">
   <li>
    Ottenere Dinari
   </li>
  </a>
 </ul>

 <div class="prezentacija">
  <div class="naslov">
   <h1>La valuta digitale pi&ugrave; conveniente</h1>
   <h2>Un ponte digitale per l'ex-Jugoslavia</h2>
   <div class="dugmad">
    <a class="dugme" href="#introduzione">
     <div>
      Introduzione
     </div>
    </a>
    <a class="dugme" href="#installazione">
     <div>
      Portafoglio
     </div>
    </a>
    <a class="dugme" href="#ottenere-dinari">
     <div>
      Ottenere Dinari
     </div>
    </a>
   </div>
  </div>
 </div>

 <div class="traka-donacija">
  <div class="pozadina">
   <div class="traka">
    <p class="opis">&#8625; 2% raccolto per donazioni &rarr;
    <?php
     $donacije = file_get_contents("https://svarog.jugoslaven.com/?page=api&action=getblockcount&api_key=780e43ba0383e8e7edeb6777dd4fb89f8d15be66a85aef4067d3bc9b78d85480");
     $donacije = json_decode($donacije);
     $donacije = $donacije->getblockcount->data;
     $donacije = str_replace(".", ",", $donacije);
     echo("<font class=\"zeleno\"><b>");
      echo($donacije);
    ?>
    VDN</b></font> pronti ad essere donati</p>
    <div class="postotak">
     <div class="punjenje">

     </div>
     <p class="veza">98% guadagnato dagli utenti</p>
    </div>
   </div>
  </div>
 </div>

 <!-- Kraj glavne stranice --!>

 <div class="o-projektu" id="introduzione">
  <div class="panel">
   <h2>Cos'&egrave; il Dinaro virtuale?</h2>
   <p>Il Dinaro virtuale &egrave; un sistema di pagamento digitale e decentralizzato dove ogni utente automaticamente verifica con il suo
      portafoglio, ovvero un programma sul proprio computer, tutte le transazioni e i bilanci degli altri utenti: i proprietari di un
      portafoglio digitale vDinar possono ricevere e inviare denaro senza terzi, direttamente, dal proprio computer o cellulare!</p>
  </div>

  <div class="panel">
   <h2>Cos'&egrave; un portafoglio?</h2>
   <p>Un portafoglio &egrave; un programma, alla base di vDinar, che automaticamente scarica tutte le informazioni e le verifica per voi,
      affinch&eacute; possiate essere a conoscenza di bilanci e transazioni della rete inera. Nel vostro portafoglio sono inoltre situati
      i vostri indirizzi pubblici digitali dove riceverete Dinari virtuali e con i quali potrete inviarne a vostra volta.</p>
  </div>

  <div class="panel">
   <h2>Dov'&egrave; disponibile?</h2>
   <p>Le regole della rete non fanno differenze tra utenti stranieri e locali, pertanto non implicano alcun limite. Nonostante questo, il
      sistema di vDinar raccoglie il 2% di tutto il capitale generato da devolvere in donazioni locali che fungeranno da aiuto per persone
      del luogo in difficolt&agrave;, difendendo la localizzazione del progetto e la sua utilit&agrave; sociale!</p>
  </div>

  <div class="rucica">
  </div>
 </div>

 <div class="kako-poceti">
  <h2 id="come-iniziare">Come iniziare</h2>
  <div class="panel">
   <p>Prima di tutto &egrave; necessario un <b>portafoglio</b> affinch&eacute; si possano creare nuovi indirizzi pubblici digitali con i
      quali ricevere Dinari virtuali. Con il portafoglio otteniamo l'accesso alla <b>rete</b> di vDinar e ci &egrave; possibile avvisare
      tutti gli utenti riguardo le nostre azioni, riguardo le nostre <b>transazioni</b>. Il portafoglio &egrave; un programma gratuito
      facilmente installabile sul proprio computer.</p>
   <div>
    <div class="slika">
    </div>
    <p>Il portafoglio non deve per forza rimanere acceso perch&eacute; si possano ricevere Dinari virtuali, in quanto altri utenti connessi
       <b>custodiranno</b> l'informazione al vostro posto e, non appena vi riconnetterete, avviseranno anche voi. L'importante &egrave; non
       perdere mai le password dei vostri <b>indirizzi</b> all'interno del portafoglio disinstallando quest'ultimo senza averle prima copiate,
       in quanto le vostre password e i vostri indirizzi rappresentano la vostra <b>identit&agrave;</b> digitale.</p>
   </div>
  </div>

  <h2 id="installazione">Installazione</h2>
  <h3>Selezionate il sistema operativo del vostro computer</h3>
  <div class="novcanici">
   <div class="windows">
    <div class="logo">
    </div>
    <h3>Windows</h3>
    <p><a href="https://github.com/AndreaDejanGrande/vDinar/releases/download/v2.0/vDinar-2.0-Win32.zip" target="_blank">(Scarica il
       portafoglio Windows)</a></p>
   </div>

   <div class="linux">
    <div class="logo">
    </div>
    <h3>Linux</h3>
    <p><a href="https://github.com/AndreaDejanGrande/vDinar/archive/v2.0.tar.gz" target="_blank">(Scarica il
       codice)</a></p>
   </div>
  </div>
 </div>

 <div class="dobiti-dinare">
  <h2 id="ottenere-dinari">Come ottenere Dinari</h2>
  <h3>In quanto vDinar &egrave; un sistema decentralizzato, senza un ente centrale in grado di produrre nuove monete, ogni circa 2 minuti
      e mezzo l'intera rete premia gli utenti che hanno lasciato i propri dispositivi al servizio della rete vDinar con nuove monete
      appena generate. Quindi, come lasciare il proprio computer al servizio della rete? Come essere premiati in Dinari?</h3>

  <div class="kopanje">
   <h2>Estrazione</h2>
   <h3>L'estrazione &egrave; un processo che contemporaneamente dimostra la sicurezza della rete e produce nuove monete: ad un dispositivo,
       ad un computer, che automaticamente indovina soluzioni ad un problema matematico, sar&agrave; permesso scegliere un indirizzo a
       piacere al quale saranno inviate le monete appena generate. Questo problema matematico si aggiorna ogniqualvolta viene risolto
       il precedente, rendendo pertanto impossibile prevedere soluzioni di problemi futuri. Con ci&ograve; si dimostra inoltre la potenza
       di calcolo situata dietro ogni transazione confermata.</h3>
   <div class="rudari">
    <font class="naslov">Minatori</font>
    <div class="pocetnici">
     <font class="opis">Per principianti</font>
     <a href="https://github.com/AndreaDejanGrande/Svarog/releases" target="_blank">
      <div class="rudar rudar--cpu">
       <font class="vrsta">CPU</font>
      </div>
     </a>
    </div>
    <div class="napredno">
     <font class="opis">Per utenti esperti</font>
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
  <h2>Altri modi</h2>
  <h3>Potete ottenere Dinari virtuali come per ogni altra valuta esistente, comprandoli o per mezzo di qualsiasi accordo che vi permetta di
      ricevere una quantit&agrave; di Dinari virtuali da qualcuno in cambio di servizi o denaro di altro tipo. Potete ad esempio scambiare
      Bitcoin, una criptovaluta diversa ma molto conosciuta, per Dinari virtuali sul nostro
      <a href="https://voda.network" target="_blank">cambiovalute ufficiale "Voda"</a>.</h3>
 </div>

 <div class="kraj">
  <p class="autorsko-pravo">&copy; Tutelato dai diritti d'autore di vDinar.info 2018-2019</p>

  <div class="table">

   <div class="tabla">
    <h2>Contatti</h2>
    <ul>
     <li>
      contatti@vdinar.info
     </li>
     <li>
      supporto@vdinar.info
     </li>
    </ul>
   </div>

   <div class="tabla">
    <h2>Servizi</h2>
    <ul>
     <li>
      <a href="https://pro.vdinar.info" target="_blank">vDinar per programmatori</a>
     </li>
     <li>
      <a href="https://www.vdinar.info/viki" target="_blank">vDinar Wiki</a>
     </li>
     <li>
      <a href="https://vdinar.jugoslaven.com/en/wallet" target="_blank">Portafoglio web</a>
     </li>
    </ul>
   </div>

   <div class="tabla">
    <h2>Media</h2>
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
