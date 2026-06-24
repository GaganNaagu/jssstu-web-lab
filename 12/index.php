<!DOCTYPE html>
<html>
<head>
    <title>Login Authentication</title>
</head>
<body>
    <h2>Login Page</h2>
    <form method="post" action="">
        <label>Username:</label>
        <input type="text" name="username" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <button type="submit" name="login">Login</button>
    </form>

    <?php
    if (isset($_POST['login'])) {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $file = 'users.txt';
        $isAuthenticated = false;

        if (file_exists($file)) {
            $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach ($lines as $line) {
                list($storedUser, $storedPass) = explode(',', $line);
                if ($username === trim($storedUser) && $password === trim($storedPass)) {
                    $isAuthenticated = true;
                    break;
                }
            }
        }

        if ($isAuthenticated) {
            echo "<h3 style='color:green;'>Login Successful! Welcome, " . htmlspecialchars($username) . ".</h3>";
        } else {
            echo "<h3 style='color:red;'>Login Failed! Invalid Username or Password.</h3>";
        }
    }
    ?>
</body>
</html>
