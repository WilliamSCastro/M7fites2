<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
        if (isset($_POST["colors"])) {
            echo "<body style='background-color:".$_POST["colors"].";'>";
        } else {
            echo "<body>";
        }
    ?> 

    <form action="" method="POST">
        <label for="lang">COLOR</label>
        <select name="colors" id="lang">
            <option value="blue">BLUE</option>
            <option value="red">RED</option>
            <option value="green">GREEN</option>
        </select>
        <input type="submit" value="SELECT COLOR" />
    </form>  

    

</body>
</html>