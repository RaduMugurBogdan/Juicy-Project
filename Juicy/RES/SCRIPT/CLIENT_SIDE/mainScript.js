function onHoverNav(myObject){
	document.getElementById("detailed_list").innerHTML='<div id="myContent"></div>';
	document.getElementById("myContent").backgroundImage="linear-gradient(rgba(128, 128, 128,0.5),rgba(0,0,0,0.5),rgba(0,0,0,0.5))";
	if(myObject.innerHTML=="RUBRICA 1"){
		document.getElementById("myContent").innerHTML="<ul><li>RUBRICA 1</li><li>sucuri acidulate</li><li>sucuri dietetice</li></ul>";
		document.getElementById("myContent").style.color="white";	
	}
	if(myObject.innerHTML=="RUBRICA 2"){
		document.getElementById("myContent").innerHTML="<ul><li>RUBRICA 2</li><li>sucuri acidulate</li><li>sucuri dietetice</li></ul>";
		document.getElementById("myContent").style.color="white";	
	}

	if(myObject.innerHTML=="RUBRICA 3"){
		document.getElementById("myContent").innerHTML="<ul><li>RUBRICA 3</li><li>sucuri acidulate</li><li>sucuri dietetice</li><li>sucuri acidulate</li><li>sucuri dietetice</li><li>sucuri acidulate</li><li>sucuri dietetice</li></ul>";
		document.getElementById("myContent").style.color="white";	
	}
	if(myObject.innerHTML=="RUBRICA 4"){
		document.getElementById("myContent").innerHTML="<ul><li>RUBRICA 4</li><li>sucuri acidulate</li><li>sucuri dietetice</li></ul>";
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




function setReviewsBody(myObject){
	document.getElementById("reviews_body").innerHTML="<ul><li>RUBRICA 3</li><li>sucuri acidulate</li><li>sucuri dietetice</li><li>sucuri acidulate</li><li>sucuri dietetice</li><li>sucuri acidulate</li><li>sucuri dietetice</li></ul>";
}