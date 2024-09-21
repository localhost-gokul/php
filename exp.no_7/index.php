<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php function</title>
</head>
<head>
    <h1>Addition of Two numbers:</h1>
    <form action="" method="post">
        <label for="num1">Enter first number  :</label>
        <input type="number" name="num1" >
        <br><br>
        <label for="num2">Enter Second number :</label>
        <input type="number" name="num2" >
        <br><br>

        <input type="submit" value="Add">
    </form>
</head>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    function Addtion($num1, $num2){
        $sum = $num1 + $num2;
        echo "<h2>Addition of $num1 + $num2 = $sum</h2>";

    }
    Addtion($num1, $num2);

}
?>