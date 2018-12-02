<!-- 
 Date: 11/16/2018
 Author: Dinesh Ghimire
 Title: summary.php
 description: User can insert comments in the bellow comments box
 -->
 
<!-- This php will not allow you to acess this page with out login-- >
  <?php/*
session_start();
if(!isset($_SESSION['loggedin'])){
	$_SESSION['redirectURL'] = $_SERVER['REQUEST_URI'];
	header('location:logout.php');
}
*/
 ?>
 
 
 <?php
 /*
    session_start();

    if (!isset($_SESSION['luser'])) {
        echo "Please Login again";
        echo "<a href='http://localhost/sdev300/login.php'>Click Here to Login</a>";
    }
    else {
        $now = time(); // Checking the time now when home page starts.

        if ($now > $_SESSION['expire']) {
            session_destroy();
            echo "Your session has expired! <a href='http://localhost/sdev300/login.php'>Login here</a>";
        }
        else { //Starting this else one [else1]
*/?>
<!--HTML Code -->
<html> 
<center>
<head>
  <title>CommentPage </title> 
 
</head> 


<?php
	// Retrieve Data using GET method

	$username = $_POST["username"];
	$emailadd= $_POST["emailadd"]; 
	
echo "Welcome <b> $username </b> Please add comments in the table below, when you finished press Submit button to review your comments.";	
?>

<body>
  <h4> Please complete the Form </h4> 
  

<form action="summary.php" method="post">  
<table id = "table" border ="1" action="" method="post">
<tr>
<th>Project</th>
<th>% Compete</th>
<th>Customer Comments</th>

</tr>


<tr>
<td>Project 1</td>
<td>11 % </td>
<td><textarea rows="2" cols="50" name="comments1" id="para1">

</textarea> </td>

</tr>



<tr>
<td>Project 2</td>
<td>55 % </td>
<td><textarea rows="2" cols="50"name="comments2" id="para2">
<?php echo $comments2; ?>
</textarea> </td>

<tr>
<td>Project 3</td>
<td>34 % </td>
<td><textarea rows="2" cols="50"name="comments3" id="para3">

</textarea> </td>

</tr>
<tr>
<td>Project 4</td>
<td>35 % </td>
<td><textarea rows="2" cols="50"name="comments4" id="para14">

</textarea> </td>

</tr>



<tr>
<td>Project 5</td>
<td>79 % </td>
<td><textarea rows="2" cols="50"name="comments5" id="para5">

</textarea> </td>

</tr>

<tr>
<td>Project 6</td>
<td>78 % </td>
<td><textarea rows="2" cols="50"name="comments6" id="para6">

</textarea> </td>

</tr>
<tr>
<td>Project 7</td>
<td>80 % </td>
<td><textarea rows="2" cols="50"name="comments7" id="para7">

</textarea> </td>

</tr>

<tr>
<td>Project 8</td>
<td>80 % </td>
<td><textarea rows="2" cols="50"name="comments8" id="para8">

</textarea> </td>

</tr>
<tr>
<td>Project 9</td>
<td>60 % </td>
<td><textarea rows="2" cols="50"name="comments9" id="para9">

</textarea> </td>

</tr>
<tr>
<td>Project 10</td>
<td>71 % </td>
<td><textarea rows="2" cols="50"name="comments10" id="para10">

</textarea> </td>

</tr>


</table>

</body>
<p>
<body>
<?php
echo"Are you ready to see final comment summary click submit button";
?>
 </b>
 <p>
 <input type="submit" value="Submit"> 
  </form>
</body>

<?php
// Provide a button to logout
echo "Do you want to exit from this comment session please click logout button";


echo "<form name='logout' method='post' action='logout.php'> 
<input name='btnsubmit' type='submit' value='Logout'> </br>

</form>";	 	
?>
<?php
// Provide a button to Back
echo "Do you want to back to login page";

echo "<form name='back' method='post' action='login.php'> 
<input name='btnback' type='submit' value='Back'> 
</form>";	 	
?>

<?php
/*
   echo $_SESSION['luser'];
     echo "<a href='http://localhost/sdev300/logout.php'>Log out</a>";
 */    ?>
 </center>
   </html>
<?php/*
        }
    }
*/?>



