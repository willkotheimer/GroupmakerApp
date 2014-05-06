<?php
session_start();
include('config.php');
include('userobject.php');
include('functions.php');


$username = $_COOKIE['ID_my_site'];
$owner = $username;
if (checkadmin($username))

{

$groupnum = getgroupfromowner($username); 
include('adminheader.php');
echo "Group number=".$groupnum."<br/>";
 
  
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
  	?>
  	
  	<script type="text/javascript">
    
    var i = 1; 
    function submitHandler(form){
     
      

//get
var task = $('#task').val();

$( "#sortable" ).append("<li class='ui-state-default'><span class='ui-icon ui-icon-arrowthick-2-n-s'></span>"+task+"</li>");
$("#message").append("<input type='hidden' name='task"+i+"' id='task' value='"+task+"'/>"+i+"."+task+"<br/>");
i++;  
$('#tasknum').val(i-1); 
//set
//$('#txt_name').val('bla');


return false; 
}

 function submitHandler2(form){
 $("#message").prepend("<input type='hidden' name='number' id='number' value='"+i+"'/>");
 
 return true;
 
 }
	</script>
  	
  	<div id="left">
  	<form onsubmit="return submitHandler(this);">
  	<label for="tasks">Add a task</label>
  	<input type="text" name="task" id="task" onclick="this.value = '';" value="value"/>
  	<input type="image" value="Submit" id="submit" name="submit" src="/images/addtasks.png" height="50" width="50" border="1px solid black">
  	</form>
  	</div>
  	<div id="right">
  	<form id="message" action="tasksave.php" method="post" onsubmit="submitHandler2(this);">
  	<label for="message">Your tasks</label>
  	<textarea rows="3" cols="30" name="personal_message" placeholder="add your message" id="personal_message"></textarea>
  	<input type='hidden' name='tasknum' id='tasknum' value=''/>
  	<input type="Submit" id="submit" name="submit">
  	<br/>
  	</form>
  	</div><br/>
  	<br/>
  	<br/>
  	<br/>
  	<ul id="sortable"></ul>
  	
  	<?php
  	
  	
  	echo "<br/>";
  	 for ($x=0; $x<=$i-1; $x++){
	$group->printemails($x);
	
	
  	 
	}
	echo "<br/><a href='logout.php'>Logout</a>";
} else {

print "you are not the admin.";
print $_GET['admin'];
}

?>