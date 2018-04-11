<?PHP
session_start();
$conn=mysqli_connect("localhost","root","","chat live");
?>
<html>
	<body>
	<form name="as" method="post" action="">
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
$conn=mysqli_connect("localhost","root","","chat live");
$sql="select * from reg where regno='$regno'&&password='$password'";

$result=mysqli_query($conn,$sql);
$fetch1=mysqli_fetch_array($result);
$fetch=mysqli_num_rows($result);
if($fetch>0){
	$_SESSION["regno"]=$_POST['regno'];
	$_SESSION["name"]=$fetch1['name'];
	//echo $regno;
	header("location:design.php");
}
else{
	echo"Failed to Login";
}
}
?>
