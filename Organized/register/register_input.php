<?php

$host="localhost";  
$username="hack";  
$password="12345";  
$db_name="Hackathon";  
$tbl_name="users";  
 

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
 
 
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$user=$_POST['username'];
$pass=$_POST['password'];
$email=$_POST['email'];
$gender=$_POST['gender'];
 
$datetime=date("d/m/y h:i:s"); 
 
$sql="INSERT INTO $tbl_name(firstname, lastname, email, username, password, gender) VALUES ('$firstname','$lastname','$email','$user','$pass','$gender')";
$result=mysql_query($sql);
 
if($result){
    header('Location: view_member.php');
}
else {
    echo "ERROR";
}
mysql_close();
?>