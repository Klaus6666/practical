<?php 

if(isset($_POST['submit'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');    
    
    if($connection) {
    
    echo "We are connected";
    
    } else {
    
    die("Database connection failed");
    
    }}

    $query = "INSERT INTO users(username,password)";
    $query.= "VALUES('$username','$password')";
    $result=mysqli_query($connection,$query);
    if (!$result){
        die('query failed' .mysqli_error());
    }

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
        <form action="klaus.php" method="post">
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </form>
    </div>
</div>
</body>
</html>