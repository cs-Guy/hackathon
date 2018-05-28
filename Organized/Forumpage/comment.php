<?php
$host="localhost";  
$username="hack";  
$password="12345";  
$db_name="Hackathon";  
$tbl_name="users"; 
$com = $_POST["comment"];
$fid = $_POST["fid"];
$uid = $_POST["uid"];
echo $uid;
session_start();
$conn = mysqli_connect(".$host.", "$username", "$password","Hackathon")or die("cannot connect"); 
$sql = "insert into Comment(comment,forumid,userid)
 values('".$com."','".$fid."','".$uid."')";
 $query = mysqli_query($conn,$sql);
 if($query){
    echo "insert successful";
 } else {
     echo $sql;
     echo "insert failed";
 }
?>