<?php

function checkadmin($username){

$groupquery = "SELECT level from user where user.username = '".$username."';";
	
				$num = mysql_query($groupquery);
				$row = mysql_fetch_array($num);
				$level=  $row["level"];
				
				if ($level>0) {return true;} else {return false;}
				
				}
				
//gets the owner's group number

function getgroupfromowner($username){

$groupquery = "SELECT groupid from groupowner as go inner join user as u on go.ownerid = u.id where u.username = '".$username."';";
		//echo $groupquery;
				$num = mysql_query($groupquery);
				$row = mysql_fetch_array($num);
				$groupnum=  $row["groupid"];
				
				return $groupnum;
				
			
				}
			


//getgroupfrom user
//gets group from username


function getgroupid($userid){
 
$groupquery = "SELECT `groupnum` from `group` where `userid` = '".$userid."';";
		//echo $groupquery;
				$num = mysql_query($groupquery);
				
				$row = mysql_fetch_array($num);
				$groupnum=  $row["groupnum"];
				
				return $groupnum;
}



function getusernamesgroup($username) {

$groupquery = "SELECT `groupnum` from `group` as `gr` inner join `user` as `u` on `gr`.`userid` = `u`.`id` where `u`.`username` = '".$username."';";
		//echo $groupquery;
				$num = mysql_query($groupquery);
				$row = mysql_fetch_array($num);
				$groupnum=  $row["groupnum"];
				
				return $groupnum;
}

//gets username from the userid, needed in getcomments($groupnum) section


function getnamefromid($userid){

$userid = "SELECT username from user where user.id = '".$userid."';";
		//echo $groupquery;
				$found = mysql_query($userid);
				$row = mysql_fetch_array($found);
				$username=  $row["username"];
				
				return $username;


}


//gets userid from username, general purpose function

function getuserid($username) {


$userid = "SELECT id from user where user.username = '".$username."';";
		//echo $groupquery;
				$num = mysql_query($userid);
				$row = mysql_fetch_array($num);
				$userid=  $row["id"];
				
				return $userid;
}
	
//gets comments from group num and also uses getnamefromid to generate the username with the comment to display

function getcomments($groupnum){


$result = "SELECT * from display as d where d.groupnum = '".$groupnum."' ORDER BY currenttime desc;";
	
	
	$comments = mysql_query($result)or die(mysql_error()); 

 	while($info = mysql_fetch_array( $comments )) 	{
 	
				$userid = $info["userid"];
				$username = getnamefromid($userid);
				echo "<img src='images/person.png' alt='comment person' height='50' width='50'>";
				echo $username."<br/>"; 
				echo $info["comment"]."<br/>"; 
				echo "<hr/>";
							}
}


//this posts a comment
function postcomment($userid,$comment){
	
	
	$groupnum = getgroupid($userid);

	$time =microtime(); 
	
 	$insert = "INSERT INTO display (id,userid,groupnum,comment,currenttime)


 			VALUES ('', '".$userid."', '".$groupnum."', '".$comment."', '')";

 	$add_comment = mysql_query($insert);


}

function postcommentadmin($userid,$comment){
	$username =getnamefromid($userid); 
	$groupnum= getgroupfromowner($username);
	
	

	$time =microtime(); 
	
 	$insert = "INSERT INTO display (id,userid,groupnum,comment,currenttime)


 			VALUES ('', '".$userid."', '".$groupnum."', '".$comment."', '')";

 	$add_comment = mysql_query($insert);


}





//checks if the user has members added to their group

function hasMembers($username){
$groupnum = getgroupfromowner($username);
$query = "SELECT * from `user` inner join `group` as `g` on (`user`.`id` = `g`.`userid`) where `g`.`groupnum` = '".$groupnum."';";

//echo $query; 
$i=0;

//echo $query; 
$members = mysql_query($query)or die(mysql_error()); 

if (mysql_num_rows($members)==0){ return false;} else { return true; }

}

//gets the members			
function getMembers($username) {

//this function gets all of the members and adds them into an object
//if no members it asks the user to make members
$groupnum = getgroupfromowner($username);
if (is_null($groupnum)){ //there is no group

//makegroup();
echo "need to make a group!";

} else 

{

//get members from groupnum, put them into an object



  
  //get all the member of the group
$query = "SELECT * from `user` inner join `group` as `g` on (`user`.`id` = `g`.`userid`) where `g`.`groupnum` = '".$groupnum."';";

//echo $query; 
$i=0;

//echo $query; 
$members = mysql_query($query)or die(mysql_error()); 

 	while($info = mysql_fetch_array( $members )) 	{
		${"user" . $i} = new User($info['id'],$info['username'],${"newpass".$i}, $info['email'], $info['phone'],0);	
		$i++; //increments number of people in the group
		}
	
	 $members = array();
// echo "owner".$owner;
 
 $group = new Group ($username,$members); //owner, members
 

// echo "here's your content";
 
$ownerval = $group->getOwner();

// echo "Here's your owner".$ownerval;
 
 for ($x=0; $x<=$i; $x++){
 array_push($group->members, ${"user".$x});
}
  	//echo $groupnum."<br/>";
  	
  	echo "Number of group members in group: ". $i."<br/>";
  	echo "Group owner: ".$ownerval."<br/>";
  	echo "<a href='addtasks.php'><img src='images/addtasks.png' alt='comment person' height='50' width='50' border='1px solid black;'></a><br/>addtask";
  	
  	
  	 for ($x=0; $x<=$i-1; $x++){
	$group->printmembers($x);
	echo"<hr/>"; 


}

}


				
				}


function hastasks($groupnum){

$query = "SELECT * from `tasks` inner join `group` as `g` on (`tasks`.`groupnum` = `g`.`groupnum`) where `g`.`groupnum` = '".$groupnum."';";


$tasks = mysql_query($query)or die(mysql_error()); 

if (mysql_num_rows($tasks)==0){ return false;} else { return true; }

}
			
function gettasks($groupnum){

if (hastasks($groupnum)) {
$query = "SELECT * from `tasks` where `tasks`.`groupnum` = '".$groupnum."';";

$tasks = mysql_query($query)or die(mysql_error()); 
echo "<br/>"."<strong style='color:#000000'>Here are your tasks: </strong>"."<br/>";
 
while($info = mysql_fetch_array( $tasks )) 	{
echo $info['description']."<br/>";

}

}


}


?>