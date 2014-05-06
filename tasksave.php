<?php
include('config.php');
include('userobject.php');
include('functions.php');


$username = $_COOKIE['ID_my_site'];
$owner = $username;


//get tasknum

$tasknum = $_POST['tasknum'];

//loop and get description of each task

for($tasks=1; $tasks<=$tasknum; $tasks++){


${"task".$tasks} = $_POST['task'.$tasks];

}


//get groupnum
$groupnum = getgroupfromowner($username);
//done is automatically set to 0

$done=0; 

for ($x=1; $x<=$tasknum; $x++){


 	$insert = "INSERT INTO tasks (taskid, description, groupnum,done)

 			VALUES ('', '".${"task".$x}."', '".$groupnum."', '".$done."')";

 	$add_tasks = mysql_query($insert);
 	
 	}

header ('Location: admin.php'); 




?>