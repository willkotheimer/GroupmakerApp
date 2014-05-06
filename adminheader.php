<!DOCTYPE html>

<html>


<body>

<head>



  <link rel="stylesheet" type="text/css" href="css/admin.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<style type="text/css">
 
#sortable { list-style-type: none; margin: 0; padding: 0; width: 40%; }
#sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
#sortable li span { position: absolute; margin-left: -1.3em; }

</style>
 <script>
$(function() {
$( "#sortable" ).sortable();
$( "#sortable" ).disableSelection();
});
</script>

<script type="text/javascript">


//document.write(num);
    // document.write("<div style='font-size:100px'>"+ppl.value+"</div>"); 
 // for (var i=0;i<value;i++){
   // var btn=document.createElement("BUTTON");
//var t=document.createTextNode("CLICK ME");
//btn.appendChild(t);
//node = document.getElementById("number");
//node.appendChild(btn);



function changeHandler(target){
    alert("You changed to "+target.value);
}




function go2(val)
{
t=document.createTextNode(val);
document.appendChild(t);
}




</script>
 





</head>


<body>

<?php

echo "<div style='height: 50px; width: 100%; background-color: blue; color: white; font-size: 18px; font-family: Tahoma;
			text-align: center;'>".$username."'s Groupa App</div>";
 
 
 
?>