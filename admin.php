<?php 

//Connects to your Database 
include('config.php');

session_start();

include('userobject.php');
include('functions.php');

 //checks cookies to make sure they are logged in 

 if(isset($_COOKIE['ID_my_site'])) 

 { 

 	$username = $_COOKIE['ID_my_site']; 

 	$pass = $_COOKIE['Key_my_site']; 

 	 	$check = mysql_query("SELECT * FROM user WHERE username = '$username'")or die(mysql_error()); 

 	while($info = mysql_fetch_array( $check )) 	 

 		{ 

 

 //if the cookie has the wrong password, they are taken to the login page 

 		if ($pass != $info['password']) 

 			{ 			header("Location: login.php"); 

 			} 

 

 //otherwise they are shown the admin area	 

 	else 

 			{ 

 			include('adminheader.php');
 			
 			if(checkadmin($username)) {
 			
 			
 			echo "You are the admin<br/>";
 			
 			//$groupnum = getgroupfromowner($username);
			if (hasMembers($username)){ //there are members
			
			//get the members and put them in an object and print to screen
			
			echo "<div id='left'>";
			getMembers($username);
 			
 			
 			//also if it has tasks, get the tasks
 			$groupnum = getgroupfromowner($username);
 			//gettasks($groupnum); 
 			
 			gettasks($groupnum);
 			//and finally get the comments
 			echo "</div>";
 			
 			echo "<div id='right'>";
 			//getcomments($groupnum);
 			
 			
 			
 			?>
 			
 		<form name="input" action="addcomment.php" method="post">

Enter your comments:<br/>


<input type="text"  name="comment" placeholder="Enter comment"><br/>
<input type="hidden" name="username" value="<?php echo '$username'; ?>"><br/> 
<input type="submit" name="submit" value="submit"><br/>

</form>
			<?php 
			echo "</div>";
			
			
 			getcomments($groupnum);
 			 
 			} else {
 			
 		echo "there are no members"; 
 			
 			//create some members and put them in an object, 1st print the form for making members. 
 			
 			//makemembers($username); 
 			
 			 ?>
 			<br/>
 			<img src="images/plus.png" alt="" height="50" width="50">
 			 <form name="input" action="" method="post">
<select name="slct" id="name" onchange="addform(this.value)">
<option>Select</option>
<option value="1"> 1 </option>
<option value="2"> 2 </option>
<option value="3"> 3 </option>
<option value="4"> 4 </option>
<option value="5"> 5 </option>
<option value="6"> 6 </option>
<option value="7"> 7 </option>
<option value="8"> 8 </option>
<option value="9"> 9 </option>
<option value="10"> 10 </option>
</select>


</form> 

<form name="input" action="addgroup.php" method="post">

Enter your members:<br/>
<div id="member1" style="display: none;">New Member 1<br/>

<input type="text"  name="username1" placeholder="Enter username here"><br/>
<input type="text" name="password1" placeholder="Enter password here"><br/>
<input type="text" name="phonenumber1" placeholder="Enter phone here"><br/>
<input type="text" name="email1" placeholder="Enter email here"><br/><br/>
</div>

<div id="member2" style="display: none;">New Member 2<br/>

<input type="text"  name="username2" placeholder="Enter username here"><br/>
<input type="text" name="password2" placeholder="Enter password here"><br/>
<input type="text" name="phonenumber2" placeholder="Enter phone here"><br/>
<input type="text" name="email2" placeholder="Enter email here"><br/><br/>
</div>
<div id="member3" style="display: none;">New Member 3<br/>

<input type="text"  name="username3" placeholder="Enter username here"><br/>
<input type="text" name="password3" placeholder="Enter password here"><br/>
<input type="text" name="phonenumber3" placeholder="Enter phone here"><br/>
<input type="text" name="email3" placeholder="Enter email here"><br/><br/>
</div>
<div id="member4" style="display: none;">New Member 4<br/>

<input type="text"  name="username4" placeholder="Enter username here"><br/>
<input type="text" name="password4" placeholder="Enter password here"><br/>
<input type="text" name="phonenumber4" placeholder="Enter phone here"><br/>
<input type="text" name="email4" placeholder="Enter email here"><br/><br/>
</div>
<div id="member5" style="display: none;">New Member 5<br/>

<input type="text"  name="username5" placeholder="Enter username here"><br/>
<input type="text" name="password5" placeholder="Enter password here"><br/>
<input type="text" name="phonenumber5" placeholder="Enter phone here"><br/>
<input type="text" name="email5" placeholder="Enter email here"><br/><br/>
</div>
<div id="member6" style="display: none;">New Member 6<br/>

<input type="text"  name="username6" placeholder="Enter username here"><br/>
<input type="text" name="password6" placeholder="Enter password here"><br/>
<input type="text" name="phonenumber6" placeholder="Enter phone here"><br/>
<input type="text" name="email6" placeholder="Enter email here"><br/><br/>
</div>
<div id="member7" style="display: none;">New Member 7<br/>

<input type="text"  name="username7" placeholder="Enter username here"><br/>
<input type="text" name="password7" placeholder="Enter password here"><br/>
<input type="text" name="phonenumber7" placeholder="Enter phone here"><br/>
<input type="text" name="email7" placeholder="Enter email here"><br/><br/>
</div>
<div id="member8" style="display: none;">New Member 8<br/>

<input type="text"  name="username8" placeholder="Enter username here"><br/>
<input type="text" name="password8" placeholder="Enter password here"><br/>
<input type="text" name="phonenumber8" placeholder="Enter phone here"><br/>
<input type="text" name="email8" placeholder="Enter email here"><br/><br/>
</div>
<div id="member9" style="display: none;">New Member 9<br/>

<input type="text"  name="username9" placeholder="Enter username here"><br/>
<input type="text" name="password9" placeholder="Enter password here"><br/>
<input type="text" name="phonenumber9" placeholder="Enter phone here"><br/>
<input type="text" name="email9" placeholder="Enter email here"><br/><br/>
</div>
<div id="member10" style="display: none;">New Member 10<br/>

<input type="text"  name="username10" placeholder="Enter username here"><br/>
<input type="text" name="password10" placeholder="Enter password here"><br/>
<input type="text" name="phonenumber10" placeholder="Enter phone here"><br/>
<input type="text" name="email10" placeholder="Enter email here"><br/><br/>
</div>

<div id="submit1" style="display: block;"><br/>
<input type="hidden" name="owner" value="<?php echo $username ?>"/>
<input type="hidden" id="numbermembers" name="numbermembers" value=""/>
<input type="Submit" name="submit" value="submit"/>
</div>
</form>




<script>
function addform(number){

 document.getElementById('numbermembers').value = number;

for (var i=1;i<=number;i++)
{

var member= 'member'+i; 

document.getElementById(member).style.display="block"; 
//you can get the value from arguments itself

}

document.getElementById('#submit1').style.display="block"; 


//var inputnum=document.createElement("input");
	///inputnum.setAttribute('name', 'number');
	//inputnum.setAttribute('id', 'number');
	//inputnum.setAttribute('value', number);
	//document.getElementById("numbermembers").appendChild(inputnum);



 
}




</script>
 
 			
 			
 			<?php 
 			}
 			
 			
 			
 			//create members, which will route to admin display
 			//include('createmembers'); 

 echo "<a href=logout.php>Logout</a>"; 

 			} 

 		} 

 		} 

 
 }

 //if the cookie does not exist, they are taken to the login screen 

 else {			 

 header("Location: login.php"); 

 } 

 ?> 
