<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="login-box">
    <h2>Login Here</h2>
    <form method="POST">
        <label>Username</label>
        <input type="text" name="username" placeholder="Enter_Username">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter_Password">
        <input type="submit" name="submit" value="Login">
    </form>


</div>
</body>
<style>

    body {
        font-family: Arial, sans-serif;
        background-color: #eee;
    }

    .login-box {
        width: 300px;
        margin: 100px auto;
        background-color: #fff;
        border-radius: 5px;
        padding: 20px;
        box-shadow: 0px 0px 10px #ccc;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: none;
        box-shadow: 0px 0px 5px #ccc;
    }

    input[type="submit"] {
        background-color: #009688;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

</style>


</html>

<?php



include_once "realDBConnect.php";
global $conn;
if(isset($_POST["username"], $_POST["password"])) {
    $statement = $conn->prepare("INSERT INTO users(name,password) VALUES (:name,:pass);");
    $statement->execute([
        "name" => $_POST["username"],
        "pass" => $_POST["password"]
    ]);
}
