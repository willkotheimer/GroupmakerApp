<?php
session_start();
include('config.php');
include('userobject.php');
include('functions.php');


$username = $_COOKIE['ID_my_site'];

if (checkadmin($username))

{

$groupnum = getgroupfromowner($username); 
include('adminheader.php');
echo "Group number=".$groupnum."<br/>";
 


 //test for admin true or false; 
 // echo  $_SESSION['admin']."<br/>";
 
  
  //get all the member of the group
$query = "SELECT * from `user` inner join `group` as `g` on (`user`.`id` = `g`.`userid`) where `g`.`groupnum` = '".$groupnum."';";

//echo $query; 
$i=0;

//echo $query; 
$members = mysql_query($query)or die(mysql_error()); 

 	while($info = mysql_fetch_array( $members )) 	{
		${"user" . $i} = new User($info['id'],$info['username'],${"newpass".$i}, $info['email'], $info['phone'],0);	
		$i++;
		}
	
	 $members = array();
// echo "owner".$owner;
 
 $group = new Group ($owner,$members);
 

// echo "here's your content";
 
$ownerval = $group->getOwner();

// echo "Here's your owner".$ownerval;
 
 for ($x=0; $x<=$i; $x++){
 array_push($group->members, ${"user".$x});
}
  	//echo $groupnum."<br/>";
  	
  	echo "Number of group members in group: ". $i."<br/>";
  	echo "Group owner: ".$ownerval."<br/>";
  	
  	echo "<a href='addtasks.php?admin=true'>add tasks</a><br/>";
  	
  	 for ($x=0; $x<=$i-1; $x++){
	$group->printmembers($x);
	echo"<hr/>"; 
	}
	
	echo"<a href='logout.php'>Logout</a>";
} else {

print "you are not the admin.";

}

?>