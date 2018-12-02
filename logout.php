<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <title>Logout</title>
</head>
<h1> Your session has been unset !!!!!</h1>
<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['emailadd']);
unset($_SESSION['password']);

 ?>

 <?php
// Provide a button to Back
echo "Please Login to continue";

echo "<form name='back' method='post' action='login.php'> 
<input name='btnback' type='submit' value='Login'> 
</form>";	 	
?>
</html>
<!--this code will check the time and enfore to login-- >
 <?php/*
    session_start();
    session_destroy();
    header('Location: http://localhost/sdev300/login.php');
*/?>

 
