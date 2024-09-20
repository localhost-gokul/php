<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
    <h1>Generate Multiplication table</h1>
    <form action="" method="post">
        <label for="number">Enter your number :</label>
        <input type="number" name="number" required> <br><br>

        <input type="submit" value="submit" value="Generate Table">
    </form>

</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $number = intval($_POST["number"]);
    $i = 1;

    echo "<h2>Multiplication Table for $number</h2>";

    while($i <= 10){
        $result = $number * $i;
        echo "<p>$i x $number = $result</p>";
        $i++;
    }
}
?>