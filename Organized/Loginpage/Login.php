<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Login Form</title>
        <link rel="stylesheet" href="style.css">
    <body>
        <form action="login_back.php" method="post">
        <div class="login-box">
            <h1>Login</h1>
            <div class="textbox">
                <input type="text" placeholder="Username" name="user" value="" require>
            </div>

            <div class="textbox">
                <input type="password" placeholder="Password" name="pass" value="" require>
            </div>
            <input class="btn" type="submit" name="" value="Sign in">
        </div>
        </form>
    </body>
    </head>
</html>