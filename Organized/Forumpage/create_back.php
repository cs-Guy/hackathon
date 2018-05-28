<?php

$host="localhost";  
$username="hack";  
$password="12345";  
$db_name="Hackathon";  
$tbl_name="Forum";  
 

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
 
 
$user=$_POST['title'];
$pass=$_POST['description'];
$usr=$_POST['usrID'];
$datetime=date("d/m/y h:i:s");
 
$sql="INSERT INTO `Hackathon`.`Forum` (`id`, `title`, `description`, `date_time`, `user_id`) VALUES (NULL, '$user', '$pass', CURRENT_TIMESTAMP, '$usr')";
$result=mysql_query($sql);
 
if($result){
    header('Location: view_member.php');
}
else {
    echo "ERROR";
}
mysql_close();
?>