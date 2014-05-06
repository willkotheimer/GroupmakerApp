<?php

include('config.php');
include('functions.php'); 
include('userobject.php');




//username posted as "owner"
$owner =  $_POST['owner'];

//possible addition test against the cookie
//$username = $_COOKIE['ID_my_site'];


$groupnum= getgroupfromowner($owner);



if (isset($_POST['numbermembers'])) {
$number = $_POST['numbermembers'];
//echo $number;
}

//tested all because we tested one member and copy and pasted code for others.






//member 1
if (isset($_POST['username1'])) {
$user1 = $_POST['username1'];
//echo $username1; 

} 

if (isset($_POST['password1'])) {
$password1 = $_POST['password1'];
$newpass1 = $password1; 
$password1 = md5($password1);
//echo $password1;

} 
if (isset($_POST['email1'])) {
$email1 = $_POST['email1'];
//echo $email1; 


} 
if (isset($_POST['phonenumber1'])) {
$phone1 = $_POST['phonenumber1'];
//echo phone1; 

} 

	if (isset($_POST['phonenumber1'])&&isset($_POST['email1']) && isset($_POST['password1']) && isset($_POST['username1'])) {
	$mysqlquerystring = "INSERT INTO user (id, username, password,email,phone) VALUES ('', '$user1','$password1','$email1','$phone1');";
	//echo $mysqlquerystring;
	$userquestion = mysql_query($mysqlquerystring);
	$userid = mysql_insert_id();
	//echo $userid;
	//echo $groupid; 

	if ($userid!=0){
	//echo "group number is:".$groupnum; 
	$mysqlquerystring2 = "INSERT INTO `willko_groupa1`.`group` (
	`userid` ,
	`groupnum`
	)
	VALUES (
	'$userid','$groupnum'
	);"; 


	//echo $mysqlquerystring2; 
	$groupquestion = mysql_query($mysqlquerystring2);

	//echo $userqueston.$groupquestion;
}


	}



//member 2
if (isset($_POST['username2'])) {
$username2 = $_POST['username2'];
}
if (isset($_POST['password2'])) {
$password2 = $_POST['password2'];
$newpass2 = $password2;
$password2 = md5($password2);
}
if (isset($_POST['email2'])) {
$email2 = $_POST['email2'];
}
if (isset($_POST['phonenumber2'])) {
$phone2 = $_POST['phonenumber2'];
}

//add member two to group

if (isset($_POST['phonenumber2'])&&isset($_POST['email2']) && isset($_POST['password2']) && isset($_POST['username2'])) {

$mysqlquerystring = "INSERT INTO user (id, username, password,email,phone) VALUES ('', '$username2','$password2','$email2','$phone2');";
	//echo $mysqlquerystring;
	$userquestion = mysql_query($mysqlquerystring);
	$userid = mysql_insert_id();
	//echo $userid;
	//echo $groupid; 
if ($userid!=0){

	//echo "group number is:".$groupnum; 
	$mysqlquerystring2 = "INSERT INTO `willko_groupa1`.`group` (
	`userid` ,
	`groupnum`
	)
	VALUES (
	'$userid','$groupnum'
	);"; 


	//echo $mysqlquerystring2; 
	$groupquestion = mysql_query($mysqlquerystring2);

	//echo $userqueston.$groupquestion;
	
	}
	}
	
//member 3
if (isset($_POST['username3'])) {
$username3 = $_POST['username3'];
}
if (isset($_POST['password3'])) {
$password3 = $_POST['password3'];
$newpass3 = $password3;
$password3 = md5($password3);
}
if (isset($_POST['email3'])) {
$email3 = $_POST['email3'];
}
if (isset($_POST['phonenumber3'])) {
$phone3 = $_POST['phonenumber3'];
}



if (isset($_POST['phonenumber3'])&&isset($_POST['email3']) && isset($_POST['password3']) && isset($_POST['username3'])) {

$mysqlquerystring = "INSERT INTO user (id, username, password,email,phone) VALUES ('', '$username3','$password3','$email3','$phone3');";
	//echo $mysqlquerystring;
	$userquestion = mysql_query($mysqlquerystring);
	$userid = mysql_insert_id();
	//echo $userid;
	//echo $groupid; 

if ($userid!=0){
	//echo "group number is:".$groupnum; 
	$mysqlquerystring2 = "INSERT INTO `willko_groupa1`.`group` (
	`userid` ,
	`groupnum`
	)
	VALUES (
	'$userid','$groupnum'
	);"; 


	//echo $mysqlquerystring2; 
	$groupquestion = mysql_query($mysqlquerystring2);

	//echo $userqueston.$groupquestion;
}
}



//member 4
if (isset($_POST['username4'])) {
$username4 = $_POST['username4'];
}
if (isset($_POST['password4'])) {
$password4 = $_POST['password4'];
$newpass4 = $password4;
$password4 = md5($password4);
}
if (isset($_POST['email4'])) {
$email4 = $_POST['email4'];
}
if (isset($_POST['phonenumber4'])) {
$phone4 = $_POST['phonenumber4'];


}


if (isset($_POST['phonenumber4'])&&isset($_POST['email4']) && isset($_POST['password4']) && isset($_POST['username4'])) {

$mysqlquerystring = "INSERT INTO user (id, username, password,email,phone) VALUES ('', '$username4','$password4','$email4','$phone4');";
	//echo $mysqlquerystring;
	$userquestion = mysql_query($mysqlquerystring);
	$userid = mysql_insert_id();
	//echo $userid;
	//echo $groupid; 
if ($userid!=0){

	//echo "group number is:".$groupnum; 
	$mysqlquerystring2 = "INSERT INTO `willko_groupa1`.`group` (
	`userid` ,
	`groupnum`
	)
	VALUES (
	'$userid','$groupnum'
	);"; 


	//echo $mysqlquerystring2; 
	$groupquestion = mysql_query($mysqlquerystring2);

	//echo $userqueston.$groupquestion;
	}
	}

//member 5
if (isset($_POST['username5'])) {
$username5 = $_POST['username5'];
}
if (isset($_POST['password5'])) {
$password5 = $_POST['password5'];
$newpass5 = $password5;
$password5 = md5($password5);
}
if (isset($_POST['email5'])) {
$email5 = $_POST['email5'];
}
if (isset($_POST['phonenumber5'])) {
$phone5 = $_POST['phonenumber5'];
}


if (isset($_POST['phonenumber5'])&&isset($_POST['email5']) && isset($_POST['password5']) && isset($_POST['username5'])) {

$mysqlquerystring = "INSERT INTO user (id, username, password,email,phone) VALUES ('', '$username5','$password5','$email5','$phone5');";
	//echo $mysqlquerystring;
	$userquestion = mysql_query($mysqlquerystring);
	$userid = mysql_insert_id();
	//echo $userid;
	//echo $groupid; 
if ($userid!=0){

	//echo "group number is:".$groupnum; 
	$mysqlquerystring2 = "INSERT INTO `willko_groupa1`.`group` (
	`userid` ,
	`groupnum`
	)
	VALUES (
	'$userid','$groupnum'
	);"; 


	//echo $mysqlquerystring2; 
	$groupquestion = mysql_query($mysqlquerystring2);

	//echo $userqueston.$groupquestion;
	}
	}
	
//member 6
if (isset($_POST['username6'])) {
$username6 = $_POST['username6'];
}
if (isset($_POST['password6'])) {
$password6 = $_POST['password6'];

$newpass6 = $password6;
$password6 = md5($password6);
}
if (isset($_POST['email6'])) {
$email6 = $_POST['email6'];
}
if (isset($_POST['phonenumber6'])) {
$phone6 = $_POST['phonenumber6'];
}


if (isset($_POST['phonenumber6'])&&isset($_POST['email6']) && isset($_POST['password6']) && isset($_POST['username6'])) {

$mysqlquerystring = "INSERT INTO user (id, username, password,email,phone) VALUES ('', '$username6','$password6','$email6','$phone6');";
	//echo $mysqlquerystring;
	$userquestion = mysql_query($mysqlquerystring);
	$userid = mysql_insert_id();
	//echo $userid;
	//echo $groupid; 
if ($userid!=0){

	//echo "group number is:".$groupnum; 
	$mysqlquerystring2 = "INSERT INTO `willko_groupa1`.`group` (
	`userid` ,
	`groupnum`
	)
	VALUES (
	'$userid','$groupnum'
	);"; 


	//echo $mysqlquerystring2; 
	$groupquestion = mysql_query($mysqlquerystring2);

	//echo $userqueston.$groupquestion;
	}
	}
	

//member 7
if (isset($_POST['username7'])) {
$username7 = $_POST['username7'];
}
if (isset($_POST['password7'])) {
$password7 = $_POST['password7'];
$newpass7 = $password7;
$password7 = md5($password7);
}
if (isset($_POST['email7'])) {
$email7 = $_POST['email7'];
}
if (isset($_POST['phonenumber7'])) {
$phone7 = $_POST['phonenumber7'];
}

if (isset($_POST['phonenumber7'])&&isset($_POST['email7']) && isset($_POST['password7']) && isset($_POST['username7'])) {

$mysqlquerystring = "INSERT INTO user (id, username, password,email,phone) VALUES ('', '$username7','$password7','$email7','$phone7');";
	//echo $mysqlquerystring;
	$userquestion = mysql_query($mysqlquerystring);
	$userid = mysql_insert_id();
	//echo $userid;
	//echo $groupid; 
if ($userid!=0){

	//echo "group number is:".$groupnum; 
	$mysqlquerystring2 = "INSERT INTO `willko_groupa1`.`group` (
	`userid` ,
	`groupnum`
	)
	VALUES (
	'$userid','$groupnum'
	);"; 


	//echo $mysqlquerystring2; 
	$groupquestion = mysql_query($mysqlquerystring2);

	//echo $userqueston.$groupquestion;
	
	}
	}
	

//member 8
if (isset($_POST['username8'])) {
$username8 = $_POST['username8'];
}
if (isset($_POST['password8'])) {
$password8 = $_POST['password8'];
$newpass8 = $password8;
$password8 = md5($password8);
}
if (isset($_POST['email8'])) {
$email8 = $_POST['email8'];
}
if (isset($_POST['phonenumber8'])) {
$phone8 = $_POST['phonenumber8'];
}


if (isset($_POST['phonenumber'])&&isset($_POST['email8']) && isset($_POST['password8']) && isset($_POST['username8'])) {


$mysqlquerystring = "INSERT INTO user (id, username, password,email,phone) VALUES ('', '$username8','$password8','$email8','$phone8');";
	//echo $mysqlquerystring;
	$userquestion = mysql_query($mysqlquerystring);
	$userid = mysql_insert_id();
	//echo $userid;
	//echo $groupid; 
if ($userid!=0){

	//echo "group number is:".$groupnum; 
	$mysqlquerystring2 = "INSERT INTO `willko_groupa1`.`group` (
	`userid` ,
	`groupnum`
	)
	VALUES (
	'$userid','$groupnum'
	);"; 


	//echo $mysqlquerystring2; 
	$groupquestion = mysql_query($mysqlquerystring2);

	//echo $userqueston.$groupquestion;
	}
	}

//member 9
if (isset($_POST['username9'])) {
$username9 = $_POST['username9'];
}
if (isset($_POST['password9'])) {
$password9 = $_POST['password9'];
$newpass9 = $password9;
$password9 = md5($password9);
}
if (isset($_POST['email9'])) {
$email9 = $_POST['email9'];
}
if (isset($_POST['phonenumber9'])) {
$phone9 = $_POST['phonenumber9'];
}

if (isset($_POST['phonenumber9'])&&isset($_POST['email9']) && isset($_POST['password9']) && isset($_POST['username9'])) {



$mysqlquerystring = "INSERT INTO user (id, username, password,email,phone) VALUES ('', '$username9','$password9','$email9','$phone9');";
	//echo $mysqlquerystring;
	$userquestion = mysql_query($mysqlquerystring);
	$userid = mysql_insert_id();
	//echo $userid;
	//echo $groupid; 

if ($userid!=0){
	//echo "group number is:".$groupnum; 
	$mysqlquerystring2 = "INSERT INTO `willko_groupa1`.`group` (
	`userid` ,
	`groupnum`
	)
	VALUES (
	'$userid','$groupnum'
	);"; 


	//echo $mysqlquerystring2; 
	$groupquestion = mysql_query($mysqlquerystring2);

	//echo $userqueston.$groupquestion;
	}
	}

//member 10
if (isset($_POST['username10'])) {
$username10 = $_POST['username10'];
}
if (isset($_POST['password10'])) {
$password10 = $_POST['password10'];
$newpass10 = $password10;
$password10 = md5($password10);
}
if (isset($_POST['email10'])) {
$email10 = $_POST['email10'];
}
if (isset($_POST['phonenumber10'])) {
$phone10 = $_POST['phonenumber10'];
}



if (isset($_POST['phonenumber10'])&&isset($_POST['email10']) && isset($_POST['password10']) && isset($_POST['username10'])) {


$mysqlquerystring = "INSERT INTO user (id, username, password,email,phone) VALUES ('', '$username10','$password10','$email10','$phone10');";
	//echo $mysqlquerystring;
	$userquestion = mysql_query($mysqlquerystring);
	$userid = mysql_insert_id();
	//echo $userid;
	//echo $groupid; 
if ($userid!=0){

	//echo "group number is:".$groupnum; 
	$mysqlquerystring2 = "INSERT INTO `willko_groupa1`.`group` (
	`userid` ,
	`groupnum`
	)
	VALUES (
	'$userid','$groupnum'
	);"; 


	//echo $mysqlquerystring2; 
	$groupquestion = mysql_query($mysqlquerystring2);

	//echo $userqueston.$groupquestion;

}


}







//test
//echo $groupname.$owner; 

//what we want
// SELECT id FROM `user` WHERE user.username = 'drXing';
$query = "SELECT id from `user` WHERE user.username ='". $owner."';";
//echo $query; 
$ownerid = mysql_query($query)or die(mysql_error()); 

 	while($info = mysql_fetch_array( $ownerid )) 	 
		$id= $info['id']; 
	


//get count of users
$querycount = "SELECT count(u.*) from `user` inner join `group` as `g` on (`user`.`id` = `g`.`userid`) where `g`.`groupnum` = '".$groupnum."';"; 
//echo $querycount; 
$count = mysql_query($querycount); 
$_SESSION['count']=$count;

//get all the member of the group
$query = "SELECT * from `user` inner join `group` as `g` on (`user`.`id` = `g`.`userid`) where `g`.`groupnum` = '".$groupnum."';";

//echo $query; 
$i=1;

//echo $query; 
$members = mysql_query($query)or die(mysql_error()); 

 	while($info = mysql_fetch_array( $members )) 	{
		${"user" . $i} = new User($info['id'],$info['username'],${"newpass".$i}, $info['email'], $info['phone'],0);	
		$i++;
		}
		



//to be replaced by dyanmic objects
//$user1 = new User("Reema", "Reema01", "pas1s", "2701112221",0);		
//$user2 = new User("Will", "Will01", "pass2", "270155511",0);		
//$user3 = new User("Sathish", "Sathish01", "pass", "2701111111",0);

 ///$user1->getValues();
  //$user2->getValues();
  // $user3->getValues();
 

 
 $group =  "group".$groupnum; 
 $_SESSION['group']=$group; 

 //echo "Group".$group;
 $members = array();
// echo "owner".$owner;
 
 $group = new Group ($owner,$members);
 

// echo "here's your content";
 
$ownerval = $group->getOwner();

// echo "Here's your owner".$ownerval;
 
 for ($x=1; $x<=$i; $x++){
 array_push($group->members, ${"user".$x});
}
  
 
 header("Location: http://thisisgroupa.com/displayadmin.php"); 
  
  //not currently working
  
   // for ($x=0; $x<=$i; $x++){
//$group-> printmembers($x);
// }
 
 
 
 // for ($x=0;$x<=$count; $x++){
  
// echo $group->members[$x]->name;
// echo "<br/>".$group->members[$x]->password;
// echo "<br/>".$group->members[$x]->email;
// echo "<br/>".$group->members[$x]->phonenumber;
// echo "<br/>".$group->members[$x]->level;
 
// ${"group".$groupnum}->printmembers(1);
 
 //wednesday:
 
 //what comes after?
// create a form for owner to put the members. . .this posts to a php page that adds members then redirects to a php page that adds tasks
//add members to database inside member class to the group table (userid group number)

//what comes before:
//---create a homescreen and button for starting a group and signing in. 
//---starting a group will use class Group :: add to the groupowner table the ownerid and the group number
//--- group must be auto incremented in the groupowner table
 
// }
 
  
 
?>