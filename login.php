<?PHP
session_start();
$conn=mysqli_connect("localhost","root","","chatlive");
?>
<html>
	<body>
	<form name="as" method="post" action="design.php">
	<table align="center">
	<tr><td>	<input type="text" name="regno"placeholder="Registration no" required=""></tr></td>
	<tr><td>	<input type="password" name="password"placeholder="password" required=""></tr></td>
	<tr><td>	<input type="submit" name="submit" value="Login"></tr></td>
	</form>
</html>
<?PHP
if(isset($_POST["submit"]))
{
$regno=$_POST['regno'];
$password=$_POST['password'];
$conn=mysqli_connect("localhost","root","","chatlive");
$sql="select count(*) from reg where regno='$regno'&&password='$password'";
$result=mysqli_query($conn,$sql);
$fetch=mysqli_fetch_array($result);
if($fetch[0]!="0"){
	$_SESSION["regno"]=$_POST['regno'];
	
	echo"$regno";
	echo"login successfully";
}
else{
	echo"Failed to Login";
}
}
?>
