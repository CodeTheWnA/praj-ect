<!DOCTYPE html>
<html>
<head>
	<title>Prajwalan 18 | Central India's Largest Technical Festival</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="prajwalan, techfest, prajwln, prajwalan18, prajwalan 2018, 2018 technical fest, tech2018, prajwalan17, prajwalan 2017, 2017 technical fest, tech2017,prajwalan16, prajwalan 2016, 2016 technical fest, tech2015, prajwalan15, prajwalan14, prajwalan XIV, prajwalan XV, praj, prjln, government, college, engineering, amravati, amt, techfest, technical festival, GCOEA, Government College of Engineering Amravati,website, college of engineering, Amravati">
	<meta name="author" content="Prajwalan, GCOEA, Government College of Engineering, Amravati">
	<link rel="icon" type="img/icon" href="common/images/favicon.ico"/>

	<link href="https://use.fontawesome.com/releases/v5.0.2/css/all.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="common/header-footer/header/header.css">
	<link rel="stylesheet" type="text/css" href="home/css/home.css">
	<link rel="stylesheet" type="text/css" href="common/header-footer/footer/footer.css">
	
	<link rel="stylesheet" type="text/css" href="common/header-footer/header/headerResponsive.css">
	<link rel="stylesheet" type="text/css" href="home/css/homeResponsive.css">
	<link rel="stylesheet" type="text/css" href="common/header-footer/footer/footerResponsive.css">
	<link rel="stylesheet" type="text/css" href="common/header-footer/header/sidebarResponsive.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.6/typed.min.js"></script>
</head>
<body>
	<?php 
        include'common/header-footer/header/header.php'; 
        include'common/header-footer/header/sidebar.php';
    ?>
	<script src="common/js/three.min.js"></script>
	<script src="common/js/Projector.js"></script>
	<script src="common/js/CanvasRenderer.js"></script>
	<script src="home/js/background2.js"></script>

	<div class="midData row blur">
		<div class="left wid-25">
			<div class="wid-100 noticeBoard">
				<div id="wrapperNotice"></div>
				<script src="home/js/notice-writer.js"></script>
				<p class="displayer">
					<i class="far fa-bell"></i>&nbsp;&nbsp;NOTICES
				</p>
			</div>
		</div>

		<div class="wid-40 mainNavigation" id="mainNavigation">
			<div class="circle">
				<li class="menu-item" style="transform: rotateZ(0deg);"><a href="" class="link-color txt-color" ><i class="fas fa-calendar-alt"></i>EVENTS</a></li>
				<li class="menu-item" style="transform: rotateZ(60deg);"><a href="" class="link-color txt-color" ><i class="fas fa-cogs"></i>WORKSHOPS</a></li>
				<li class="menu-item" style="transform: rotateZ(120deg);"><a href="" class="link-color txt-color" ><i class="fas fa-handshake"></i>SPONSORS</a></li>	
				<li class="menu-item" style="transform: rotateZ(180deg);"><a href="" class="link-color txt-color" ><i class="fas fa-images"></i>GALLERY</a></li>
				<li class="menu-item" style="transform: rotateZ(240deg);"><a href="" class="link-color txt-color" ><i class="fas fa-users"></i>CONTACT US</a></li>	
				<li class="menu-item" style="transform: rotateZ(300deg);"><a href="" class="link-color txt-color" ><i class="fas fa-info-circle"></i>ABOUT US</a></li>
			</div>
			<script src="home/js/rotateNavigation.js"></script>
		</div>
		<div class="right wid-25">
			<div class="wid-100 updateBoard">
				<div id="wrapperUpdate"></div>
				<script src="home/js/update-writer.js"></script>
				<p class="displayer updateButton">
					<i class="fas fa-bullhorn"></i>&nbsp;&nbsp;UPDATES
				</p>
			</div>
		</div>
	</div>
	<?php 
		include('common/header-footer/footer/footer.php');
	?>
</body>
</html>