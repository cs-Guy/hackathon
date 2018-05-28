<?php
session_start();
$host="localhost";  
$username="hack";  
$password="12345";  
$db_name="Hackathon";  
$tbl_name="users";  
 

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
 
 
$user=$_POST['user'];
$pass=$_POST['pass'];

$query = "select username, password FROM users WHERE username='$user' and password='$pass'";
$result = mysql_query($query);
$count = mysql_fetch_assoc($result);
 
if($count["username"] == $user && $count["password"] == $pass){
    $_SESSION['username'] = $count["username"];

    header('Location: view_member.php');
}
else {
echo "Wrong Username or Password";
}
mysql_close();
?>