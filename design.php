<!DOCTYPE html>
<html>
<head>
<style>


#mySidenav a {
    position: absolute;
    right: -80px;
    transition: 0.50s;
    padding: 15px;
	position:fixed;
    width: 100px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
    right: 20px;
}

#about {
    top: 380px;
    background-color: #4CAF50;
}

#blog {
    top: 440px;
    background-color: #2196F3;
}

#projects {
    top: 500px;
    background-color: #f44336;
}

#contact {
    top: 560px;
    background-color: #555
}


body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0px;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
	
}

.sidenav a:hover {
    color: #f1f1f1;
	
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}



body {margin:0px;}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0px;
  width: 100%;
}

.navbar a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px; /* Used in this example to enable scrolling */
}

table {
	width:100%;
	height:600px;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
	
}





</style>
</head>
<body>



<div style="margin-left:80px;">
</div>
<br>
<br>
<div id="mySidenav1" class="sidenav">

  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About1</a>
  <a href="#">Services1</a>
  <a href="#">Clients1</a>
  <a href="#">Contact1</a>
 
</div>
<div id="mySidenav" class="sidenav">
	<a href="#" id="about">About</a>
	<a href="#" id="blog">Blog</a>
	<a href="#" id="projects">Projects</a>
	<a href="#" id="contact">Contact</a>
	</div>


<table>
		<th>
		 hello world
		</th>
	</table>


<script>
function openNav() {
    document.getElementById("mySidenav1").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav1").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>


<div class="navbar">
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <a href="registration.php">SignUp</a>
  <h5>Discussion Session</h5>
  <div id="main">
	  <span style="font-size:25px;cursor:pointer" onclick="openNav()">&#9776; open</span>
	  
</div>

</div>
	

</body>
</html>
