<?php
$username = $_COOKIE['ID_my_site']; 
include('functions.php');
include('config.php');
include('userheader.php'); 


			
			//get the members and put them in an object and print to screen
			
			echo "<div id='left'>";
			
 			
 			
 			//also if it has tasks, get the tasks
 			$groupnum = getusernamesgroup($username);
 			//gettasks($groupnum); 
 			
 			gettasks($groupnum);
 			//and finally get the comments
 			echo "</div><br/>";
 			
 			
 			
 			?>
 			
 			
 		<form name="input" action="addcomment.php" method="post">

Enter your comments:<br/>


<input type="text"  name="comment" placeholder="Enter comment"><br/>
<input type="hidden" name="username" value="<?php echo $username; ?>"><br/> 
<input type="image" name="submit" value="submit" height="4%" width="4%" src="images/addcomment.png"><br/>

</form>

<a href="logout.php">Logout</a>
			<?php 
			echo "<br/>"; 
			echo "<br/>";
			echo "<br/>";
 			getcomments($groupnum);
 			
 			
 			
 			 
 			
 			
?>