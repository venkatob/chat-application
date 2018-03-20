<html>
	<body>
	<form name="as" method="post" action="insert.php">
	<table align="center">
	<tr><td>	<input type="text" name="name" required=""></tr></td>
	<tr><td>	<input type="password" name="password" required=""></tr></td>
	<tr><td>	<input type="submit" name="submit" value="Login"></tr></td>
	</form>
</html>
<?PHP
if(isset($_POST["submit"]))
{
$name=$_POST['name'];
$password=$_POST['password'];
$conn=mysqli_connect("localhost","root","","nethunt");
$sql="select count(*) from register where name='$name'&&password='$password'";
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
