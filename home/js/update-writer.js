var updateString = [ "  Congratulations to all the overall conveners and co-conveners, Prajwalan 18.  ","  Congratulations to all the conveners and co-conveners of core committees, Prajwalan 18.  ","  Congratulations to all the members of core committees, Prajwalan 18  " ];
var elementUpdate = document.getElementById("wrapperUpdate");
var j = 0;
function typeUpdate(){
	//check screen size and implement
	
	//create Update child and append it.
	var update = document.createElement("div");
	update.setAttribute("class","update");
	elementUpdate.appendChild(update);
		
	//create span into Update and append it to Update.
	var updateContent = document.createElement("span");
	updateContent.setAttribute("id","typedUpdate"+j);
	update.appendChild(updateContent);

	//call typewriter
	var typed = new Typed("#typedUpdate"+j, {
	  strings: [
	    updateString[j]
	  ],
	  typeSpeed: 10,
	  startDelay: 1000
	});

	//increment i
	j++;

	//call typeUpdate() to write next string after some delay.
	if(j < updateString.length) {
		setTimeout( typeUpdate, 8000);
	}
}