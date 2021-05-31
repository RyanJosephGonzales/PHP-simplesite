<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>E-Peri</title>
  <link rel="stylesheet" href="./style.css">
</head>
<style>
body { margin:0;}
canvas{
  position: absolute;
  top:0;
  left:0;
  z-index:-1;
}
#homeView {
	width: auto;
   -webkit-animation:fadeInUp 2s; /* Safari & Chrome */
  animation:fadeInUp 2s;
}
.layout-homepage {
	height: auto;
	overflow-x: hidden;
	overflow-y: hidden;
	-webkit-perspective: 500px;
	-moz-perspective: 500px;
	perspective: 500px;
	width: 100%;
}
.layout-homepage .slideshow {
	height: auto;
}
.layout-homepage .slideshow .item {
margin-top: 20%;
}
.visual {
	display: block;
    margin: 0 auto;
    width: 145px;
    height: 72px;
}
.visual2 {
    margin: 0 auto;
    width: 95px;
    height: 35px;
}

@-webkit-keyframes fadeInUp{
  0%{
    opacity: 0;
    -webkit-transform: translateY(80px);
  }
  100%{
    opacity: 1;
    -webkit-transform: translateY(0);
  }
}
	.logout {
		display: flex;
		align-items: center;
        gap: 30px;
		background-color: white;
		padding: 20px;
		padding-right: auto;
		margin-bottom: 100px;
		font-family: Tahoma, Arial, sans-serif;
	}
	.addlist {
		display: flex;
		justify-content: center;
		align-items: center;
        gap: 12px;
		margin-left:200px;
		margin-right:200px;
		padding: 20px;
		margin-bottom: 50px;
		
		font-family: Tahoma, Arial, sans-serif;
	}
	.sectiondesc {
	    font-size: 20px;
		font-weight: bold;
	}
	.font1 {
		font-family: sans-serif;
	}
	table {
		margin-left: auto; 
        margin-right: auto;
		margin-bottom: 50px;
        border-spacing: 15px;
    }
</style>
<?php
session_start(); //starts the session
if($_SESSION['user']){ //checks if user is logged in
}
else{
 header("location:index.php"); // redirects if user is not logged in
}
$user = $_SESSION['user']; //assigns user value
?>
<body>
<canvas id="canvas">

</canvas>
    <div id="homeView" class="current-state ajaxhidden" style="visibility: inherit;">
    <div class="layout layout-homepage">
        <article class="slideshow">
        <div class="item">
		<img src="image.png" class="visual">
        <div class="visual"> <h2 class="font1">Hello <?php Print "$user"?>! </h2></div>
		<form action="logout.php">
			<div class="logout">
				<input type="submit" value="Logout" class="visual2"/>
			</div>
		</form>
        </div>
        </article>
    </div>
	
	</div>
<div class="topsec"> <!--top section-->
 <form action="add.php" method="POST">
 <div class="addlist">
 <a class="sectiondesc">Add more to list:</a>
 Details: <input type="text" name="details"/>
 Public Post? <input type="checkbox" name="public" value="yes"/>
 <input type="submit" value="Add to list"/>
 </div>
 </div>
 </form>
 <center>My list</center>
 <table> <tr>
 <th>Id</th>
 <th>Details</th>
 <th>Post Time</th>
 <th>Edit Time</th>
 <th>Edit</th>
 <th>Delete</th>
 <th>Public Post</th>
 </tr>
 <?php
 $con = mysqli_connect("localhost", "root", "", "deliverydb") or die(mysqli_error()); //Connect to server
 $query = mysqli_query($con, "Select * from list"); // SQL Query
 while($row = mysqli_fetch_array($query))
 {
 Print "<tr>";
 Print '<td align="center">'. $row['id'] . "</td>";
 Print '<td align="center">'. $row['details'] . "</td>";
 Print '<td align="center">'. $row['date_posted']. " - ". $row['time_posted']."</td>";
 Print '<td align="center">'. $row['date_edited']. " - ". $row['time_edited']. "</td>";
 Print '<td align="center"><a href="edit.php?id='. $row['id'] .'" class="edit">edit</a> </td>';
 Print '<td align="center"><a href="#" onclick="myFunction('.$row['id'].')" class="del">delete</a> </td>';
 Print '<td align="center">'. $row['public']. "</td>";
 Print "</tr>";
 }
 ?>
 </table>
 <script>
 function myFunction(id)
 {
 var r=confirm("Are you sure you want to delete this record?");
 if (r==true)
 {
 window.location.assign("delete.php?id=" + id);
 }
 }
 </script>
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/r68/three.min.js'></script><script  src="./script.js"></script>
<script>
var SEPARATION = 30, AMOUNTX = 430, AMOUNTY = 55;

var container;
var camera, scene, renderer;
/*

if (window.WebGLRenderingContext){
  renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
  }
else {
  renderer = new THREE.CanvasRenderer();
  }
*/

var particles, particle, count = 0;

var windowHalfX = window.innerWidth / 2;
var windowHalfY = window.innerHeight / 2;

init();
animate();

function init() {

  container = document.createElement( 'div' );
  document.body.appendChild( container );
  if(container) {
      container.className += container.className ? ' waves' : 'waves';
  }

  camera = new THREE.PerspectiveCamera( 120, window.innerWidth / window.innerHeight, 1, 10000 );
  camera.position.y = 350; //changes how far back you can see i.e the particles towards horizon
  camera.position.z = 200; //This is how close or far the particles are seen

  camera.rotation.x = 0.15;

  scene = new THREE.Scene();

  particles = new Array();

  var PI2 = Math.PI * 2;
  var material = new THREE.SpriteCanvasMaterial( {

    color: 0x939393, //changes color of particles
    program: function ( context ) {

      context.beginPath();
      context.arc( 0, 0, 0.1, 0, PI2, true );
      context.fill();

    }

  } );

  var i = 0;

  for ( var ix = 0; ix < AMOUNTX; ix ++ ) {

    for ( var iy = 0; iy < AMOUNTY; iy ++ ) {

      particle = particles[ i ++ ] = new THREE.Sprite( material );
      particle.position.x = ix * SEPARATION - ( ( AMOUNTX * SEPARATION ) / 2 );
      particle.position.z = iy * SEPARATION - ( ( AMOUNTY * SEPARATION ) - 10 );
      scene.add( particle );

    }

  }

  renderer = new THREE.CanvasRenderer();
  renderer.setSize( window.innerWidth, window.innerHeight );
  renderer.setClearColor( 0xffffff, 1);
  container.appendChild( renderer.domElement );

  window.addEventListener( 'resize', onWindowResize, false );

}

function onWindowResize() {

  windowHalfX = window.innerWidth / 2;
  windowHalfY = window.innerHeight / 2;

  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();

  renderer.setSize( window.innerWidth, window.innerHeight );

}

function animate() {

  requestAnimationFrame( animate );

  render();

}

function render() {

  var i = 0;

  for ( var ix = 0; ix < AMOUNTX; ix ++ ) {

    for ( var iy = 0; iy < AMOUNTY; iy ++ ) {

      particle = particles[ i++ ];
      particle.position.y = ( Math.sin( ( ix + count ) * 0.20 ) * 50 ) + ( Math.sin( ( iy + count ) * 0.2 ) * 20 );
      particle.scale.x = particle.scale.y = ( Math.sin( ( ix + count ) * 0.3 ) + 2 ) * 4 + ( Math.sin( ( iy + count ) * 0.5 ) + 1 ) * 4;

    }

  }

  renderer.render( scene, camera );

  // This increases or decreases speed
  count += 0.5;

}
</script>
</body>
</html>
