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
        <button type="submit" name="reset" formnovalidate>Clear File</button>
    </form>

    <?php
    $file = 'data.txt';

    if (isset($_POST['reset'])) {
        file_put_contents($file, ""); // Clears the file
        echo "<h3>File cleared successfully!</h3>";
    } elseif (isset($_POST['submit'])) {
        $info = $_POST['info'];

        file_put_contents($file, $info . PHP_EOL, FILE_APPEND);

        $storedData = file_get_contents($file);

        echo "<h3>Information stored successfully!</h3>";
        echo "<b>Contents of data.txt:</b><br>";
        echo $storedData;
    }
    ?>
</body>
</html>
