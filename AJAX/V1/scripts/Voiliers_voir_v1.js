
window.onload = initPage;
	 
function initPage() {
  
	document.getElementById("choix").onchange = afficheSelection;
	

}
function afficheSelection ()	{
	clearContent(document.getElementById("selection"));
	indice = document.getElementById("choix").selectedIndex ;
	nomVoilier = document.getElementById("choix").value ;
	document.getElementById("selection").appendChild ( document.createTextNode (indice + 1 + " - " + nomVoilier));
		 
 
} //afficheSelection ()
	 
function clearContent(element){
	while(element.childNodes.length != 0)
		element.removeChild(element.childNodes[0]);
}