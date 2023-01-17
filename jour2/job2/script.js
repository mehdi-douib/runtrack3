function showhide()

{	let test =document.querySelector("article");
	if(!test)
	{
	let art = document.createElement("article");
 	let texte = document.createTextNode("L'important n'est pas la chute, mais l'atterrissage.");
  	art.appendChild(texte);
  	document.body.appendChild(art);
  }
  else
  {
  	test.remove();
  }
}