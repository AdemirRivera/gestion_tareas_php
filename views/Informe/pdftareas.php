<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte Tarea por Empleado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <?php
        require_once 'views/header.php';
    ?>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-lg-10 mt-4">
                <div class="card mt-4">
                    <div class="card-header bg-primary text-white">
                        <h5>Filtro</h5>
                    </div>
                    <div class="card-body">                    
                        <form action="<?=constant('URL')?>informe/pdfTareas" method="POST" target="_blank">                
                            <div class="row">
                            <div class="col-6">
                                    Nombre del Empleado 
                                    <input type="text" class="form-control" name="txtNombre">
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary mt-3">Generar PDF</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        require_once 'views/footer.php';
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>