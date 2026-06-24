<!DOCTYPE html>
<html>
<head>
    <title>Store Data in File</title>
</head>
<body>
    <h2>Enter Information</h2>
    <form method="post" action="">
        <label>Information:</label><br>
        <textarea name="info" rows="4" cols="30" required></textarea><br><br>
        <button type="submit" name="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $info = $_POST['info'];
        $file = 'data.txt';

        // Append to file
        file_put_contents($file, $info . PHP_EOL, FILE_APPEND);

        echo "<h3>Information stored successfully!</h3>";
        echo "<b>You entered:</b> " . htmlspecialchars($info);
    }
    ?>
</body>
</html>
