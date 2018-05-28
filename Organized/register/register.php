<!DOCTYPE html>
<html>
<head>
    <title>Sign-up</title>
</head>
<body>
<div class="header">
    <h1>Sign-up</h1>
</div>

<form action="register_input.php" method="post">
    <table>
        <tr>
            <td>Firstname:</td>
            <td><input type="text" name="firstname" class="textInput"></td>
        </tr>
        <tr>
            <td>Lastname:</td>
            <td><input type="text" name="lastname" class="textInput"></td>
        </tr>
        <tr>
            <td>Username:</td>
            <td><input type="text" name="username" class="textInput"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" class="textInput"></td>
        </tr>
        <tr>
            <td>Confirm Password:</td>
            <td><input type="password" name="password2" class="textInput"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" class="textInput"></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td><input type="radio" name="gender" value="Male">Male </td>
            <td><input type="radio" name="gender" value="Female">Female</td>
            <td><input type="radio" name="gender" value="Others">Others</td>
            <td></td>
        </tr>
        <tr>
            <td><input type="submit" value="Submit"></td>
        </tr>
</table>
</form>
</body>
</html>

