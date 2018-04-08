<?php  
ini_set('display_errors','0');
?>
<script>sessionStorage.clear();</script>
<?php
$_SESSION=array();
            session_destroy();
            session_start();
            session_unset(); 
            session_destroy();
            echo"ur logout";
//header("location:login.php");	
?>