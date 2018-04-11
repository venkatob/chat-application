<?PHP
session_start();

$reg=$_SESSION["regno"];
$name=$_SESSION["name"];
//echo"$reg<br>";
//echo"$name";

$conn=mysqli_connect("localhost","root","","chat live");
?>
<?PHP
if(isset($_POST["submit"]))
{

	$send=$_POST['send'];
	$status=0;
	$date=date_default_timezone_set('Asia/Kolkata');
	$timee = date("Y-m-d H:i:s");


    $qry="insert into chat values('$name','$reg','$send','$status','$timee')";
	//$qry="update chats set name='$name',regno='$reg',send='$send',receive='$send' where regno='$reg'";
    if($conn->query($qry)==true)
    {
          echo"posted succesfully ";
          echo"$name";
        }
        else{
            echo"failed";
        }
        
}
?>
<?PHP

    $sql="select * from chat";

    $qry=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($qry))
    {
    
?>
<html>
	<head>
		<title>Discussion Page</title>
	</head>
	<body>
    <form action="disc.php" method="POST" name="discussion page">
		<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-comment"></span> Chat
                 
                <div class="panel-body">
                    
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&text=A" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font"> <?PHP echo"$row[1]"?></strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>
                                        <?PHP print $row[4]?></small>
                                </div>
                                <p>
                               
                                
                                <?PHP echo"$row[2]"?>
                                </p>
                            </div>
                        </li>
                        <?PHP
    }
    
    ?>
                        
                        
                    
                </div>
                <div class="panel-footer">
                    <div class="input-group">
					<input type="text" name="send" placeholder="write something to send....">
                    <input type="hidden" name="receive" value="<?php echo $receive; ?>"placeholder="write something to send....">

                        
                        <span class="input-group-btn">
                            <input type="submit" value="submit" class="btn btn-warning btn-sm" id="btn-chat" name="submit">
                
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</form>	</body>
</html>
