<?php 

include('functions.php');	

				//$groupquery = "SELECT groupid from groupowner as go inner join user as u on go.ownerid = u.id where u.username = '".$username."';";
		//echo $groupquery;
				//$num = mysql_query($groupquery);
				//$row = mysql_fetch_array($num);
				//$groupnum=  $row["groupid"];
				
				 //checkadmin function returns groupnum>0
				
				
					
				//$level = checkadmin($username); 
				
				if (checkadmin($username)){
				$hour = time() + 3600; 
				setcookie(LEVEL, 1, $hour); 
				$_SESSION['level']=1;
 				header("Location: admin.php");
				 
				} else {
				$hour = time() + 3600; 
				setcookie(LEVEL, 0, $hour);
				$_SESSION['level']=0; 
				header("Location: users.php");
				}


 			
 		
 		?>