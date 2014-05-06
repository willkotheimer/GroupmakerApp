<?php
include('functions.php');
include('config.php');

$comment = mysql_real_escape_string($_POST['comment']);
$username = $_COOKIE['ID_my_site']; 

if( checkadmin($username)){

$userid = getuserid($username);
postcommentadmin($userid,$comment);
header('Location: admin.php');
} else {

$userid = getuserid($username);
postcomment($userid,$comment);
header('Location: users.php');
}





?>