<!-- 
 Date: 11/16/2018
 Author: Dinesh Ghimire
 Title: summary.php
 description: Summary of the comments we had in comment php
 -->
 <!-- This php will not allow you to acess this page with out login-->
  
  <?php/*
session_start();
if(!isset($_SESSION['loggedin'])){
	$_SESSION['redirectURL'] = $_SERVER['REQUEST_URI'];
	header('location:logout.php');
}
 */?>
 
<html> 
<center>
<head>    
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
  <title>Summary Page</title> 
</head> 
<body>  
<?php
	// Retrieve Data using GET method

	$username = $_POST["username"];
	$emailadd= $_POST["emailadd"]; 
	
echo " Thank you for your Comments. Here is your comment summary.";	
?>
<?php
// Retrieve Data using Post method 	
 $comments1 = $_POST["comments1"];
 $comments2 = $_POST["comments2"];
 $comments3 = $_POST["comments3"];
 $comments4 = $_POST["comments4"];
 $comments5 = $_POST["comments5"];
 $comments6 = $_POST["comments6"];
 $comments7 = $_POST["comments7"];
 $comments8 = $_POST["comments8"];
 $comments9 = $_POST["comments9"];

 $comments10 = $_POST["comments10"];
 
        // Display in a table   
	
     echo "<h4> Summary Table </h4>";
       echo "<table border='1'>";
       echo "<tr>
             <th>Project</th>
             <th>% Complete</th>
             <th>Customrt Comments</th>
             </tr>";
       echo "<tr>
             <td>Project 1</td>
             <td>11%</td>
            <td>$comments1</td>
             </tr>";
			 
			 echo "<tr>
             <td> Project 2</td>
             <td> 55%</td>
            <td>$comments2</td>
             </tr>";
			 
			 
			 
	echo "<tr>
             <td> Project 3</td>
             <td> 34%</td>
            <td>$comments3</td>
             </tr>";



	 echo "<tr>
             <td> Project 4</td>
             <td> 35%</td>
            <td>$comments4</td>
             </tr>";

	 echo "<tr>
             <td> Project 5</td>
             <td> 79%</td>
            <td>$comments5</td>
             </tr>";

	 echo "<tr>
             <td> Project 6</td>
             <td> 78%</td>
            <td>$comments6</td>
             </tr>";
			 
			 
	echo "<tr>
             <td> Project 7</td>
             <td> 80%</td>
            <td>$comments7</td>
             </tr>";	
	echo "<tr>
             <td> Project 8</td>
             <td> 80%</td>
            <td>$comments8</td>
             </tr>";
	echo "<tr>
             <td> Project 9</td>
             <td> 60%</td>
            <td>$comments9</td>
             </tr>";	
	echo "<tr>
             <td> Project 10</td>
             <td> 71%</td>
            <td>$comments10</td>
             </tr>";	 
			 
echo "</table>";    
   
	   
	   
	   
?> 
<?php
date_default_timezone_set("America/New_York");
echo "<h4>The submited time is </h4>" . date("h:i:sa");
?>

<p>
</br>
<?php
// Provide a button to logout
echo "Do you want to exit from this comment session please click logout button";
echo "<form name='logout' method='post' action='logout.php'> 
<input name='btnsubmit' type='submit' value='Logout'> 
</form>";	 	
?>
<?php
// Provide a button to Back
echo "Do you want to add more comments hit Back button";
echo "<form name='back' method='post' action='comment.php'> 
<input name='btnback' type='submit' value='Back'> 
</form>";	 	
?>
<!--form> 
    <input type="submit" value="Submit"> 
  </form--> 
</body> 
</center>
</html>



