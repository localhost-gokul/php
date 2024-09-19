<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of Rectangle</title>
</head>
<body>
    <h1>Calculate Area of Rectangle</h1>
    <form action="index.php" method="post">
        <label for="length">Enter Length:</label>
        <input type="number" id="length" name="length" step="0.01" required>
        <br><br>
        <label for="width">Enter Width:</label>
        <input type="number" id="width" name="width" step="0.01" required>
        <br><br>
        <input type="submit" value="Calculate Area">
    </form>
</body>
</html>

<?php
// Check if the form has been submitted
if (isset($_POST['length']) && isset($_POST['width'])) {
    // Retrieve length and width from the form
    $length = floatval($_POST['length']);
    $width = floatval($_POST['width']);

    // Calculate the area of the rectangle
    $area = $length * $width;

    // Display the result
    echo "<h1>The area of the rectangle is: $area</h1>";
} else {
    // The form has not been submitted yet
    echo "<h1>Please enter the length and width of the rectangle.</h1>";
}
?>
