<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd check</title>
</head>
<body>

    <form action="" method="post">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" required>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST["number"]);

        // Check if the number is even or odd
        if ($number % 2 == 0) {
            echo "<h1>$number is an even number.</h1>";
        } else {
            echo "<h1>$number is an odd number.</h1>";
        }
    }
    ?>

</body>
</html>
