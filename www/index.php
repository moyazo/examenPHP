<?php

echo "<br><br>Bienvenido al inicio de sesión del Videoclub ☺<br><br>";

if(isset($_POST["logout"])){
    echo "Has cerrado Sesión<br><br>";
    session_start();
    session_destroy();

}else{
    
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/custom.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>INDEX - VideoClub</title>
</head>
<body>
    <h1>VIDEOCLUB - PHP</h1>
    <div id="container" class="container-fluid d-flex flex-column justify-content-center w-50 h-100">
        <caption>LOG IN - VideoClub</caption>
        <form action="validation.php" method="post">
            <div class="col-md-4">
                <label for="name" class="form-label">USER NAME</label>
                <input type="text" class="form-control" id="name" name="name" value="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">EMAIL</label>
              <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="abc@mail.com">
            </div>
            <div class="mb-3">
              <label for="ps" class="form-label">PASSWORD</label>
              <input type="password" class="form-control" name="ps" id="ps" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary" value="sumbit" name="sumbit">SUBMIT</button>
        </form>
    </div>
</body>
</html>