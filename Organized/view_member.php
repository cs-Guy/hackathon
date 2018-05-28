<?php
$host="localhost";  
$username="hack";  
$password="12345";  
$db_name="Hackathon";  
$tbl_name="users";  
session_start();
$conn = mysqli_connect(".$host.", "$username", "$password","Hackathon")or die("cannot connect"); 

$sql = "select * from Forum,users where Forum.user_id = users.username order by Forum.date_time";
$query = mysqli_query($conn,$sql);

?>
<html>
<head>
<style>
#customers table>{
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 20px;
    padding-bottom: 20px;
    text-align: left;
    background-color: lightblue;
    color: white;   
}
</style>
</head>
<body>
<html>

<html>
    <head></head>
    <body>
    <table style="width:100%" id=customers>
            <tr>
                <th>Forum title</th>
                <th>User</th>
                <th>Date and time</th>
                <th></th>
            </tr>
            <?php
                
                while($row = mysqli_fetch_assoc($query)){
                    $id = $row["id"];
                    $title = $row["title"];
                    $des = $row["description"];
                    $dt = $row["date_time"];
                    $uid = $row["user_id"];
                    $uname = $row["firstname"];
                    $fid = $row["id"];

                    
                            echo "<tr><td>". $title ."</td>
                            <td>". $uname ."</td>
                            <td>". $dt ."</td>
                            <td> <a href = 'forum_detail.php?fid=".$fid."'>
                            view forum</a></td>
                            </tr>
                            ";
                            
                }
        
            ?>   
               <a href="create.php">Create</a>
    </body>
</html>


</table>