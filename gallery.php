<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
		<title>Prajwalan 18 | Gallery</title>
        <link rel="icon" type="img/icon" href="common/images/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="gallery/css/gallery.css">
        <link rel="stylesheet" type="text/css" href="gallery/css/gallery_responsive.css">
        <link href="https://use.fontawesome.com/releases/v5.0.2/css/all.css" rel="stylesheet">
	   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="common/header-footer/header/header.css">
        <link rel="stylesheet" type="text/css" href="common/header-footer/header/headerResponsive.css">
        <link rel="stylesheet" type="text/css" href="common/header-footer/footer/footer.css">
        <link rel="stylesheet" type="text/css" href="common/header-footer/footer/footerResponsive.css">
        <link rel="stylesheet" type="text/css" href="common/header-footer/header/sidebarResponsive.css">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        
        <style type="text/css">
		body{
			margin: 0;
			padding: 0;
			
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
        <?php include 'common/header-footer/header/header.php'?>
        <?php include 'common/header-footer/header/sidebar.php'?>
		<script src="gallery/js/three.js"></script>
		<script src="gallery/js/libs/tween.min.js"></script>
		<script src="gallery/js/controls/TrackballControls.js"></script>
		<script src="gallery/js/renderers/CSS3DRenderer.js"></script>
        <script src="common/header-footer/header/sidebar.js"></script>
        
		<div id="container"></div>

		<div id="menu">
			<!--<button id="table">TABLE</button>-->
			
			
            <button id="back">BACK</button>
		</div>

		<script>
			
			var camera, scene, renderer;
			var controls;
			var objects = [];
			var targets = {  helix: [], helix1: [] };
			init();
			animate();
			function init() {
				camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 1, 5000 );
				camera.position.z = 1500;
                camera.position.y = -100;
				scene = new THREE.Scene();
				// table
				for ( var i = 0; i < 26 ; i++  ) {
                    var object;
					var element = document.createElement( 'img' );
                    if(i==25){
                        element.className = 'big_img';
                        element.src = "gallery/img/"+5+".jpg"
                        object = new THREE.CSS3DObject( element );
					   object.position.y = -5000;
					   
                    }
                    
                    else{
                        element.className = 'element';
                        element.src = "gallery/img/"+(i+1)+".jpg"
                        object = new THREE.CSS3DObject( element );
					   object.position.x = Math.random() * 4000 - 2000;
					   object.position.y = Math.random() * 4000 - 2000;
					   object.position.z = Math.random() * 4000 - 2000;
                    }
         
					scene.add( object );
					objects.push( object );
					//
					
				}
				
				var vector = new THREE.Vector3();
				for ( var i = 0, l = objects.length; i < l; i ++ ) {
					var phi = i * 0.575 + Math.PI;
					var object = new THREE.Object3D();
                    if(i>=objects.length-1){
                        object.position.y = -5000 ;
                    }
                    else{
                        object.position.x = 900 * Math.sin( phi );
                        object.position.y = - ( i * 27 ) + 150;
                        object.position.z = 900 * Math.cos( phi );
                        vector.x = object.position.x * 2;
                        vector.y = object.position.y;
                        vector.z = object.position.z * 2;
                        object.lookAt( vector );
                    }
					
					
					targets.helix.push( object );
				}
				// grid
                var vector1 = new THREE.Vector3();
				for ( var i = 0, l = objects.length; i < l; i ++ ) {
					var phi = i * 0.575 + Math.PI;
					var object = new THREE.Object3D();
                    if(i>=objects.length-1){
                        object.position.z = -900 ;
                        object.position.x = 00 ;
                        object.position.y = -400 ;
                        
                    }
                    else{
                        object.position.x = 900 * Math.sin( phi );
                        object.position.y = - ( i * 32 ) + 450;
                        object.position.z = 900 * Math.cos( phi );
                        vector.x = object.position.x * 2;
                        vector.y = object.position.y;
                        vector.z = object.position.z * 2;
                        object.lookAt( vector );
                        object.position.y = -5000;
                    }
					
					
					targets.helix1.push( object );
				}
				
				//
				renderer = new THREE.CSS3DRenderer();
				renderer.setSize( window.innerWidth, window.innerHeight*1.5 );
				renderer.domElement.style.position = 'absolute';
				document.getElementById( 'container' ).appendChild( renderer.domElement );
				//
				controls = new THREE.TrackballControls( camera, renderer.domElement );
				controls.rotateSpeed = 0.5;
				controls.addEventListener( 'change', render );
				
				
				transform( targets.helix, 2000 );
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
                new TWEEN.Tween( camera.position )
						.to( { x: 0, y: 0, z: 1900}, Math.random() * duration + duration )
						.easing( TWEEN.Easing.Exponential.InOut )
						.start();
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
                renderer.setSize( window.innerWidth, window.innerHeight*1.5 );
				renderer.domElement.style.position = 'absolute';
				document.getElementById( 'container' ).appendChild( renderer.domElement );
			}
			function animate() {
				requestAnimationFrame( animate );
				TWEEN.update();
				controls.update();
			}
			function render() {
				renderer.render( scene, camera );
			}
            
            
            var elements = document.getElementsByClassName("element");
            var big_img = document.getElementsByClassName("big_img")[0];
            var back = document.getElementById("back");
            var nav = document.getElementsByClassName("nav_img");
            var img;
            for(var i = 0; i < elements.length ; i++){
                elements[i].addEventListener('click', onEleClick , false);
            }
            back.addEventListener('click', backClick, false);
            //for(var i=0;i<2;i++)
                //nav[i].addEventListener('click', navClick, false);
            function onEleClick(event){
                big_img.src = (this).src;
                transform( targets.helix1, 2500 );
                back.style.display = 'block';
            }
            function backClick(){
                transform( targets.helix, 1000 );
                back.style.display = 'none';
            }
            
		</script>
        <script>
           
        </script>
         <?php include 'common/header-footer/footer/footer.php' ?>
	</body>
</html>