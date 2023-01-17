let but = document.getElementById('button');
function addone()
{	
   let comp=document.getElementById("compteur").innerHTML ;
   comp++;
   document.getElementById("compteur").innerHTML = comp ;
 }
 but.addEventListener("click", addone);