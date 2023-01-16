<?php
    session_start();
    $_SESSION['phn'] = $_POST['phn'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="col-sm-6">
    <?php
    echo  "Your Name IS -> ".$_SESSION['name'] ."</br>";
    echo  "Your Email IS -> ".$_SESSION['email']."</br>";
    echo  "Your Cell Number IS -> ".$_SESSION['phn']."</br>";
?>
    </div>
    </div>
</body>
</html>