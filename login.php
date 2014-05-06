<?php 
session_start();
//Connects to your Database 
include('config.php');


 //Checks if there is a login cookie
 if(isset($_COOKIE['ID_my_site']))


 //if there is, it logs you in and directes you to the members page
 { 
 	$username = $_COOKIE['ID_my_site']; 

 	$pass = $_COOKIE['Key_my_site'];

	      //this is a check to see if the username and password are valid.
	      
 	 	$check = mysql_query("SELECT * FROM user WHERE username = '$username'")or die(mysql_error());
		
		
		
 	while($info = mysql_fetch_array( $check )) 	

 		{

 		if ($pass != $info['password']) 

 			{

 			 			}

 		else

 			{
 			
 			//password works, now check for level.
 			
 			//check to see if they are the admin and if so send to admin screen, if not send to user screen:
			
			include('routing.php');
	}
 	}
}

 //if the login form is submitted 

 if (isset($_POST['submit'])) { // if form has been submitted



 // makes sure they filled it in

 	if(!$_POST['username'] | !$_POST['pass']) {

 		die('You did not fill in a required field.');

 	}

 	// checks it against the database



 	if (!get_magic_quotes_gpc()) {

 		$_POST['email'] = addslashes($_POST['email']);

 	}

 	$check = mysql_query("SELECT * FROM user WHERE username = '".$_POST['username']."'")or die(mysql_error());



 //Gives error if user dosen't exist

 $check2 = mysql_num_rows($check);

 if ($check2 == 0) {

 		die('That user does not exist in our database. <a href=add.php>Click Here to Register</a>');

 				}

 while($info = mysql_fetch_array( $check )) 	

 {

$_POST['pass'] = stripslashes($_POST['pass']);

 	$info['password'] = stripslashes($info['password']);
	
	$catch = $_POST['pass']; 
 	$_POST['pass'] = md5($_POST['pass']);



 //gives error if the password is wrong

 	if ($_POST['pass'] != $info['password']) {

 		die($catch."    ".$_POST['pass'].'Incorrect password, please try again.'.$info['password']);

 	}
 else 

 { 

 
 // if login is ok then we add a cookie 

$_POST['username'] = stripslashes($_POST['username']); 
$hour = time() + 3600; 
setcookie(ID_my_site, $_POST['username'], $hour); 
setcookie(Key_my_site, $_POST['pass'], $hour);	 
 $username = stripslashes($_POST['username']); 
//we now check for the ownership of the group to see where to route the person 
include('routing.php');
 } 
} 
} 

else 

{	 

 

 // if they are not logged in 

 ?> 

 <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> 

 <table border="0"> 

 <tr><td colspan=2><h1>Login</h1></td></tr> 

 <tr><td>Username:</td><td> 

 <input type="text" name="username" maxlength="40"> 

 </td></tr> 

 <tr><td>Password:</td><td> 

 <input type="password" name="pass" maxlength="50"> 

 </td></tr> 

 <tr><td colspan="2" align="right"> 

 <input type="submit" name="submit" value="Login"> 

 </td></tr> 

 </table> 

 </form> 

 <?php 

 } 

 

 ?> 
