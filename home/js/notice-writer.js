var noticeString = [ "Applications are invited for the interview of conveners and co-convener for core committees of Prajwalan 18.","Applications are invited for members of core committees for Prajwalan 18." ];
var i =0;
var elementNotice = document.getElementById("wrapperNotice");
$(document).ready(function(){
	//call typeNotice
	typeNotice();
	typeUpdate();
});

function typeNotice(){
	//create notice child and append it.
	var notice = document.createElement("div");
	notice.setAttribute("class","notice");
	elementNotice.appendChild(notice);
		
	//create span into notice and append it to notice.
	var noticeContent = document.createElement("span");
	noticeContent.setAttribute("id","typedNotice"+i);
	notice.appendChild(noticeContent);

	//call typewriter
	var typed = new Typed("#typedNotice"+i, {
	  strings: [
	    noticeString[i]
	  ],
	  typeSpeed: 10,
	  startDelay: 1000
	});

	//increment i
	i++;

	//call typeNotice() to write next string after some delay.
	if(i < noticeString.length) {
		setTimeout( typeNotice, 12500);
	}
}
