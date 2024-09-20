<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial </title>
</head>
<body>
    <form action="" method="post">
        <label for="number">Enter your Number :</label>
        <input type="number" name="number" min="0" required><br><br>

        <input type="submit" value="calculate factorial">
    </form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $number = intval($_POST["number"]);
    $factorial = 1;

    for($i= 1;$i <= $number; $i++){
        $factorial *= $i;
    }

    echo "<h1>Factorial of $number is $factorial.</h1>";
}
?>