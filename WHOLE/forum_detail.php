<?php
$host="localhost";  
$username="hack";  
$password="12345";  
$db_name="Hackathon";  
$tbl_name="users";  


$conn = mysqli_connect(".$host.", "$username", "$password","Hackathon")or die("cannot connect"); 
$fid = $_GET["fid"];
$sql = "select comment, time, userid from Comment where Comment.forumid = ".$fid." order by Comment.time";
$query = mysqli_query($conn,$sql);
$fetch_title = mysqli_query($conn,"select title, description, user_id, date_time from Forum where id =".$fid);
$result = mysqli_fetch_assoc($fetch_title);
$title = $result["title"];
$desc = $result["description"];
$usr = $result["user_id"];
$date = $result["date_time"];
?>
<html>
    <head><link rel="stylesheet" type="text/css" href="../css/forum_detail.css"></head>
    <body>
    <table style="width:100%">
        <center><h1>Title: <?php echo $title; ?></h1><center>
            <tr>
                
                <th>User: <?php echo $usr; ?></th>
                <th>Date and time:<?php echo $date; ?></th>
                <td>Description: <?php echo $desc; ?></td>
                <th></th>
                <a href = 'view.php?fid=".$fid."'><button class="button1" type="submit">Back</button></a>
            </tr>
            <?php
                while($row = mysqli_fetch_assoc($query)){
                    $com = $row["comment"];
                    $time = $row["time"];
                    $userid = $row["userid"];
                    
                            echo "<tr><td>". $userid ."</td><td>". $com ."</td><td>". $time ."</td></tr>";
                            
                }
                ?>
</table>
<h2><legend>Comment</legend></h2>
                <center><textarea rows="4" cols="50"></textarea></center>
                <button class="button4 " type="submit">post</button>       
    </body>
    
</html>


