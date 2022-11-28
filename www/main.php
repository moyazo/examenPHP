<?php 

include "./app/Videoclub.php";
include "index4.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/custom.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <title>INDEX - VideoClub</title>
</head>
<body>


        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Clientes</th>
                        <th scope="col">Soportes</th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row"><?php
                        
                        $array_socios = $vc->listarSocios();
                        
                        
                        ?></td>
                        <td><?php
                        
                        
                        $array_soportes = $vc->listarProductos();
                        
                        ?></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
        

    <div id="container" class="container-fluid d-flex flex-column justify-content-center w-50 h-100">
        <caption>MAIN.PHP - VideoClub</caption>
        <form action="index.php" method="post">
            
            <button type="submit" class="btn btn-primary" value="CERRAR SESIÓN" name="logout">CERRAR SESIÓN</button>
        </form>
    </div>
</body>
</html>