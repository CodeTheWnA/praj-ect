
			var SCREEN_WIDTH = window.innerWidth,
			SCREEN_HEIGHT = window.innerHeight,

			mouseX = 0, mouseY = 0,

			windowHalfX = window.innerWidth / 2,
			windowHalfY = window.innerHeight / 2,

			camera, scene, renderer;

			init();
			animate();

			function init() {

				var container, separation = 100, amountX = 50, amountY = 50,
				particles, particle;

				container = document.createElement('div');
				container.setAttribute("class","background");
				document.body.appendChild(container);

				camera = new THREE.PerspectiveCamera( 75, SCREEN_WIDTH / SCREEN_HEIGHT, 1, 10000 );
				camera.position.z = 50;

				scene = new THREE.Scene();

				renderer = new THREE.CanvasRenderer({alpha: true});
				renderer.setPixelRatio( window.devicePixelRatio );
				renderer.setSize( SCREEN_WIDTH, SCREEN_HEIGHT );
				container.appendChild( renderer.domElement );
				renderer.setClearColor( 0x000000, 0 );
	
				//particles

				var PI2 = Math.PI / 2;
				var material = new THREE.SpriteCanvasMaterial( {

					color: 0xafafaf,
					program: function ( context ) {

						context.beginPath();
						context.arc( 0, 0, 1.0, 0, PI2, true );
						context.fill();

					}

				} );

				for ( var i = 0; i < 1000; i ++ ) {

					particle = new THREE.Sprite( material );
					particle.position.x = Math.random() * 4 - 2;
					particle.position.y = Math.random() * 4 - 2;
					particle.position.z = Math.random() * 2 - 1;
					particle.position.multiplyScalar( Math.random() * 10 + 450 );
					particle.scale.multiplyScalar( 1.5 );
					scene.add( particle );

				}

			//Large Ring
				//lines

				for (var i = 0; i < 45; i++) {

					var geometry = new THREE.Geometry();

					var vertex = new THREE.Vector3( 45-i,i, 0);
					vertex.normalize();
					vertex.multiplyScalar( 35 );

					geometry.vertices.push( vertex );

					var vertex2 = vertex.clone();
					vertex2.multiplyScalar(1.15); //Math.random() * 0.3 + 1 );
					geometry.vertices.push( vertex2);
					var line = new THREE.Line( geometry, new THREE.LineBasicMaterial( { color: 0xffffff, opacity: 0.4 } ) );
					scene.add( line );

				}
				for (var i = 0; i < 45; i++) {

					var geometry = new THREE.Geometry();

					var vertex = new THREE.Vector3( 45-i,-i, 0);
					vertex.normalize();
					vertex.multiplyScalar( 35 );

					geometry.vertices.push( vertex );

					var vertex2 = vertex.clone();
					vertex2.multiplyScalar(1.15); //Math.random() * 0.3 + 1 );
					geometry.vertices.push( vertex2);
					var line = new THREE.Line( geometry, new THREE.LineBasicMaterial( { color: 0xffffff, opacity: 0.4 } ) );
					scene.add( line );

				}
				for (var i = 0; i < 45; i++) {

					var geometry = new THREE.Geometry();

					var vertex = new THREE.Vector3( -i,45-i, 0);
					vertex.normalize();
					vertex.multiplyScalar( 35 );

					geometry.vertices.push( vertex );

					var vertex2 = vertex.clone();
					vertex2.multiplyScalar(1.15); //Math.random() * 0.3 + 1 );
					geometry.vertices.push( vertex2);
					var line = new THREE.Line( geometry, new THREE.LineBasicMaterial( { color: 0xffffff, opacity: 0.4} ) );
					scene.add( line );

				}
				for (var i = 0; i < 46; i++) {

					var geometry = new THREE.Geometry();

					var vertex = new THREE.Vector3( -(46-i),-i, 0);
					vertex.normalize();
					vertex.multiplyScalar( 35 );

					geometry.vertices.push( vertex );

					var vertex2 = vertex.clone();
					vertex2.multiplyScalar(1.15); //Math.random() * 0.3 + 1 );
					geometry.vertices.push( vertex2);
					var line = new THREE.Line( geometry, new THREE.LineBasicMaterial( { color: 0xffffff, opacity: 0.4} ) );
					scene.add( line );

				}
				//OuterRing
				for (var i = 0; i < 25; i++) {

					var geometry = new THREE.Geometry();

					var vertex = new THREE.Vector3( 25-i,i, 0);
					vertex.normalize();
					vertex.multiplyScalar( 55 );

					geometry.vertices.push( vertex );

					var vertex2 = vertex.clone();
					vertex2.multiplyScalar(1.05); //Math.random() * 0.3 + 1 );
					geometry.vertices.push( vertex2);
					var line = new THREE.Line( geometry, new THREE.LineBasicMaterial( { color: 0xffffff, opacity: 0.25 } ) );
					scene.add( line );

				}
				for (var i = 0; i < 25; i++) {

					var geometry = new THREE.Geometry();

					var vertex = new THREE.Vector3( 25-i,-i, 0);
					vertex.normalize();
					vertex.multiplyScalar( 55 );

					geometry.vertices.push( vertex );

					var vertex2 = vertex.clone();
					vertex2.multiplyScalar(1.05); //Math.random() * 0.3 + 1 );
					geometry.vertices.push( vertex2);
					var line = new THREE.Line( geometry, new THREE.LineBasicMaterial( { color: 0xffffff, opacity: 0.25 } ) );
					scene.add( line );

				}
				for (var i = 0; i < 25; i++) {

					var geometry = new THREE.Geometry();

					var vertex = new THREE.Vector3( -i,25-i, 0);
					vertex.normalize();
					vertex.multiplyScalar( 55 );

					geometry.vertices.push( vertex );

					var vertex2 = vertex.clone();
					vertex2.multiplyScalar(1.05); //Math.random() * 0.3 + 1 );
					geometry.vertices.push( vertex2);
					var line = new THREE.Line( geometry, new THREE.LineBasicMaterial( { color: 0xffffff, opacity: 0.25 } ) );
					scene.add( line );

				}
				for (var i = 0; i < 26; i++) {

					var geometry = new THREE.Geometry();

					var vertex = new THREE.Vector3( -(26-i),-i, 0);
					vertex.normalize();
					vertex.multiplyScalar( 55 );

					geometry.vertices.push( vertex );

					var vertex2 = vertex.clone();
					vertex2.multiplyScalar(1.05); //Math.random() * 0.3 + 1 );
					geometry.vertices.push( vertex2);
					var line = new THREE.Line( geometry, new THREE.LineBasicMaterial( { color: 0xffffff, opacity: 0.25 } ) );
					scene.add( line );

				}
				//
				document.addEventListener( 'mousemove', onDocumentMouseMove, false );
				document.addEventListener( 'touchstart', onDocumentTouchStart, false );
				document.addEventListener( 'touchmove', onDocumentTouchMove, false );

				//

				window.addEventListener( 'resize', onWindowResize, false );

			}

			function onWindowResize() {

				windowHalfX = window.innerWidth / 2;
				windowHalfY = window.innerHeight / 2;

				camera.aspect = window.innerWidth / window.innerHeight;
				camera.updateProjectionMatrix();

				renderer.setSize( window.innerWidth, window.innerHeight );

			}

			//

			function onDocumentMouseMove(event) {

				mouseX = event.clientX - windowHalfX;
				mouseY = event.clientY - windowHalfY;
			}

			function onDocumentTouchStart( event ) {

				if ( event.touches.length > 1 ) {

					event.preventDefault();

					mouseX = event.touches[ 0 ].pageX - windowHalfX;
					mouseY = event.touches[ 0 ].pageY - windowHalfY;

				}

			}

			function onDocumentTouchMove( event ) {

				if ( event.touches.length == 1 ) {

					event.preventDefault();

					mouseX = event.touches[ 0 ].pageX - windowHalfX;
					mouseY = event.touches[ 0 ].pageY - windowHalfY;

				}

			}

			//

			function animate() {
				requestAnimationFrame( animate );
				render();
			}

			function render() {
				if (camera.position.x <= 15 && camera.position.x >= -15) {
					camera.position.x += ( -mouseX+00 - camera.position.x ) * .00025;
				    camera.position.y += ( mouseY-00 - camera.position.y ) * .00001;
				}else{
					camera.position.x -= ( mouseX+00 - camera.position.x ) * .0000125;
				    camera.position.y += ( mouseY-000 - camera.position.y ) * .00001;
				}
				
				camera.lookAt( scene.position );
				renderer.render( scene, camera );
			}
