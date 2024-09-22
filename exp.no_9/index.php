<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling</title>
</head>
<body>
    <h1>File Handling - Write/Read a Sentence</h1>

    <form action="" method="post">

        <select name="operation">
            <option value="Write">Write</option>
            <option value="Read">Read</option>
        </select>

        <label for="filename">Enter your file Name: </label>
        <input type="text" name="filename" required><br><br>

        <label for="sentence">Enter a Sentence to Write:</label><br>
        <input type="text" name="sentence" size="50" placeholder="Enter your sentence here"><br><br>


        <input type="submit" value="submit">
    </form>

</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $filename = $_POST["filename"];
    $operation = $_POST["operation"];

    if ($operation == "Write"){
        $sentence = $_POST["sentence"];

        $file = fopen($filename, "w");
        if($file){
            fwrite($file, $sentence);
            fclose($file);
            echo "<p>Sentence written to file: $filename</p>";
        } else{
            echo "<p>Unable to open file for writing.</p>";
        }
    } else if ($operation == "Read"){
        if(file_exists($filename)){
            $file = fopen($filename, "r");

            if($file){
                $content = fread($file, filesize($filename));
                fclose($file);
                echo "<h2>File content :</h2> <pre>$content</pre>";
            } else {
                echo "<p>Unable to open the file for reading.</p>";
            }
        } else {
            echo "<p>File does not exists. </p>";
        }

    } else {
        echo "$operation is not found.";
    }
}
?>
