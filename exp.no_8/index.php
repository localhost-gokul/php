<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php class</title>
</head>
<body>
    <h1>Student Registration Form</h1>
    <form action="" method="post">
        <label for="rollno">Enter Your Rollno :</label>
        <input type="number" name="rollno"> <br><br>

        <label for="name">Enter Your Name :</label>
        <input type="text" name="name" > <br><br>

        <label for="age">Enter Your Age :</label>
        <input type="number" name="age" > <br><br>

        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php
class student{
    public $rollno;
    public $name;
    public $age;
}
$student1 = new student();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $student1 -> rollno = intval($_POST["rollno"]);
    $student1 -> name = strval($_POST["name"]);
    $student1 -> age = intval($_POST["age"]);

    echo "<h2>Student Details: </h2>";
    echo "-----------------------------<br><br>";

    echo "Roll Number = {$student1 -> rollno}<br><br>";
    echo "Name        = {$student1 -> name}<br><br>";
    echo "Age         = {$student1 -> age}<br><br>";
}

?>