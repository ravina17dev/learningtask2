<!DOCTYPE html>
<html>
<head>
    <title>..:Login:..</title>
</head>
<body>

<h1>Login Form</h1>

<form method="post" action="">
    <label>Username</label><br>
    <input type="text" name="userName" required><br><br>

    <label>Password</label><br>
    <input type="password" name="userPassword" required><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
$correct_username = "brenjun";
$correct_password = "ffff";

if (isset($_POST['submit'])) {

    $input_username = $_POST['userName'];
    $input_password = $_POST['userPassword'];

    if ($input_username === $correct_username && $input_password === $correct_password) {
        header("Location: welcome.php");
        exit();
    } else {
        echo "<script>('Login Failed. Please try again.');</script>";
    }
}
?>


</body>
</html>