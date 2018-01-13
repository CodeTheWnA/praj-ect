<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
		<title>Prajwalan 18 | About Us</title>
        <link rel="icon" type="img/icon" href="common/images/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="about/css/about_us.css">
        <link rel="stylesheet" type="text/css" href="about/css/about_us_responsive.css">
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
        <style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background: url(home/images/themeBg.jpg);
		}
		.colgLogo img {
		    margin: 0.55rem 1.3rem;
		    height: 100%;
		}
		.prajLogo img {
		    left: 1.4rem;
		}
		.prajLogo img {
		    left: 1.4rem;
		}
		#typed{
			color:#fff;
		}
		strong{
			color: #02dd83;
		}	
		.notice, .update {
		    background-color: #00000010;
		}
		.notice span, .update span{
			color: white;
			font-weight: 500;
		}
		.footer a{
			color: #ffffffd1;
		}
	</style>
	</head>
	<body>
		<script src="contact/js/three.js"></script>
		<script src="contact/js/libs/tween.min.js"></script>
		<script src="contact/js/controls/TrackballControls.js"></script>
		<script src="contact/js/renderers/CSS3DRenderer.js"></script>
        <?php 
        include'common/header-footer/header/header.php'; 
        include'common/header-footer/header/sidebar.php';
    ?>
		<div id="container"></div>

		

		<script>
			
			var camera, scene, renderer;
			var controls;
			var objects = [];
			var targets = {  grid: [],  };
			init();
			animate();
			function init() {
				camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 1, 5000 );
				camera.position.z = 600;
                camera.position.x = 50;
                camera.position.y = 0;
				scene = new THREE.Scene();
				// table
				for ( var i = 0; i < 1; i++  ) {
                    var object;
					var element = document.createElement( 'div' );
                    element.className = 'element';
                    element.style.backgroundColor = 'rgba(0,127,127,' + (  0.05 ) + ')';
                    var symbol = document.createElement( 'div' );
                    symbol.className = 'symbol';
                    
                    
                        symbol.innerHTML = "<p class='para'>&nbsp &nbsp &nbsp &nbsp &nbsp PRAJWALAN is the annual scientific and techive festival of Government College of Engineering, Amravati. PRAJWALAN was started in 2006 with the aim to provide technical awareness among students and develop a platform for the technocrats to showcase their talent. It has now become the National level technical festival of India with a footfall of around 15,000+ students from all over Maharashtra.<p class='para'>&nbsp &nbsp &nbsp &nbsp &nbsp PRAJWALAN is a two day festive event held in the month of March at Government College of Engineering, Amravati which attracts people all over Maharashtra and Vidarbha including students academia, corporates and the general public.<p class='para'>&nbsp &nbsp &nbsp &nbsp &nbsp The first edition of PRAJWALAN was is 2006 to ignite the minds of students and engineers. New events were launched in first edition. In its early editions the fund to conduct the event was completely provided by the Institute.";
                    element.appendChild( symbol );
                    
                    var heading = document.createElement( 'div' );
                    heading.className = 'details';
                    heading.innerHTML = "<h1><u><span>About Us</span><u></h1>";
                    element.appendChild( heading );
                    
                        object = new THREE.CSS3DObject( element );
					   object.position.x = Math.random() * 4000 - 2000;
					   object.position.y = Math.random() * 4000 - 2000;
					   object.position.z = Math.random() * 4000 - 2000;
                        
					
                    
                    
					
					
					scene.add( object );
					objects.push( object );
					//
					
				}
				// sphere
				
				// helix
				for ( var i = 0; i < objects.length; i ++ ) {
                    
					var object = new THREE.Object3D();
                    object.position.x = 0;
					object.position.y = 90;
					object.position.z = 0;
                    
                    
					
                    
					targets.grid.push( object );
                    
                    

				}
				
				//
				renderer = new THREE.CSS3DRenderer();
				renderer.setSize( window.innerWidth, window.innerHeight );
				renderer.domElement.style.position = 'absolute';
				document.getElementById( 'container' ).appendChild( renderer.domElement );
				//
				controls = new THREE.TrackballControls( camera, renderer.domElement );
				controls.rotateSpeed = 0.5;
				controls.addEventListener( 'change', render );
				
				
				transform( targets.grid, 2000 );
				//
				window.addEventListener( 'resize', onWindowResize, false );
			}
			function transform( targets, duration ) {
				TWEEN.removeAll();
				for ( var i = 0; i < objects.length; i ++ ) {
					var object = objects[ i ];
					var target = targets[ i ];
					new TWEEN.Tween( object.position )
						.to( { x: target.position.x, y: target.position.y, z: target.position.z }, Math.random() * duration + duration )
						.easing( TWEEN.Easing.Exponential.InOut )
						.start();
					new TWEEN.Tween( object.rotation )
						.to( { x: target.rotation.x, y: target.rotation.y, z: target.rotation.z }, Math.random() * duration + duration )
						.easing( TWEEN.Easing.Exponential.InOut )
						.start();
				}
				new TWEEN.Tween( this )
					.to( {}, duration * 2 )
					.onUpdate( render )
					.start();
                
                
			}
			function onWindowResize() {
				camera.aspect = window.innerWidth / window.innerHeight;
				camera.updateProjectionMatrix();
				renderer.setSize( window.innerWidth, window.innerHeight );
				render();
			}
			function animate() {
				requestAnimationFrame( animate );
				TWEEN.update();
				controls.update();
			}
			function render() {
				renderer.render( scene, camera );
			}
            
            
            
		</script>
        <script>
            
        </script>
        <?php 
		include('common/header-footer/footer/footer.php');
	?>
	</body>
</html>