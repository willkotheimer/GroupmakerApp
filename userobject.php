<?php 


// userobject.php

//has User, Group Objects


class User {

//has a name
//has an email
//has a username
//has a password
//has a phone number

public $name;
public $email;
public $password;
public $phonenumber;
public $level; 

function __construct($id,$username,$password,$email,$phonenumber,$level=1) {
$this->id = $id; 
$this->name = $username;
$this->email = $email;
$this->password = $password;
$this->phonenumber = $phonenumber;
$this->level = $level;

}

function getEmails(){
echo "<br/>email: ".$this->email;

}

function getValues() {
echo "<br/>id: ".$this->id; 
echo "<br/>uername: ".$this->name; 
echo "<br/>email: ".$this->email;
echo "<br/>phone number: ".$this->phonenumber;
echo "<br/>level: ".$this->level;
}

}


//task object 


// Group Object


class Group {


//has members
//has owner
//has tasks 


public $members=array();
public $owner;
public $x=0;
//public $tasks[] = new User;


function __construct($owner, $members=array()) {

$this->owner = $owner;
$this->members = $members; 

}

function __destruct() {
      
   }

function printmembers($x){

return $this->members[$x]->getValues(); 

}

function printemails($x){

return $this->members[$x]->getEmails(); 

}


function addMember(){

array_push($this->members,$user);
 
}



function getOwner(){
return $this->owner;
}


function getMembers(){
echo $this->members->count(); 

}




}


?>