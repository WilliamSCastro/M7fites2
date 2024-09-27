<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        if(isset($_POST["quantity"])) 

        for($i = 1; $i <= $_POST["quantity"];$i++) {
            echo "<a href='/ex2_2_P3.php?comanda=$i'>COMANDA $i</a>";
            echo "<br>";
        }
    ?>
</body>
</html>