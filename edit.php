<!DOCTYPE html>
<html lang="en" >
<style>
   body { 
   margin:0;
   }
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
	display: block;
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
	.goback {
		display: flex;
		align-items: center;
        gap: 30px;
		padding: 20px;
		padding-right: auto;
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
	.updateitem {
		display: flex;
		justify-content: center;
		align-items: center;
        gap: 12px;
		margin-left:200px;
		margin-right:200px;
		background-color: white;
		padding: 20px;
		margin-bottom: 50px;
		font-family: Tahoma, Arial, sans-serif;
	}
</style>
<head>
<meta charset="UTF-8">
<title>E-Peri</title>
<link rel="stylesheet" href="./style.css">
</head>
<?php
session_start(); //starts the session
if($_SESSION['user']){ //checks if user is logged in
}
else{
header("location:index.php "); // redirects if user is not logged in
}
$user = $_SESSION['user']; //assigns user value
$id_exists = false;
?>
<body>
<canvas id="canvas">

</canvas>
    <div id="homeView" class="current-state ajaxhidden" style="visibility: inherit;">
    <div class="layout layout-homepage">
        <article class="slideshow">
        <div class="item">
		<img src="image.png" class="visual">
		<form action="home.php">
			<div class="goback">
				<input type="submit" value="go back" class="visual2"/>
			</div>
		</form>
        </div>
        </article>
    </div>
	
	</div>

<center>Currently Selected</center>
<table>
<tr>
<th>Id</th>
<th>Details</th>
<th>Post Time</th>
<th>Edit Time</th>
<th>Public Post</th>
</tr>
<?php
if(!empty($_GET['id']))
{
$id = $_GET['id'];
$_SESSION['id'] = $id;
$id_exists = true;
$con = mysqli_connect("localhost", "root", "", "deliverydb") or die(mysqli_error()); //Connect to server
$sql = "Select * from list Where id='$id'";
$query = mysqli_query($con, $sql); // SQL Query
$count = mysqli_num_rows($query);
if($count > 0)
{
while($row = mysqli_fetch_array($query))
{
Print "<tr>";
Print '<td align="center">'. $row['id'] . "</td>";
Print '<td align="center">'. $row['details'] . "</td>";
Print '<td align="center">'. $row['date_posted']. " - ". $row['time_posted']."</td>";
Print '<td align="center">'. $row['date_edited']. " - ". $row['time_edited']. "</td>";
Print '<td align="center">'. $row['public']. "</td>";
Print "</tr></table><br/>";
$details = $row['details'];
$public = $row['public'];
}
}
else{
$id_exists = false;
}
}
if($id_exists)
{
Print "<form action='edit.php' method='POST'><div class='updateitem'>
 <a class='sectiondesc'>Update List: </a>
 Details: <input type='text' name='details' value='$details'/>";
 if($public == "yes") {
Print 'Public Post? <input type="checkbox" name="public[]" checked/>';
}
else {
Print 'Public Post? <input type="checkbox" name="public[]"/>';
}
Print'<input type="submit" value="Update List"/></div></form>';
}
else
{
Print '<h2 align="center">There is no data to be edited.</h2>';
}
?>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
$con = mysqli_connect("localhost", "root", "", "deliverydb") or die(mysqli_error()); //Connect to server
$details = ($_POST['details']);
$public = "no";
$id = $_SESSION['id'];
$time = strftime("%X");//time
$date = strftime("%B %d, %Y");//date
foreach($_POST['public'] as $list)
{
if($list != null)
{
$public = "yes";
}
}
foreach($_POST['sale'] as $list)
{
if($list != null)
{
$sale = "yes";
}
}
mysqli_query($con, "UPDATE list SET details='$details', public='$public', date_edited='$date', 
time_edited='$time' WHERE id='$id'") ;
header("location: home.php");
}
?>