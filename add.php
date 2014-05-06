<?php 
//Connects to your Database 
include('config.php'); 


 //This code runs if the form has been submitted

 if (isset($_POST['submit'])) { 



 //This makes sure they did not leave any fields blank

 if (!$_POST['username'] | !$_POST['password'] | !$_POST['pass2']| !$_POST['email'] | !$_POST['phone'] ) {

 		die('You did not complete all of the required fields');

 	}



 // checks if the username is in use

 	if (!get_magic_quotes_gpc()) {

 		$_POST['username'] = addslashes($_POST['username']);

 	}

 $usercheck = $_POST['username'];

 $check = mysql_query("SELECT username FROM user WHERE username = '$usercheck'") 

or die(mysql_error());

 $check2 = mysql_num_rows($check);



 //if the name exists it gives an error

 if ($check2 != 0) {

 		die('Sorry, the username '.$_POST['username'].' is already in use.');

 				}


 // this makes sure both passwords entered match

 	if ($_POST['password'] != $_POST['pass2']) {

 		die('Your passwords did not match. ');

 	}



 	// here we encrypt the password and add slashes if needed

 	$_POST['password'] = md5($_POST['password']);

 	if (!get_magic_quotes_gpc()) {

 		$_POST['password'] = addslashes($_POST['password']);

 		$_POST['username'] = addslashes($_POST['username']);

 			}



 // now we insert it into the database

//get the post data and sanitize it.
$username= mysql_real_escape_string ($_POST['username']);

$password=$_POST['password'];
$email= mysql_real_escape_string ($_POST['email']);
$phone = mysql_real_escape_string ($_POST['phone']);
$level= mysql_real_escape_string ($_POST['level']);


 	$insert = "INSERT INTO user (username, password, email, phone,level)

 			VALUES ('".$username."', '".$password."', '".$email."', '".$phone."', '".$level."')";

 	$add_member = mysql_query($insert);
 	
 	$id = mysql_insert_id(); 
 	
 	$insertgroup = "INSERT INTO groupowner (groupid,ownerid)

 			VALUES ('', '".$id."')";

 	$done = mysql_query($insertgroup);
 	

 	?>

 <h1>Registered</h1>
<?php  echo ""; ?>
 <p>Thank you, you have registered - you may now <a href="login.php">login</a>.</p>

 <?php 
 } 

 else 
 {	
 ?>


 
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

 <table border="0">

 <tr><td>Username:</td><td>

 <input type="text" name="username" maxlength="60">

 </td></tr>

 <tr><td>Password:</td><td>

 <input type="password" name="password" maxlength="10">

 </td></tr>

 <tr><td>Confirm Password:</td><td>

 <input type="password" name="pass2" maxlength="10">

 </td></tr>
 
 <tr><td>Email:</td><td>

 <input type="email" name="email">

 </td></tr>
 
 <tr><td>Phone Number:</td><td>

 <input type="text" name="phone" maxlength="10">

 </td></tr>
 
 <input type="hidden" name="level" value="1">

 <tr><th colspan=2><input type="submit" name="submit" 
value="Register"></th></tr> </table>

 </form>


 <?php

 }
 ?> 
