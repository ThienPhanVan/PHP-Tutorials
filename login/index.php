<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form method="POST">
        <div class="login">
            <h2>Login</h2>
            <label>Username:</label>
            <input type="text" name="username" size="30" placeholder="Username">

            <label>Password:</label>
            <input type="password" name="password" size="30" placeholder="Password">

            <input type="submit" value="Sign in">
        </div>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === "admin" && $password === "123") {
            echo "<h3>Welcome <span style='color:red'>' $username '</span> to website!</h3>";
        } else {
            echo "<h3> <span style='color:red'>' Login Error! '</span></h3>";
        }
    }
    ?>
</body>

</html>