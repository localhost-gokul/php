<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initail-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <form action="" method="post">
        <label>Enter first number:</label>
        <input type="number" name="num1" required> 
        <br><br>

        <label>Enter Second number:</label>
        <input type="number" name="num2" required> 
        <br><br>

        <label>Select Operation</label>
        <select name="operation" required>
            <option value="Add">Addition</option>
            <option value="Subtract">Subraction</option>
            <option value="Multiply">Multiply</option>
            <option value="Divide">Divide</option>
        </select>
        <br><br>

        <input type="submit" name="submit" value="submit" >
    </form>
</body>
</html>