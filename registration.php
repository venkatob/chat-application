<?PHP
session_start();
$conn=mysqli_connect("localhost","root","","chat live");
?>
<html>
<body>
<form name="as" action="registration.php" method="POST">
<table align='center'>

<tr><td>Profile Picture :<td><input type="file" placeholder="upload profile pic" required="" name="dp"</td></tr>
<tr><td>Name :<td><input type="text" placeholder="Name" required="" name="name"</td></tr>

<tr><td>Reg No :<td><input type="text"  placeholder="RegisterNo" required="" name="regno" </td></tr>

<tr><td>Password:</font></td><td><input type="text" placeholder="password" required="" name="password" </td></tr>

<tr><td>Confirm Password:</font></td><td><input type="text" placeholder="confirm password" name="confirm_password" required=""></td></tr>
<tr><td>DOB :<td><input type="date" placeholder="" required="" name="dob"</td></tr>
<tr><td>Description :<td><input type="text" placeholder="about you..." required="" name="descr"</td></tr>

<tr><td>Department:</font></td><td><input type="text" name="dept"placeholder="department name" required=""></td></tr>

<tr><td>Gender:<input type="radio" name="gender" value="female">female
<input type="radio" name="gender" value="male">male</td></tr>

<tr><td>Email:<td><input type="text" required="" name="gmail"placeholder="Email" value=""></td></tr>

<tr><td>Contact:<td><input type="text" required="" name="contact"placeholder="contact" value=""></td></tr>







<tr><td><input type="submit" name="submit" value="Insert">
<input type="reset" name="reset" value="clear"></td></tr>

</table>
</form>
</body>
</html>

<?PHP
if(isset($_POST["submit"]))
{
    $dp=$_POST['dp'];
    $name=$_POST['name'];
    $regno=$_POST['regno'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];
	$dob=$_POST['dob'];
	$descr=$_POST['descr'];
    $dept=$_POST['dept'];
    $gender=$_POST['gender'];
    $gmail=$_POST['gmail'];
    $contact=$_POST['contact'];
    //$send=$_POST['send'];
	$date=date_default_timezone_set('Asia/Kolkata');
	$timee = date("Y-m-d H:i:s");
    
    $conn=mysqli_connect("localhost","root","","chat live");
    $qry="insert into reg values('$dp','$name','$regno','$password','$confirm_password','$dob','$descr','$dept','$gender','$gmail','$contact')";
    if($conn->query($qry)==true)
    {
        $qry1="insert into chat values('$name','$regno','$send','$status','$timee')";
        if($conn->query($qry1)==true)
        {
            header("location:login.php");
        }
        else{
            echo"failed";
        }
        
    }
    else
    {
        echo"not inserted";
    }
}
?>
