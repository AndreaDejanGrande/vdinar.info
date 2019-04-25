<!DOCTYPE html>
<html lang="en-GB">
<head>
 <?php

  $naslov = "";
  $jezik = "EN";
  require("../uključi/glava.php");

 ?>
</head>
<body>

<script src="/skriptovi/meni.js"></script>

<div class="stranica pocetna">

 <div class="vrh">
  <a class="logo" href="/">
   <div>
    <img src="/slike/logo320x80px.png" alt="vDinar - virtual Dinar">
   </div>
  </a>

  <div class="mobilni-alati">
   <a class="mobilni-jezici" href="#" onclick="padajuciJezici(); return false;">
    <img src="/slike/ikone/jezici80px.png" alt="Mobile languages">
   </a>
   <a class="mobilni-meni" href="#" onclick="padajuciMeni(); return false;">
    <img src="/slike/ikone/meni80px.png" alt="Mobile menu">
   </a>
  </div>

  <ul>
   <a href="#about">
    <li>
     About vDinar
    </li>
   <a href="#get-started">
    <li>
     Get started
    </li>
   </a>
   <a href="#download">
    <li>
     Download
    </li>
   </a>
   <a href="#get-dinars">
    <li>
     Get Dinars
    </li>
   </a>
   <li>
    <select name="jezik" onchange="location = this.value;">
     <option value="/">SH</option>
     <option selected value="/en/">EN</option>
     <option value="/it/">IT</option>
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
  <a href="/it/">
   <li>
    Italiano
   </li>
  </a>
 </ul>
 <ul class="padajuci-meni" id="padajuciMeni">
  <a href="#about">
   <li>
    About vDinar
   </li>
  <a href="#get-started">
   <li>
    Get started
   </li>
  </a>
  <a href="#download">
   <li>
    Download
   </li>
  </a>
  <a href="#get-dinars">
   <li>
    Get Dinars
   </li>
  </a>
 </ul>

 <div class="prezentacija">
  <div class="naslov">
   <h1>The most convenient online currency</h1>
   <h2>A digital bridge for former Yugoslavia</h2>
   <div class="dugmad">
    <a class="dugme" href="#about">
     <div>
      Introduction
     </div>
    </a>
    <a class="dugme" href="#download">
     <div>
      Wallet
     </div>
    </a>
    <a class="dugme" href="#get-dinars">
     <div>
      Get Dinars
     </div>
    </a>
   </div>
  </div>
 </div>

 <div class="traka-donacija">
  <div class="pozadina">
   <div class="traka">
    <p class="opis">&#8625; 2% held for donations &rarr;
    <?php
     $donacije = file_get_contents("https://svarog.jugoslaven.com/?page=api&action=getblockcount&api_key=780e43ba0383e8e7edeb6777dd4fb89f8d15be66a85aef4067d3bc9b78d85480");
     $donacije = json_decode($donacije);
     $donacije = $donacije->getblockcount->data;
     echo("<font class=\"zeleno\"><b>");
      echo($donacije);
    ?>
    VDN</b></font> ready for donations</p>
    <div class="postotak">
     <div class="punjenje">

     </div>
     <p class="veza">98% earned by users</p>
    </div>
   </div>
  </div>
 </div>

 <!-- Kraj glavne stranice --!>

 <div class="o-projektu" id="about">
  <div class="panel">
   <h2>What is virtual Dinar?</h2>
   <p>Virtual Dinar is a digital, decentralized payment system where every user automatically verifies with his own wallet, a program running
      on his computer, all the transactions and balances coming from other users: owners of a virtual Dinar digital wallet can receive and
      send money with no banks or third parties, directly from their computer or mobile device!</p>
  </div>

  <div class="panel">
   <h2>What is a wallet?</h2>
   <p>A wallet is virtual Dinar's main program, automatically requesting every information from the web and checking it for you, to let you
      know balances and transactions of the whole system. In your wallet you can also see your virtual, public addresses where you will be
      receiving virtual Dinars and from which you can send virtual Dinars on someone else's addresses.</p>
  </div>

  <div class="panel">
   <h2>Where is it available?</h2>
   <p>System rules do not categorize foreign users and local ones and therefore do not imply any borders. Though, virtual Dinar's core
      gathers 2% of newly formed coins for local donations that will be used as a help to people in need from our area, defending the
      project's localization and its social utility!</p>
  </div>

  <div class="rucica">
  </div>
 </div>

 <div class="kako-poceti">
  <h2 id="get-started">Get started</h2>
  <div class="panel">
   <p>First of all you'll need a <b>wallet</b> in order to generate new public digital addresses where you will receive virtual Dinars. By
      obtaining a wallet you'll get access to virtual Dinar's <b>network</b> and you'll be able to notify users about your actions, about your
      <b>transactions</b>. A wallet is a free program you can easily download on every computer.</p>
   <div>
    <div class="slika">
    </div>
    <p>Your wallet doesn't have to be online at all times to let you receive virtual Dinars, as other active users will receive the
       information for you and <b>keep it</b> for you until you reconnect, then they'll finally notify you. It is very important to never lose
       your <b>addresses</b>' passwords held in the wallet by uninstalling it whilst not having copied them somewhere, as your passwords and
       addresses represent your digital <b>identity</b>.</p>
   </div>
  </div>

  <h2 id="download">Download</h2>
  <h3>Choose your computer's operating system</h3>
  <div class="novcanici">
   <div class="windows">
    <div class="logo">
    </div>
    <h3>Windows</h3>
    <p><a href="https://github.com/AndreaDejanGrande/vDinar/releases/download/v2.0/vDinar-2.0-Win32.zip" target="_blank">(Download the
       Windows wallet)</a></p>
   </div>

   <div class="linux">
    <div class="logo">
    </div>
    <h3>Linux</h3>
    <p><a href="https://github.com/AndreaDejanGrande/vDinar/archive/v2.0.tar.gz" target="_blank">(Download
       the source code)</a></p>
   </div>
  </div>
 </div>

 <div class="dobiti-dinare">
  <h2 id="get-dinars">How to get Dinars</h2>
  <h3>As virtual Dinar represents a decentralized system with no main peer who could produce new coins, approximately every 2 and a half minutes
      the whole network rewards users who left their devices on virtual Dinar's service with newly generated money. So, how can you leave
      your computer on the network's service? How can you be rewarded with Dinars?</h3>

  <div class="kopanje">
   <h2>Mining</h2>
   <h3>Mining is a process both representing the network's security and supplying new coins: devices, computers, automatically guessing
       solutions to mathematical problems, will be allowed to choose an address where the newly generated coins will be sent. This
       mathematical problem will update every time someone guesses the solution, so no one can know solutions to future problems. In this
       way the network is proven to rely on calculation power behind all the transactions.</h3>
   <div class="rudari">
    <font class="naslov">Miners</font>
    <div class="pocetnici">
     <font class="opis">For beginners</font>
     <a href="https://github.com/AndreaDejanGrande/Svarog/releases" target="_blank">
      <div class="rudar rudar--cpu">
       <font class="vrsta">CPU</font>
      </div>
     </a>
    </div>
    <div class="napredno">
     <font class="opis">For expert users</font>
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
  <h2>Other ways</h2>
  <h3>You can obtain virtual Dinars the same way you do for any existing currency, by buying them or any other way that could let you have an
      agreement with someone to send you some virtual Dinars in exchange for services or other currencies. For example, you can exchange
      Bitcoin, a different but popular cryptocurrency, for virtual Dinars on our
      <a href="https://voda.network" target="_blank">official exchange website "Voda"</a>.</h3>
 </div>

 <div class="kraj">
  <p class="autorsko-pravo">&copy; Copyright vDinar.info 2018-2019</p>
 </div>
</div>

</body>
</html>
