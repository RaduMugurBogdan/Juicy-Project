function onHoverNav(myObject){
	document.getElementById("detailed_list").innerHTML='<div id="myContent"></div>';
	document.getElementById("myContent").backgroundImage="linear-gradient(rgba(128, 128, 128,0.5),rgba(0,0,0,0.5),rgba(0,0,0,0.5))";
	if(myObject.id=="rubrica_1"){
		document.getElementById("myContent").innerHTML="<ul><li>Coca-Cola</li><li>Fanta</li><li>Sprite</li><li>Pepsi</li></ul>";
		document.getElementById("myContent").style.color="white";	
	}
	if(myObject.id=="rubrica_2"){
		document.getElementById("myContent").innerHTML="<ul><li>Schweppes</li><li>Lamb&Watt</li><li>Evervess</li></ul>";
		document.getElementById("myContent").style.color="white";	
	}

	if(myObject.id=="rubrica_3"){
		document.getElementById("myContent").innerHTML="<ul><li>Prigat</li><li>Capy</li><li>Giusto</li><li>Aloe</li><li>Tymbark</li><li>Ciao</li></ul>";
		document.getElementById("myContent").style.color="white";	
	}
	if(myObject.id=="rubrica_4"){
		document.getElementById("myContent").innerHTML="<ul><li>RedBull</li><li>Hell</li><li>MaxSpeed</li><li>Burn</li><li>Tiger</li></ul>";
		document.getElementById("myContent").style.color="white";	
	}
}
function onOutGeneral(myObject){
	document.getElementById("detailed_list").innerHTML='<div id="slideShowContainer"></div>';
}



var innerContent;
function fullScreenImage(myObject){
	innerContent=document.getElementById("general_content").innerHTML;
	document.getElementById("general_content").innerHTML="";
	document.getElementById("general_content").innerHTML='<div id="first_layer" onclick="closeViewScreen(this)"><div="second_layer"><img src='+myObject.src+'></div></div><script src="../SCRIPT/CLIENT_SIDE/mainScript.js"></script>';
}
function closeViewScreen(myObject){
	document.getElementById("general_content").innerHTML=innerContent;
}








var pred_def_rev="<ul><li>Produs Original Coca-Cola</li><li>Tip:fara-zahar</li><li>Cantitate 0.5l</li></ul>";
document.getElementById("reviews_body").innerHTML=pred_def_rev;


function setReviewsBody(myObject){
	document.getElementById("reviews_body").innerHTML=pred_def_rev;
}
function setReviewsBody2(myObject){
	document.getElementById("reviews_body").innerHTML="<p>Bautura carbogazoasa ce marca Coca-cola</p><p>Bautura nu este sugerata bolnavilor de diabet</p><p>Acest produs poate fi achizitionat in pachete de 8 ,16 sau 24 de sticle</p>"
}