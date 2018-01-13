var deg = -90; 
rotateNav();
function rotateNav(){
	document.getElementById('mainNavigation').style.transform = "rotate("+deg+"deg)"; 
	document.getElementById('mainNavigation').style.transition = "1s linear"; 
	deg+=60;
	if(deg != 0){
		setTimeout( rotateNav, 3000);
	}	
}
VanillaTilt.init(document.querySelector(".mainNavigation"), {
	reverse: true,
	max: 20,
	speed: 50,
	axis: "x",
	easing: "ease-in-out"
});
