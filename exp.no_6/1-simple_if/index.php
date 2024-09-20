<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of Rectangle</title>
</head>
<body>
    <h1>Calculate Area of Rectangle</h1>

    <!-- The HTML form -->
    <form action="" method="post">
        <label for="length">Enter Length:</label>
        <input type="number" id="length" name="length" required>
        <br><br>
        <label for="width">Enter Width:</label>
        <input type="number" id="width" name="width" required>
        <br><br>
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        // Get length and width values
        $length = floatval($_POST['length']);
        $width = floatval($_POST['width']);

        // Calculate the area of the rectangle
        $area = $length * $width;

        // Display the result
        echo "<h2>The area of the rectangle is: $area</h2>";
    }
    ?>
    
</body>
</html>
