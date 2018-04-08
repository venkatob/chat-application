<?PHP
session_start();

$reg=$_SESSION["regno"];
$name=$_SESSION["name"];
echo"$reg";
echo"$name";

$conn=mysqli_connect("localhost","root","","chatlive");
?>
<?PHP
if(isset($_POST["submit"]))
{

	$send=$_POST['send'];

    $qry="insert into chats values('$name','$reg','$send')";
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

    $sql="select * from chats";

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
                    <span class="glyphicon glyphicon-comment"></span> Chat<?PHP echo"$reg"; ?>
                 
                <div class="panel-body">
                    
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&text=A" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font"> <?PHP echo"$row[1]"?></strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>
                                        <?php print date("j of F Y, \a\\t g.i a", time()); ?></small>
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
