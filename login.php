<html>
	<body>
	<form name="as" method="post" action="login.php">
	<table align="center">
	<tr><td>	<input type="text" name="reg_no"placeholder="Registration no" required=""></tr></td>
	<tr><td>	<input type="password" name="pass"placeholder="password" required=""></tr></td>
	<tr><td>	<input type="submit" name="submit" value="Login"></tr></td>
	</form>
</html>
<?PHP
if(isset($_POST["submit"]))
{
$regno=$_POST['reg_no'];
$password=$_POST['pass'];
$conn=mysqli_connect("localhost","root","","chatlive");
$sql="select count(*) from reg where regno='$regno'&&password='$password'";
$result=mysqli_query($conn,$sql);
$fetch=mysqli_fetch_array($result);
if($fetch[0]!="0"){
	echo"Login Successfully";
}
else{
	echo"Failed to Login";
}
}
?>
