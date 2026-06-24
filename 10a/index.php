<!DOCTYPE html>
<html>
<head>
    <title>Today's Date</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        .date-box { font-size: 24px; padding: 20px; border: 2px solid #4CAF50; display: inline-block; background-color: #f9fff9; }
    </style>
</head>
<body>

    <h2>Current Date</h2>
    <div class="date-box">
        <?php
            // Display today's date in dd-mm-yyyy format
            echo "Today's date is: " . date("d-m-Y");
        ?>
    </div>

</body>
</html>
