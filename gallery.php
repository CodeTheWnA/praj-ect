<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
		<title>three.js css3d - periodic table</title>
        <link rel="stylesheet" type="text/css" href="gallery/css/gallery.css">
	</head>
	<body>
		<script src="contact/js/three.js"></script>
		<script src="contact/js/libs/tween.min.js"></script>
		<script src="contact/js/controls/TrackballControls.js"></script>
		<script src="contact/js/renderers/CSS3DRenderer.js"></script>
        <img src="contact/img/background3.jpeg" class="background">
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
				scene = new THREE.Scene();
				// table
				for ( var i = 0; i < 11; i++  ) {
                    var object;
					var element = document.createElement( 'img' );
                    if(i==10){
                        element.className = 'big_img';
                        element.src = "gallery/img/"+5+".jpg"
                        object = new THREE.CSS3DObject( element );
					   object.position.y = -5000;
					   
                    }
                    else{
                        element.className = 'element';
                        element.src = "gallery/img/"+i+".jpg"
                        object = new THREE.CSS3DObject( element );
					   object.position.x = Math.random() * 4000 - 2000;
					   object.position.y = Math.random() * 4000 - 2000;
					   object.position.z = Math.random() * 4000 - 2000;
                    }
                        
					
                    
                    
					
					
					scene.add( object );
					objects.push( object );
					//
					
				}
				// sphere
				
				// helix
				var vector = new THREE.Vector3();
				for ( var i = 0, l = objects.length; i < l; i ++ ) {
					var phi = i * 0.575 + Math.PI;
					var object = new THREE.Object3D();
                    if(i==objects.length-1){
                        object.position.y = -5000 ;
                    }
                    else{
                        object.position.x = 900 * Math.sin( phi );
                        object.position.y = - ( i * 32 ) + 150;
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
                    if(i==objects.length-1){
                        object.position.z = 100 ;
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
				renderer.setSize( window.innerWidth, window.innerHeight );
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
            
            
            var elements = document.getElementsByClassName("element");
            var big_img = document.getElementsByClassName("big_img")[0];
            var back = document.getElementById("back");
            var img;
            for(var i = 0; i < elements.length ; i++){
                elements[i].addEventListener('click', onEleClick , false);
            }
            back.addEventListener('click', backClick, false);
            function onEleClick(event){
                big_img.src = this.src;
                transform( targets.helix1, 3000 );
                back.style.display = 'block';
                
                setTimeout(camera_update,2500);
                
                
            }
            function backClick(){
                
                transform( targets.helix, 2000 );
                back.style.display = 'none';
            }
            
            function camera_update(){
                camera.position.x = 0;
                camera.position.y = 0;
                camera.position.z = 1500;
            }
		</script>
        <script>
            
        </script>
	</body>
</html>