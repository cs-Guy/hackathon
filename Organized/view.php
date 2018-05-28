<?php
$host="localhost";  
$username="hack";  
$password="12345";  
$db_name="Hackathon";  
$tbl_name="users";  


$conn = mysqli_connect(".$host.", "$username", "$password","Hackathon")or die("cannot connect"); 

$sql = "select * from Forum,users where Forum.user_id = users.username order by Forum.date_time";
$query = mysqli_query($conn,$sql);

?>
<html>
    <head></head>
    <body>
    <table style="width:100%">
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
    </body>
</html>


</table>



