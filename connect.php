<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $con = mysqli_connect("localhost", "root", "","");
        if (!$con)
        {
            echo ("Nie udało się zalogować do: " mysqli_connect_error());
            exit();
        }
        echo "Udało się zalogować";
        mysqli_close($con);
    ?>
</body>
</html>