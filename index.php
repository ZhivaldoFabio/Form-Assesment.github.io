<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Form Assesment</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="scriptsheet" href="scriptsheet.js">
</head>

<body class="logpage">
    <div class="center">
        <h1>Log-in PHP</h1>
        <form action="" method="POST">
            <div class="text_field">
                <input class="inputlogin" name="username" type="text" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="text_field">
                <input class="inputlogin" name="password" type="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
            <input class="inputlogin" name="submit_login" type="submit" value="Login">
            <div class="signup_link">
                Not a Care Giver? <a href="www.satunama.org">Contact Support.</a>
            </div>

            <?php
            session_start();

            if (isset($_POST["submit_login"])) {
                $username = $_POST["username"];
                $password = $_POST["password"];

                if ($username === "admin" && $password === "admin123") {
                    // Login successful, store user information in session and redirect to another page
                    $_SESSION["username"] = $username;
                    header("Location: form_assesment.php"); // Replace "welcome.php" with the desired page after successful login
                    exit();
                } else {
                    // Invalid username or password, display error message
                    echo "<script>alert('Invalid username or password. Please retry.');</script>";
                }
            }
            ?>

        </form>
    </div>

</body>

</html>