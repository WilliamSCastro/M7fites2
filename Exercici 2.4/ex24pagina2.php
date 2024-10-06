<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 

        if (isset($_POST["contrasenya1"]) && isset($_POST["contrasenya2"])) {
            
            $password_1 = $_POST["contrasenya1"];
            $password_2 = $_POST["contrasenya2"];

            if ($password_1 != $password_2){
                echo "<p>ERROR: contraseñas no coinciden</p>";
            }

            if (!ctype_alnum($password_1) || ctype_alpha($password_1) ){
                echo "<p>ERROR: contraseña no tiene mínimo un núm</p>";
            }
        }

    ?>
    
</body>
</html>