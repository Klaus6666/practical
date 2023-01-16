<?php
    session_start();
    $_SESSION['name'] = $_POST['name'];
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
        <form action="3.php" method="post">
            <div class="form-group">
                <label for="email">Enter Your email:</label>
                <input type="email" name="email" class="form-control">
            </div><br>
            <input type="submit" value="Submit" class="btn btn-primary" name="submit">
        </form>
    </div>
    </div>
    
</body>

</html>
