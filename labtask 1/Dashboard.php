<?php
    if(!isset($_COOKIE["username"])){
        header("Location: Login.php");
    }
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1>Welcome <?php echo $_COOKIE["username"];?>
    </h1>
</body>

</html>