$(document).ready(function(){
    $(".bars").click(function(){
    	$(".sidebar").removeClass("fadeOutLeft");
        $(".sidebar").addClass("fadeInLeft");
        $(".header .prajLogo,.header .prajTxt").addClass("fadeOutLeft");
        $(".logo .prajLogo,.logo .prajTxt").addClass("zoomIn");
        $(".blur").addClass("blurNow");
    });
    $(".close").click(function(){
         $(".blur").removeClass("blurNow");
    	$(".logo .prajLogo,.logo .prajTxt").removeClass("zoomIn");
    	$(".logo .prajLogo,.logo .prajTxt").removeClass("fadeInRight");
    	$(".prajLogo,.prajTxt").removeClass("fadeOutLeft");
    	$(".sidebar").addClass("fadeOutLeft");
        $(".sidebar").removeClass("fadeInLeft");

    });
});