
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
				container.setAttribute("class","background blur");

				document.body.appendChild(container);

				camera = new THREE.PerspectiveCamera( 75, SCREEN_WIDTH / SCREEN_HEIGHT, 1, 10000 );
				camera.position.z = 25;

				scene = new THREE.Scene();

				renderer = new THREE.CanvasRenderer();
				renderer.setPixelRatio( window.devicePixelRatio );
				renderer.setSize( SCREEN_WIDTH, SCREEN_HEIGHT );
				container.appendChild( renderer.domElement );
				renderer.setClearColor( 0x050505, 1 );

				//particles

				var PI2 = Math.PI / 2;
				var material = new THREE.SpriteCanvasMaterial( {

					color: 0x454545,
					program: function ( context ) {

						context.beginPath();
						context.arc( 0, 0, 1.5, 0, PI2, true );
						context.fill();

					}

				} );

				for ( var i = 0; i < 1500; i ++ ) {

					particle = new THREE.Sprite( material );
					particle.position.x = Math.random()*5 - 3;
					particle.position.y = Math.random()*2 - 1;
					particle.position.z = Math.random()*3 - 1;
					particle.position.multiplyScalar( Math.random() * 10 + 40 );
					particle.scale.multiplyScalar( 0.1 );
					scene.add( particle );

				}
				//texture
				var texture = new THREE.TextureLoader().load( 'home/images/2.png', render );
				texture.wrapS = texture.wrapT = THREE.RepeatWrapping;
				//sphere
				geometry = new THREE.SphereGeometry(25, 25, 25);
				material = new THREE.MeshPhongMaterial({map: texture, flatShading: THREE.FlatShading, color: 0xdcdcdc, emissive: 0x212321, specular: 0xffffff, shininess: 10, side: THREE.DoubleSide});
				mesh = new THREE.Mesh(geometry, material);
				mesh.position.y = -2;
				scene.add(mesh);

				//directionalLight
				//d//irectionalLight = new THREE.DirectionalLight(0xffffff, 0.73);
				//directionalLight.position.set( 0, 1, 0 );
				//directionalLight.castShadow = true;
				//scene.add( directionalLight );
				document.addEventListener( 'mousemove', onDocumentMouseMove, false );
				document.addEventListener( 'touchstart', onDocumentTouchStart, false );
				document.addEventListener( 'touchmove', onDocumentTouchMove, false );

				//

				window.addEventListener( 'resize', onWindowResize, true );

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
				mesh.rotation.y += 0.007;
			}

			function render() {
				camera.position.x += ( -mouseX - camera.position.x ) * .0007;
				camera.position.y += ( mouseY - camera.position.y ) * .0005;
				camera.lookAt( scene.position );
		
				renderer.render( scene, camera );

			}
