<?php
define('DB_HOST', 'ggeasyprogramming.hackathon.ilab.sit.kmutt.ac.th/phpMyAdmin');
define('DB_NAME', 'Hackathon');
define('DB_USER','hack');
define('DB_PASSWORD','12345');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
/* $ID = $_POST['user'];
$Password = $_POST['pass']; */
function SignIn(){
    session_start();
    if(!empty($_POST['user'])){
        $query = mysql_query("SELECT * FROM UserName where userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error());
        $row = mysql_fetch_array($query) or die(mysql_error());
        if(!empty($row['userName']) AND !empty($row['pass'])){
            $_SESSION['userName'] = $row['pass'];
            echo "SUCCESSFULLY LOGIN";
        }
        else{
            echo "SORRY...YOU'VE ENTERED THE WRONG USERNAME OR PASSWORD... PLEASE TRY AGAIN...";
        }
    }

}
if(isset($_POST['submit'])){
    SignIn();
}

?>

