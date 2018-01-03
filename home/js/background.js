
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
				camera.position.z = 1000;

				scene = new THREE.Scene();

				renderer = new THREE.CanvasRenderer();
				renderer.setPixelRatio( window.devicePixelRatio );
				renderer.setSize( SCREEN_WIDTH, SCREEN_HEIGHT );
				container.appendChild( renderer.domElement );
				renderer.setClearColor( 0xf8f8f8, 1 );

				//particles

				var PI2 = Math.PI / 2;
				var material = new THREE.SpriteCanvasMaterial( {

					color: 0x999999,
					program: function ( context ) {

						context.beginPath();
						context.arc( 0, 0, 1.2, 0, PI2, true );
						context.fill();

					}

				} );

				for ( var i = 0; i < 1000; i ++ ) {

					particle = new THREE.Sprite( material );
					particle.position.x = Math.random() * 6 - 3;
					particle.position.y = Math.random() * 6 - 3;
					particle.position.z = Math.random() * 2 - 1;
					particle.position.multiplyScalar( Math.random() * 10 + 450 );
					particle.scale.multiplyScalar( 2 );
					scene.add( particle );

				}

				//lines

				for (var i = 0; i < 45; i++) {

					var geometry = new THREE.Geometry();

					var vertex = new THREE.Vector3( 45-i,i, 0);
					vertex.normalize();
					vertex.multiplyScalar( 550 );

					geometry.vertices.push( vertex );

					var vertex2 = vertex.clone();
					vertex2.multiplyScalar(1.25); //Math.random() * 0.3 + 1 );
					geometry.vertices.push( vertex2);
					var line = new THREE.Line( geometry, new THREE.LineBasicMaterial( { color: 0x111111, opacity: 0.35 } ) );
					scene.add( line );

				}
				for (var i = 0; i < 45; i++) {

					var geometry = new THREE.Geometry();

					var vertex = new THREE.Vector3( 45-i,-i, 0);
					vertex.normalize();
					vertex.multiplyScalar( 550 );

					geometry.vertices.push( vertex );

					var vertex2 = vertex.clone();
					vertex2.multiplyScalar(1.25); //Math.random() * 0.3 + 1 );
					geometry.vertices.push( vertex2);
					var line = new THREE.Line( geometry, new THREE.LineBasicMaterial( { color: 0x111111, opacity: 0.35 } ) );
					scene.add( line );

				}
				for (var i = 0; i < 45; i++) {

					var geometry = new THREE.Geometry();

					var vertex = new THREE.Vector3( -i,45-i, 0);
					vertex.normalize();
					vertex.multiplyScalar( 550 );

					geometry.vertices.push( vertex );

					var vertex2 = vertex.clone();
					vertex2.multiplyScalar(1.25); //Math.random() * 0.3 + 1 );
					geometry.vertices.push( vertex2);
					var line = new THREE.Line( geometry, new THREE.LineBasicMaterial( { color: 0x111111, opacity: 0.35 } ) );
					scene.add( line );

				}
				for (var i = 0; i < 46; i++) {

					var geometry = new THREE.Geometry();

					var vertex = new THREE.Vector3( -(45-i),-i, 0);
					vertex.normalize();
					vertex.multiplyScalar( 550 );

					geometry.vertices.push( vertex );

					var vertex2 = vertex.clone();
					vertex2.multiplyScalar(1.25); //Math.random() * 0.3 + 1 );
					geometry.vertices.push( vertex2);
					var line = new THREE.Line( geometry, new THREE.LineBasicMaterial( { color: 0x111111, opacity: 0.35 } ) );
					scene.add( line );

				}
				//Large Ring
				//lines

				for (var i = 0; i < 90; i++) {

					var geometry = new THREE.Geometry();

					var vertex = new THREE.Vector3( 90-i,i, 0);
					vertex.normalize();
					vertex.multiplyScalar( 800 );

					geometry.vertices.push( vertex );

					var vertex2 = vertex.clone();
					vertex2.multiplyScalar(1.12); //Math.random() * 0.3 + 1 );
					geometry.vertices.push( vertex2);
					var line = new THREE.Line( geometry, new THREE.LineBasicMaterial( { color: 0x111111, opacity: 0.25 } ) );
					scene.add( line );

				}
				for (var i = 0; i < 90; i++) {

					var geometry = new THREE.Geometry();

					var vertex = new THREE.Vector3( 90-i,-i, 0);
					vertex.normalize();
					vertex.multiplyScalar( 800 );

					geometry.vertices.push( vertex );

					var vertex2 = vertex.clone();
					vertex2.multiplyScalar(1.12); //Math.random() * 0.3 + 1 );
					geometry.vertices.push( vertex2);
					var line = new THREE.Line( geometry, new THREE.LineBasicMaterial( { color: 0x111111, opacity: 0.25 } ) );
					scene.add( line );

				}
				for (var i = 0; i < 90; i++) {

					var geometry = new THREE.Geometry();

					var vertex = new THREE.Vector3( -i,90-i, 0);
					vertex.normalize();
					vertex.multiplyScalar( 800 );

					geometry.vertices.push( vertex );

					var vertex2 = vertex.clone();
					vertex2.multiplyScalar(1.12); //Math.random() * 0.3 + 1 );
					geometry.vertices.push( vertex2);
					var line = new THREE.Line( geometry, new THREE.LineBasicMaterial( { color: 0x111111, opacity: 0.25} ) );
					scene.add( line );

				}
				for (var i = 0; i < 90; i++) {

					var geometry = new THREE.Geometry();

					var vertex = new THREE.Vector3( -(90-i),-i, 0);
					vertex.normalize();
					vertex.multiplyScalar( 800 );

					geometry.vertices.push( vertex );

					var vertex2 = vertex.clone();
					vertex2.multiplyScalar(1.12); //Math.random() * 0.3 + 1 );
					geometry.vertices.push( vertex2);
					var line = new THREE.Line( geometry, new THREE.LineBasicMaterial( { color: 0x111111, opacity: 0.25 } ) );
					scene.add( line );

				}

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

				camera.position.x += ( -mouseX+10 - camera.position.x ) * .05;
				camera.position.y += ( mouseY-10 - camera.position.y ) * .005;
				camera.lookAt( scene.position );

				renderer.render( scene, camera );

			}
