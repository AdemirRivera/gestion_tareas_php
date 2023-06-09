<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio</title>
    <link rel="stylesheet" href="<?=constant('URL')?>public/sweetalert/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <?php
        require_once 'views/header.php';
    ?>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-lg-10 mt-4">
                <h1>Usuario: <?=$_SESSION['usuario']?></h1>
                <?php
                    if($_SESSION['nivel']==1)
                    {
                ?>
                <a href="<?=constant('URL')?>sitio/nuevo" class="btn btn-block btn-primary mt-3">Agregar sitio</a>   
                <?php        
                    }
                ?>
                <h2 class="text-center p-3 text-primary">SITIOS</h2> 
                <table class="table table-hover" id="sitios">
                    <thead class="thead-dark text-white text-center">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Sitio</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Pais</th>
                        <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
        require_once 'views/footer.php';
    ?>
    <script>
        var url = "<?=constant('URL')?>"; 
    </script>
    <script src="<?=constant('URL')?>public/js/jquery-3.6.0.min.js"></script>
    <script src="<?=constant('URL')?>public/js/sitio.js"></script>
    <script src="<?=constant('URL')?>public/js/eliminar.js"></script>
    <script src="<?=constant('URL')?>public/sweetalert/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
