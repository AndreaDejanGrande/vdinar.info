var meniOtvoren = false;
var jeziciOtvoreni = false;

function padajuciMeni()
{
 if(!meniOtvoren)
 {
  if(jeziciOtvoreni)
  {
   document.getElementById("padajuciJezici").style.display = "none";
   jeziciOtvoreni = false;
  }

  document.getElementById("padajuciMeni").style.display = "block";
  meniOtvoren = true;
 }
 else
 {
  document.getElementById("padajuciMeni").style.display = "none";
  meniOtvoren = false;
 }
}

function padajuciJezici()
{
 if(!jeziciOtvoreni)
 {
  if(meniOtvoren)
  {
   document.getElementById("padajuciMeni").style.display = "none";
   meniOtvoren = false;
  }

  document.getElementById("padajuciJezici").style.display = "block";
  jeziciOtvoreni = true;
 }
 else
 {
  document.getElementById("padajuciJezici").style.display = "none";
  jeziciOtvoreni = false;
 }
}
