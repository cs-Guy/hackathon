<?php
$servername = "ggeasyprogramming.hackathon.ilab.sit.kmutt.ac.th";
$username = "hack";
$password = "12345";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?> 

<!DOCTYPE html>
<html>
    <head>
        <title>Register Form</title>
        <link rel="stylesheet" type="text/css" href="regisstyle.css">
        </head>
    <body>
            <center><h1>Registration</h1></center>
            <form>
                    <fieldset>
                            <legend>Create Account:</legend>
                    Firstname: <a>*</a> <input type="varchar" placeholder="firstname" name= "firstname"><br>
                    <br>
                    Lastname: <a>*</a> <input type="varchar" placeholder="lastname" name= "lastname"><br>
                    <br>
                    ID: <a>*</a> <input type="varchar" placeholder="id" name= "id"><br>
                    <br>
                    Username: <a>*</a> <input type="varchar" placeholder="username" name= "username"><br>
                    <br>
                    Pasword: <a>*</a> <input type="password" placeholder="password" name="pwd"><br>
                    <br>
                    Confirm Password: <a>*</a> <input type="password" placeholder="confirm password" name="conpwd"><br>
                    <br>
                    Email: <a>*</a> <input type="varchar" placeholder="email" name= "email">@<input type="varchar" placeholder="exam.com" name= "examaemail">
                    <br>
                    <br>
                    What is your gender?<a>*</a> <br>
                    <input type="radio" name="sex" value="male">Male
                    <input type="radio" name="sex" value="female">Female<br>
                    <input type="radio" name="sex" value="Other_sex">Other<br>
                    <br>
                          <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p><br>
                            <button class="button2" type="button">Cancel</button>
                            <button class="button1" type="submit">Sign Up</button>
                        </fieldset>
            </form>
        </body>
</html>