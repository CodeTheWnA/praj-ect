<!DOCTYPE html>
<html>
	<head>
		<title>Prajwalan 18 | Contact Us</title>
		<meta charset="utf-8">
        <link rel="icon" type="img/icon" href="common/images/favicon.ico"/>
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
        <link rel="stylesheet" type="text/css" href="contact/css/contact.css">
        <link rel="stylesheet" type="text/css" href="contact/css/contact-responsive.css">
        <link rel="stylesheet" type="text/css" href="common/header-footer/header/header.css">
	<link href="https://use.fontawesome.com/releases/v5.0.2/css/all.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="common/header-footer/footer/footer.css">
	
	<link rel="stylesheet" type="text/css" href="common/header-footer/header/headerResponsive.css">
	
	<link rel="stylesheet" type="text/css" href="common/header-footer/footer/footerResponsive.css">
	<link rel="stylesheet" type="text/css" href="common/header-footer/header/sidebarResponsive.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.6/typed.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    
		<style>
            canvas{height: 100%;}
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
		<script src="contact/js/three.js"></script>
		<script src="contact/js/libs/tween.min.js"></script>
		<script src="contact/js/controls/TrackballControls.js"></script>
		<script src="contact/js/renderers/CSS3DRenderer.js"></script>
        <script src="common/header-footer/header/sidebar.js"></script>
        
      
        
		<div id="container"></div>
		
        
			<!--<button id="table">TABLE</button>-->
<div id="menu">
			<!--<button id="table">TABLE</button>-->
			
			
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
				"Core Designing", "0",
				"Networking", "Neon", 
				"Core Supporting", "Sodium", 
				"Core Editing", "Magnesium", 
				
                
				"co-Convayner", "Magnesium", 
                "co-Convayner", "Magnesium", 
				"co-Convayner", "Aluminium", 
                "Convayner", "Sodium", 
                "Convayner", "Sodium", 
                "co-Convayner", "Magnesium",
				"co-Convayner", "Aluminium"
                
				
				
			];
            
var overall=[
"Overall Co-Convener","Satyajit KHATKE","+918806722050","contact/img/overall/../default-profile-image.jpg",
"Co-Convener","Ashwin TIWARI","+918275889497","contact/img/overall/ashwin.jpg",
"Convener","Mandar Joshi","+918485861033","contact/img/overall/mandar.jpg",
"Co-Convener","Rohit JAMNARE","+919404499585","contact/img/overall/rohit_j.jpg",
"Co-Convener","Ambika PANDIT","+919595904501","contact/img/overall/ambika.jpg"];

var web=[
"Co-Convener","Hrushikesh Masne","+919665680856","contact/img/Web & App/hrushikesh.jpg",
"Co-Convener","Nikhil Khandare","+918308492192","contact/img/Web & App/nikhil.jpg",
"Convener","Suved Ghanmode","+917798534854","contact/img/Web & App/suved.jpg",
"Co-Convener","Rohit Badge","+919527428120","contact/img/Web & App/rohit.jpg"];

var core_supporting=[
    "Co-Convener","Chetan VINCHURKAR","+918390581759","contact/img/core_supporting/../default-profile-image.jpg",
"Co-Convener","Prajyot FULARI","+918087718077","contact/img/core_supporting/../default-profile-image.jpg",
"Convener","Shubham BELE","+917507836595","contact/img/core_supporting/shubham.jpg",
"Convener","Purva AWARE","+917249538277","contact/img/core_supporting/default-profile-image.jpg",
"Co-Convener","Varun Alode","+918380888982","contact/img/core_supporting/../default-profile-image.jpg",
"CoConvener","Apurva BEDRE","+919405666711","contact/img/core_supporting/../default-profile-image.jpg"];

var core_sponsorship=["Co-Convener","Ameya DESHPANDE","+919689486540","contact/img/core_sponsorship",
"Co-Convener","Ameya DESHPANDE","+919689486540","contact/img/core_sponsorship/ameya.jpg",
"Convener","Amol FULZELE", "+918180812163","contact/img/core_sponsorship/amol.jpg",
"Co-Convener","Prashant JADHAO","+917030089840","contact/img/core_sponsorship/prashant.jpg"]

var event_sponsorship=[
"Co-Convener","Eshwaree SHINGWEKAR", "+918308089494","contact/img/event sponsorship",
"Co-Convener","Eshwaree SHINGWEKAR", "+918308089494","contact/img/event sponsorship/../default-profile-image.jpg",
"Convener","Raj Singh BAIS","+919595606030","contact/img/event sponsorship/raj.jpg",
"Co-Convener","Bhushan AGRAWAL","+919403900642","contact/img/event sponsorship/bhushan.jpg",];

var outreach=[
"Co-Convener","Aachal MUNDEL", "+917385829145","contact/img/outreach/aachal.jpg",
"Co-Convener","Manthan DIXIT","+919075122465","contact/img/outreach/manthan.jpg",
"Convener","Shubham NIMBHORKAR","+917249834052","contact/img/outreach/../default-profile-image.jpg",
"Convener","Shreya SAWARKAR","+918007960483","contact/img/outreach/shreya.jpg",
"Co-Convener","Rutuja GANDHI","+919075277114","contact/img/outreach/rutuja.jpg",
"Co-Convener","Samiksha TAYADE","+918793351418","contact/img/outreach/samiksha.jpg",
"Co-Convener","Noor Sabha QURESHI","+917447327661","contact/img/outreach/noor.jpg"];

var publicity=[
"Co-Convener","Dolly JAIN","+919860850186","contact/img/publicity/dolly.jpg",
"Co-Convener","Harshada INGOLE","+919970908702","contact/img/publicity/../default-profile-image.jpg",
"Convener","Mayuri PURI","+918975572659","contact/img/publicity/../default-profile-image.jpg",
"Convener","Anchal DAGA","+919421787338","contact/img/publicity/anchal.jpg",
"Co-Convener","Yamin LAKADKUTTA","+918208037225","contact/img/publicity/yamin.jpg",
"Co-Convener","Manthan FURSULE","+919420622999","contact/img/publicity/manthan_f.jpg"];

var core_editing=[
    "Co-Convener","Kunal WANIKAR","+918237558082","contact/img/core editing",
"Co-Convener","Kunal WANIKAR","+918237558082","contact/img/core editing/kunal.jpg",
"Convener","Pradeep NOKWAL","+919595559431","contact/img/core editing/pradeep.jpg"];

var networking=[
"Co-Convener","Ankit WARJURKAR","+917972361259","contact/img/networking/ankit.jpg",
"Co-Convener","Rashi NANWANI","+917249391211","contact/img/networking/../default-profile-image.jpg",
"Convener","Gaurav GILALKAR","+919545988746","contact/img/networking/../default-profile-image.jpg",
"Convener","Shiragi PATTALWAR","+919404924112","contact/img/networking/shiragi.jpg",
"Co-Convener","Himanshu SHARMA","+918412027866","contact/img/networking/himanshu.jpg",
"Co-Convener","Namrata GAJBHIYE","+919511962536","contact/img/networking/default-profile-image.jpg"];

var infra=[
"Co-Convener","Lankesh PUREKAR","+919881996745","contact/img/infra/lankesh.jpg",
"Co-Convener","Sharayu DAHAKE","+917798122874","contact/img/infra/../default-profile-image.jpg",
"Convener","Tejas CHEDE","+919921299445","contact/img/infra/tejas.jpg",
"Convener","Niraj SONULE","+919637177986","contact/img/infra/niraj.jpg",
"Co-Convener","Sanghal SAHARE","+918485004625","contact/img/infra/senghal.jpg"];

var core_designing=[
"Co-Convener","Mohit LALWANI","+919921066687","contact/img/core designing/mohit.jpg",
"Co-Convener","Sukhada KULKARNI","+919404107032","contact/img/core designing/sukhada.jpg",
"Convener","Abhishek AGRAWAL","+919028357656","contact/img/core designing/abhishek.jpg",
"Co-Convener","Yash BHANDARWAR","+918411041468","contact/img/core designing/yash.jpg"];

var audit=[

"Co-Convener","Rohit CHIMOTE","+919665552911","contact/img/audit/rohit_c.jpg",
"Co-Convener","Pratiksha PARASHAR","+919011827603","contact/img/audit/pratiksha.jpg",
"Convener","Sanket RATHI","+919970502548","contact/img/audit/../default-profile-image.jpg",
"Co-Convener","Mahima HIRAPURE","+918554853133","contact/img/audit/mahima.jpg",
"Co-Convener","Yash CHANDAK","+919421181199","contact/img/audit/../default-profile-image.jpg"];

var alumni_sponsorship=[
    "Co-Convener","Somnath GHOSH","+919757218288","contact/img/alumni sponsorship",
"Co-Convener","Somnath GHOSH","+919757218288","contact/img/alumni sponsorship/somnath.jpg",
"Convener","Rajkumar NAIK","+918007379537","contact/img/alumni sponsorship/rajkumar.jpg",
"Convener","Nikita GHODE","+919021021549","contact/img/alumni sponsorship/nikita.jpg",
"Co-Convener","Shweta JOSHI","+918378098121","contact/img/alumni sponsorship/shweta.jpg",];


			var camera, scene, renderer;
			var controls;

			var objects = [];
			var targets = {  helix: [], helix1: [] };
            
            var current_formation, conv_no=1;

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

				for ( var i = 0; i < table.length+2; i += 2 ) {

					var element = document.createElement( 'div' );
                     if(i>=table.length){
                        element.style.width = "200%" ;
                        var center = document.createElement( 'center' );
                        
                        center.className = 'heading';
                        center.innerHTML = "";
                        
                        element.appendChild(center);
                    }
                    else if(i>24 ){
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
                

				// helix

				var vector = new THREE.Vector3();
				var cylindrical = new THREE.Cylindrical();
                
                var innerCylindrical = new THREE.Cylindrical();

				for ( var i = 0, l = objects.length; i < l; i ++ ) {
                    if(i==objects.length-1){
                        var object = new THREE.Object3D();
                        object.position.y = 5000;
                        object.position.x = 300;
                        object.position.z = 1000;
                        targets.helix.push( object );
                    }
                    
                     else if(i>12){
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
                    
                    if(i==objects.length-1){
                        var object = new THREE.Object3D();
                        object.position.y = 800;
                        object.position.x = -100;
                        object.position.z = -200;
                        object.rotation.y = 0.6;
                        targets.helix1.push( object );
                    }
                     else if(i>12){
                        var theta = (i-12) * 0.90 + Math.PI;
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

                //grid1
                

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

				
				current_formation = "helix";
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
                if(current_formation == 'helix'){
                    var z_val = 3500;
                    var x_val = -700;
                }
                    
                else{
                    
                    if(conveyner_number ==  1){
                        var x_val = 1200;
                        var z_val = 2300;
                    }
                        
                    else if(conveyner_number == 2){
                        var x_val = 2000;
                        var z_val = 1500;
                    }
                        
                }
                    
                new TWEEN.Tween( camera.position )
						.to( { x: x_val, y: 0, z: z_val}, Math.random() * duration + duration )
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
            var conveyner_number = 0;
            var data = [];        
            function onclick( event ) {
                
                var x;
                    
                    for(var j=0; j<this.childNodes.length;j++){
                        if(this.childNodes[j].className == "symbol"){
                            x = this.childNodes[j].textContent;
                            break;
                        }
                    }
                var heading = document.getElementsByClassName("heading")[0];
                heading.innerHTML = "<span>"+x+"</span>";
                back.style.display = "block";
                for(var i=0;i<data.length;)
                    data.pop();
                switch (x){
                    case "Web & App":
                        for(var i=0; i< web.length; i++)
                            data.push(web[i]);
                            conveyner_number = 1;
                        break;
                    case "Overall":
                        for(var i=0; i< overall.length; i++)
                            data.push(overall[i]);
                        conveyner_number = 1;
                        break;
                    case "Outreach":
                        for(var i=0; i< outreach.length; i++)
                            data.push(outreach[i]);
                        conveyner_number =2;
                        break;
                     case "Core Supporting":
                        for(var i=0; i< core_supporting.length; i++)
                            data.push(core_supporting[i]);
                        conveyner_number = 2;
                        break;
                    case "Core Sponsorship":
                        for(var i=0; i< core_sponsorship.length; i++)
                            data.push(core_sponsorship[i]);
                        conveyner_number = 1;
                        break;
                    case "Event Sponsorship":
                        for(var i=0; i< event_sponsorship.length; i++)
                            data.push(event_sponsorship[i]);
                        conveyner_number =  1;
                        break;    
                    case "Publicity":
                        for(var i=0; i< publicity.length; i++)
                            data.push(publicity[i]);
                        conveyner_number =  2;
                        break;
                    case "Core Editing":
                        for(var i=0; i< core_editing.length; i++)
                            data.push(core_editing[i]);
                        conveyner_number =  1;
                        break;
                    case "Networking":
                        for(var i=0; i< networking.length; i++)
                            data.push(networking[i]);
                        conveyner_number =  2;
                        break;
                    case "Infrastructure Designing":
                        for(var i=0; i< infra.length; i++)
                            data.push(infra[i]);
                        conveyner_number =  2;
                        break;
                    case "Core Designing":
                        for(var i=0; i< core_designing.length; i++)
                            data.push(core_designing[i]);
                        conveyner_number =  1;
                        break;
                    case "Audit":
                        for(var i=0; i< audit.length; i++)
                            data.push(audit[i]);
                        conveyner_number =  1;
                        break;
                    case "Alumni Sponsorship":
                        for(var i=0; i< alumni_sponsorship.length; i++)
                            data.push(alumni_sponsorship[i]);
                        conveyner_number =  2;
                        break;
                    
                    
                 }
                for(var i=0; i<data.length ; i+=4){
                    if(i/4==7){
                        current_m = members[0];
                    }
                    else
                        current_m = members[i/4+1];
                    current_m.style.display = 'block';
                    if((x=="Event Sponsorship" || x=="Core Sponsorship" || x=="Core Editing" || x=="Alumni Sponsorship")  && i==0)
                        current_m.style.display = 'none';
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
                current_formation = "helix1"
                transform( targets.helix1, 2000 );
                
                
            }
            
            function backclick( event ){
                current_formation = "helix"
                    transform( targets.helix, 2000 );
                
                
                setTimeout(hide_members, 2000);
                
                
                
            }
            
            
            function hide_members(){
                for(var i=0; i<members.length;i++)
                    members[i].style.display = 'none';
                back.style.display = "none";
            }
            
            
            
        
        </script>
        <?php 
		include('common/header-footer/footer/footer.php');
	?>
    
	</body>
</html>
