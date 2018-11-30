
window.onload = initPage;
	 
function initPage() {
	xhrPeupleChoix= new XMLHttpRequest();
	xhrPeupleChoix.onreadystatechange = callback_peupleChoix;
	xhrPeupleChoix.open("GET", "voiliers.xml");
	xhrPeupleChoix.send();
	
	xhrAfficheChoix = new XMLHttpRequest();
	xhrAfficheChoix.onreadystatechange = callback_afficheChoix;
	xhrAfficheChoix.open("GET", "voiliers.xml");
	xhrAfficheChoix.send();
	
	document.getElementById("choix").onchange = callback_afficheChoix;
	

}
function afficheSelection ()	{
	// indice = document.getElementById("choix").selectedIndex ;
	// descVoilier = xhr
	// nomVoilier = document.getElementById("choix").value ;
	// document.getElementById("selection").appendChild ( document.createTextNode (indice + 1 + " - " + nomVoilier));
		 
 
} //afficheSelection ()

function callback_peupleChoix(url){
	if(xhrPeupleChoix.readyState==4 && xhrPeupleChoix.status==200){
		tabNoms = xhrPeupleChoix.responseXML.getElementsByTagName("nom");
		for(var i=0; i<tabNoms.length; i++){
			nomVoilier = tabNoms[i].firstChild.nodeValue;
			leSelect = document.getElementById("choix");
			noeudOption = document.createElement("option");
			noeudTexte = document.createTextNode(nomVoilier);
			noeudOption.appendChild(noeudTexte);
			leSelect.appendChild(noeudOption);
		}
	}
}


function callback_afficheChoix(url){
	if(xhrAfficheChoix.readyState==4 && xhrAfficheChoix.status==200){
		clearContent(document.getElementById("selection"));
		
		indice = document.getElementById("choix").selectedIndex;
		
		voilier = xhrAfficheChoix.responseXML.getElementsByTagName("voilier")[indice];
		
		nom = xhrAfficheChoix.responseXML.getElementsByTagName("nom")[indice].firstChild.nodeValue;
		
		annee = xhrAfficheChoix.responseXML.getElementsByTagName("annee")[indice].firstChild.nodeValue;
		
		architecte = xhrAfficheChoix.responseXML.getElementsByTagName("architecte")[indice].firstChild.nodeValue;
		
		skipper = xhrAfficheChoix.responseXML.getElementsByTagName("nom_skipper")[indice].firstChild.nodeValue;
		
		texte = xhrAfficheChoix.responseXML.getElementsByTagName("texte")[indice].firstChild.nodeValue;
		
		photoAdresse = voilier.getElementsByTagName("photo")[0].getAttribute("adresse");
		photo = new Image();
		photo.src = photoAdresse;
		
		tabVoilier = [photo, nom, annee, architecte, skipper, texte];
		
		
		table = document.createElement("table");
		table.border="1";
		table.width="75%";
		tBody = document.createElement("TBODY");
		table.appendChild(tBody);

		
		for (var i = 0; i < 6; i++){
			var tr = document.createElement('tr');
			tBody.appendChild(tr);
			var td = document.createElement('td');
			td.width = '75';
			if(i==0)
				td.appendChild(photo);
			else
				td.appendChild(document.createTextNode(tabVoilier[i]));
			tr.appendChild(td);
		}
		
		
		document.getElementById("selection").appendChild(table);	
	}
}
	 

function clearContent(element){
	while(element.childNodes.length != 0)
		element.removeChild(element.childNodes[0]);
}


