<!DOCTYPE html>
<html>
	<head>
		<title>three.js css3d - periodic table</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
        <link rel="stylesheet" type="text/css" href="contact/css/contact.css">
        <link rel="stylesheet" type="text/css" href="contact/css/contact-responsive.css">
		<style>
            canvas{height: 200%;}
		</style>
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
			
			<button id="helix">HELIX</button>
			<button id="grid">GRID</button>
            <button id="back">BACK</button>
		</div>

		<script>
            
            
            
			var table = [
				
				"Publicity", "Aluminium",
				"Outreach", "Lithium", 
				"Event Sponsorship", "Beryllium", 
				"Alumni Sponsorship", "Boron", 
				"Core Sponsorship", "Carbon", 
				"Infrastructure Designing", "Nitrogen", 
                "Overall", "Hydrogen", 
                "Web & App", "Helium", 
				"Audit", "Oxygen", 
				"Alumni Sponsorship", "0",
				"Networking", "Neon", 
				"Core Supporting", "Sodium", 
				"Core Editing", "Magnesium", 
				
                
				"co-Convayner", "Magnesium", 
                "co-Convayner", "Magnesium", 
				"co-Convayner", "Aluminium", 
                "Convayner", "Sodium", 
                "Convayner", "Sodium", 
                "Convayner", "Sodium", 
                "co-Convayner", "Magnesium",
				"co-Convayner", "Aluminium"
                
				
				
			];
            
var overall=[
"Overall Co-Convener","Satyajit KHATKE","+918806722050","contact/img/overall/",
"Co-Convener","Ashwin TIWARI","+918275889497","contact/img/overall/",
"Convener","Mandar Joshi","+918485861033","contact/img/overall/",
"Co-Convener","Rohit JAMNARE","+919404499585","contact/img/overall/",
"Co-Convener","Ambika PANDIT","+919595904501","contact/img/overall/"];

var web=[
"Co-Convener","Hrushikesh Masne","+919665680856","contact/img/Web & App",
"Co-Convener","Nikhil Khandare","+918308492192","contact/img/Web & App",
"Convener","Suved Ghanmode","+917798534854","contact/img/Web & App",
"Co-Convener","Rohit Badge","+919527428120","contact/img/Web & App"];

var core_supporting=["Co-Convener","Chetan VINCHURKAR","+918390581759","contact/img/core supporting",
"Co-Convener","Prajyot FULARI","+918087718077","contact/img/core supporting",
"Convener","Shubham BELE","+917507836595","contact/img/core supporting",
"Convener","Purva AWARE","+917249538277","contact/img/core supporting",
"Co-Convener","Varun Alode","+918380888982","contact/img/core supporting",
"CoConvener","Apurva BEDRE","+919405666711","contact/img/core supporting"];

var core_sponsorship=["Co-Convener","Ameya DESHPANDE","+919689486540","contact/img/core sponsorship",
"Co-Convener","Prashant JADHAO","+917030089840","contact/img/core sponsorship",
"Convener","Amol FULZELE", "+918180812163","contact/img/core sponsorship"]

var event_sponsorship=[
"Co-Convener","Bhushan AGRAWAL","+919403900642","contact/img/event sponsorship",
"Co-Convener","Eshwaree SHINGWEKAR", "+918308089494","contact/img/event sponsorship",
"Convener","Raj Singh BAIS","+919595606030","contact/img/event sponsorship"];

var outreach=[
"Co-Convener","Aachal MUNDEL", "+917385829145","contact/img/outreach",
"Co-Convener","Manthan DIXIT","+919075122465","contact/img/outreach",
"Convener","Shubham NIMBHORKAR","+917249834052","contact/img/outreach",
"Convener","Shreya SAWARKAR","+918007960483","contact/img/outreach",
"Co-Convener","Rutuja GANDHI","+919075277114","contact/img/outreach",
"Co-Convener","Samiksha TAYADE","+918793351418","contact/img/outreach",
"Co-Convener","Noor Sabha QURESHI","+917447327661","contact/img/outreach"];

var publicity=[
"Co-Convener","Dolly JAIN","+919860850186","contact/img/publicity",
"Co-Convener","Harshada INGOLE","+919970908702","contact/img/publicity",
"Convener","Mayuri PURI","+918975572659","contact/img/publicity",
"Convener","Anchal DAGA","+919421787338","contact/img/publicity",
"Co-Convener","Yamin LAKADKUTTA","+918208037225","contact/img/publicity",
"Co-Convener","Manthan FURSULE","+919420622999","contact/img/publicity"];

var core_editing=[
"Co-Convener","Kunal WANIKAR","+918237558082","contact/img/core editing",
"Convener","Pradeep NOKWAL","+919595559431","contact/img/core editing"];

var networking=[
"Co-Convener","Ankit WARJURKAR","+917972361259","contact/img/networking",
"Co-Convener","Rashi NANWANI","+917249391211","contact/img/networking",
"Convener","Gaurav GILALKAR","+919545988746","contact/img/networking",
"Convener","Shiragi PATTALWAR","+919404924112","contact/img/networking",
"Co-Convener","Himanshu SHARMA","+918412027866","contact/img/networking",
"Co-Convener","Namrata GAJBHIYE","+919511962536","contact/img/networking"];

var infra=[
"Co-Convener","Lankesh PUREKAR","+919881996745","contact/img/infrastructure designing",
"Co-Convener","Sharayu DAHAKE","+917798122874","contact/img/infrastructure designing",
"Convener","Tejas CHEDE","+919921299445","contact/img/infrastructure designing",
"Convener","Niraj SONULE","+919637177986","contact/img/infrastructure designing",
"Co-Convener","Sanghal SAHARE","+918485004625","contact/img/infrastructure designing"];

var core_designing=[
"Co-Convener","Mohit LALWANI","+919921066687","contact/img/core designing",
"Co-Convener","Sukhada KULKARNI","+919404107032","contact/img/core designing",
"Convener","Abhishek AGRAWAL","+919028357656","contact/img/core designing",
"Co-Convener","Yash BHANDARWAR","+918411041468","contact/img/core designing"];

var audit=[
"Co-Convener","Pratiksha PARASHAR","+919011827603","contact/img/audit",
"Co-Convener","Rohit CHIMOTE","+919665552911","contact/img/audit",
"Convener","Sanket RATHI","+919970502548","contact/img/audit",
"Co-Convener","Mahima HIRAPURE","+918554853133","contact/img/audit",
"Co-Convener","Yash CHANDAK","+919421181199","contact/img/audit"];

var alumni_sponsorship=[
"Co-Convener","Shweta JOSHI","+918378098121","contact/img/alumni sponsorship",
"Co-Convener","Somnath GHOSH","+919757218288","contact/img/alumni sponsorship",
"Convener","Rajkumar NAIK","+918007379537","contact/img/alumni sponsorship",
"Convener","Nikita GHODE","+919021021549","contact/img/alumni sponsorship"];


			var camera, scene, renderer;
			var controls;

			var objects = [];
			var targets = {  helix: [], helix1: [], grid: [],grid1: [] };
            
            var current_formation;

			init();
			animate();

			function init() {

				camera = new THREE.PerspectiveCamera( 40, window.innerWidth / window.innerHeight, 1, 1000 );
				camera.position.z = 3500;
                if(window.innerHeight<500){
                    camera.position.z = 3000;
                }

				scene = new THREE.Scene();

				// table

				for ( var i = 0; i < table.length; i += 2 ) {

					var element = document.createElement( 'div' );
                    if(i>24){
                        element.className = 'element1';
                        element.style.backgroundColor = 'rgba(0,127,127,' + ( Math.random() * 0.5 + 0.25 ) + ')';
                        
                        var post = document.createElement( 'div' );
                        post.className = 'post';
                        //post.textContent = Web[i-61];
                        element.appendChild(post);
                        
                        var name = document.createElement( 'div' );
                        name.className = 'name';
                        element.appendChild(name);
                        
                        var email = document.createElement( 'div' );
                        email.className = 'email';
                        element.appendChild(email);
                        
                        var number = document.createElement( 'div' );
                        number.className = 'number';
                        element.appendChild(number);
                        
                        var image = document.createElement( 'img' );
                        image.className = 'm_img';
                        //image.src = "contact/img/default-profiel-image.jpg";
                        element.appendChild(image);
                        
                    }
					   
                    else{
                        element.className = 'element';
                        element.style.backgroundColor = 'rgba(0,127,127,' + ( Math.random() * 0.5 + 0.25 ) + ')';

                        

                        var symbol = document.createElement( 'div' );
                        symbol.className = 'symbol';
                        symbol.textContent = table[ i ];
                        element.appendChild( symbol );

                    }
                    

					var object = new THREE.CSS3DObject( element );
					object.position.x = Math.random() * 4000 - 2000;
					object.position.y = Math.random() * 4000 - 2000;
					object.position.z = Math.random() * 4000 - 2000;
					scene.add( object );

					objects.push( object );

					//

					var object = new THREE.Object3D();
					object.position.x = ( table[ i + 3 ] * 700 ) - 1330;
					object.position.y = - ( table[ i + 4 ] * 900 ) + 1100;

					//targets.table.push( object );

				}
                
                
                
				// sphere

				var vector = new THREE.Vector3();
				var spherical = new THREE.Spherical();

				for ( var i = 0, l = objects.length; i < l; i ++ ) {

					var phi = Math.acos( -1 + ( 2 * i ) / l );
					var theta = Math.sqrt( l * Math.PI ) * phi;

					var object = new THREE.Object3D();

					spherical.set( 800, phi, theta );

					object.position.setFromSpherical( spherical );

					vector.copy( object.position ).multiplyScalar( 2 );

					object.lookAt( vector );

					//targets.sphere.push( object );

				}

				// helix

				var vector = new THREE.Vector3();
				var cylindrical = new THREE.Cylindrical();
                
                var innerCylindrical = new THREE.Cylindrical();

				for ( var i = 0, l = objects.length; i < l; i ++ ) {
                    
                    if(i>12){
                        var theta = (i-12) * 1 + Math.PI;
                        var y = - ( (i-12) * 8 ) + 450;

                        var object = new THREE.Object3D();

                        cylindrical.set( 5000, theta, 0 );

                        object.position.setFromCylindrical( cylindrical );

                        vector.x = object.position.x * 2;
                        vector.y = object.position.y;
                        vector.z = object.position.z * 2;
                        
                        object.position.y = 5000;
                        //object.position.z = 500;

                        object.lookAt( vector );

                        targets.helix.push( object );
                    }
                    else{
                        var theta = i * 0.482 + Math.PI;
                        var y = - ( i * 8 ) + 450;

                        var object = new THREE.Object3D();

                        cylindrical.set( 1500, theta, 0 );

                        object.position.setFromCylindrical( cylindrical );

                        vector.x = object.position.x * 2;
                        vector.y = object.position.y;
                        vector.z = object.position.z * 2;

                        object.lookAt( vector );

                        targets.helix.push( object );
                    }
                        
                    
					
                    
                

				}
                
                //helix1
                
                for ( var i = 0, l = objects.length; i < l; i ++ ) {
                    if(i>12){
                        var theta = (i-12) * 0.78 + Math.PI;
                        var y = - ( (i-12) * 8 ) + 450;

                        var object = new THREE.Object3D();

                        cylindrical.set( 700, theta, 0 );

                        object.position.setFromCylindrical( cylindrical );

                        vector.x = object.position.x * 2;
                        vector.y = object.position.y;
                        vector.z = object.position.z * 2;
                        
                        //object.position.z = 500;

                        object.lookAt( vector );

                        targets.helix1.push( object );
                    }
                    
                    else{
                        var theta = i * 0.482 + Math.PI;
                        var y = - ( i * 8 ) + 450;

                        var object = new THREE.Object3D();

                        cylindrical.set( 5000, theta, 0 );

                        object.position.setFromCylindrical( cylindrical );

                        vector.x = object.position.x * 2;
                        vector.y = object.position.y;
                        vector.z = object.position.z * 2;
                        
                        object.lookAt( vector );
                       
                        targets.helix1.push( object );
                    }
					
                    
                

				}

				// grid

				for ( var i = 0; i < objects.length; i ++ ) {
                    
					var object = new THREE.Object3D();
                    object.position.x = ( ( i % 5 ) * 800 ) - 1600;
					object.position.y = ( - ( Math.floor( i / 5 ) % 5 ) * 800 ) + 900;
					object.position.z = ( Math.floor( i / 25 ) ) * 3000 - 700;
                    
                    if(i>12){
                        object.position.x = ( ( (i-13) % 5 ) * 800 ) - 1000;
					   object.position.z =  -2000;
                        object.position.y =  5000;
                    }

                    if(window.innerWidth<750){
                       object.position.x = ( ( i % 4 ) * 650 ) - 1000;
					   object.position.y = ( - ( Math.floor( i / 4 ) % 5 ) * 750 ) + 1050;
					   object.position.z = ( Math.floor( i / 25 ) ) * 3000 - 700;
                        camera.position.z = 4300;

                    }
                    
                    if(window.innerWidth<480){
                       object.position.x = ( ( i % 3 ) * 800 ) - 1200;
					   object.position.y = ( - ( Math.floor( i / 3 ) % 5 ) * 800 ) + 900;
					   object.position.z = ( Math.floor( i / 25 ) ) * 3000 - 700;

                    }
					
                    
					targets.grid.push( object );
                    
                    

				}
                
                //grid1
                for(i=0;i<objects.length;i++){
                    var object = new THREE.Object3D();
                    object.position.x = ( ( i % 5 ) * 800 ) - 1600;
					object.position.y = ( - ( Math.floor( i / 5 ) % 5 ) * 800 ) + 900;
					object.position.z = ( Math.floor( i / 25 ) ) * 3000 + 7000;
                    
                    if(i>12){
                        object.position.x = ( ( (i-13) % 5 ) * 800 ) - 800;
					   object.position.y =  0;
                        object.position.z =  800;
                    }

                    if(window.innerWidth<750){
                       object.position.x = ( ( i % 4 ) * 650 ) - 1000;
					   object.position.y = ( - ( Math.floor( i / 4 ) % 5 ) * 750 ) + 1050;
					   object.position.z = ( Math.floor( i / 25 ) ) * 3000 - 700;
                        camera.position.z = 4300;

                    }
                    
                    if(window.innerWidth<480){
                       object.position.x = ( ( i % 3 ) * 800 ) - 1200;
					   object.position.y = ( - ( Math.floor( i / 3 ) % 5 ) * 800 ) + 900;
					   object.position.z = ( Math.floor( i / 25 ) ) * 3000 - 700;

                    }
                    targets.grid1.push( object );
                }

				//

				renderer = new THREE.CSS3DRenderer();
				renderer.setSize( window.innerWidth, window.innerHeight );
				renderer.domElement.style.position = 'absolute';
				document.getElementById( 'container' ).appendChild( renderer.domElement );

				//

				controls = new THREE.TrackballControls( camera, renderer.domElement );
				controls.rotateSpeed = 0.5;
				controls.minDistance = 500;
				controls.maxDistance = 6000;
				controls.addEventListener( 'change', render );

				//var button = document.getElementById( 'table' );
				/*button.addEventListener( 'click', function ( event ) {

					transform( targets.table, 2000 );

				}, false );*/

				/*var button = document.getElementById( 'sphere' );
				button.addEventListener( 'click', function ( event ) {

					transform( targets.sphere, 2000 );

				}, false );*/
                
				var button = document.getElementById( 'helix' );
				button.addEventListener( 'click', function ( event ) {

					transform( targets.helix, 2000 );
                    current_formation = "helix";

				}, false );

				var button = document.getElementById( 'grid' );
				button.addEventListener( 'click', function ( event ) {

					transform( targets.grid, 2000 );
                    current_formation = "grid";

				}, false );
                /*if(window.innerWidth<500){
                    transform( targets.helix, 2000 );
                    current_formation = "helix";
                }
                else {
                    transform( targets.grid, 2000 );
                    current_formation = "grid";
                }*/
				    
                transform( targets.helix, 2000 );
                current_formation = "helix";
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
            var elements = document.getElementsByClassName("element");
            for(i=0;i<elements.length;i++){
                elements[i].addEventListener( 'click', onclick, false );
            }
            
            var back = document.getElementById("back");
            back.addEventListener('click', backclick, false);
            
            var members = document.getElementsByClassName("element1");
            
            var data = [];        
            function onclick( event ) {
                
                var x;
                    
                    for(var j=0; j<this.childNodes.length;j++){
                        if(this.childNodes[j].className == "symbol"){
                            x = this.childNodes[j].textContent;
                            break;
                        }
                    }
                back.style.display = "block";
                for(var i=0;i<data.length;)
                    data.pop();
                switch (x){
                    case "Web & App":
                        for(var i=0; i< web.length; i++)
                            data.push(web[i]);
                        break;
                    case "Overall":
                        for(var i=0; i< overall.length; i++)
                            data.push(overall[i]);
                        break;
                    case "Outreach":
                        for(var i=0; i< outreach.length; i++)
                            data.push(outreach[i]);
                        break;
                     case "Core Supporting":
                        for(var i=0; i< core_supporting.length; i++)
                            data.push(core_supporting[i]);
                        break;
                    case "Core Sponsorship":
                        for(var i=0; i< core_sponsorship.length; i++)
                            data.push(core_sponsorship[i]);
                        break;
                    case "Event Sponsorship":
                        for(var i=0; i< event_sponsorship.length; i++)
                            data.push(event_sponsorship[i]);
                        break;    
                    case "Publicity":
                        for(var i=0; i< publicity.length; i++)
                            data.push(publicity[i]);
                        break;
                    case "Core Editing":
                        for(var i=0; i< core_editing.length; i++)
                            data.push(core_editing[i]);
                        break;
                    case "Networking":
                        for(var i=0; i< networking.length; i++)
                            data.push(networking[i]);
                        break;
                    case "Infrastructure Designing":
                        for(var i=0; i< infra.length; i++)
                            data.push(infra[i]);
                        break;
                    case "Core Designing":
                        for(var i=0; i< core_designing.length; i++)
                            data.push(core_designing[i]);
                        break;
                    case "Audit":
                        for(var i=0; i< audit.length; i++)
                            data.push(audit[i]);
                        break;
                    case "Alumni Sponsorship":
                        for(var i=0; i< alumni_sponsorship.length; i++)
                            data.push(alumni_sponsorship[i]);
                        break;
                    
                    
                 }
                for(var i=0; i<data.length ; i+=4){
                    if(i/4==7){
                        current_m = members[0];
                    }
                    else
                        current_m = members[i/4+1];
                    current_m.style.display = 'block';
                    var m_name, m_post, m_email, m_number,m_img;
                    for(var j=0; j < current_m.childNodes.length ; j++){
                        if( current_m.childNodes[j].className == 'post')
                            m_post = current_m.childNodes[j];
                        else if(current_m.childNodes[j].className == 'name')
                            m_name = current_m.childNodes[j];
                        else if(current_m.childNodes[j].className == 'email')
                            m_email = current_m.childNodes[j];
                        else if(current_m.childNodes[j].className == 'number')
                            m_number = current_m.childNodes[j];
                        else if(current_m.childNodes[j].className == 'm_img')
                            m_img = current_m.childNodes[j];
                    }
                    m_post.innerHTML = data[i];
                    m_name.innerHTML = data[i+1];
                    
                    m_number.innerHTML = data[i+2];
                    m_img.src = data[i+3];
                }
                transform( targets.helix1, 2000 );
                setTimeout(camera_update,2500);
            }
            
            function backclick( event ){
                if(current_formation == "helix"){
                    transform( targets.helix, 2000 );
                }
                else
                    transform( targets.grid, 2000 );
                setTimeout(hide_members, 2000);
                
                
                
            }
            
            function camera_update(){
                camera.position.x = 0;
                camera.position.y = 0;
                camera.position.z = 3500;
            }
            
            function hide_members(){
                for(var i=0; i<members.length;i++)
                    members[i].style.display = 'none';
                back.style.display = "none";
            }
            
            
            
        
        </script>
	</body>
</html>
