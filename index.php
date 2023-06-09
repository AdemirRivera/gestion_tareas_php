<?php

    require_once 'core/app.php';
    require_once 'core/database.php';
    require_once 'core/view.php';
    require_once 'core/model.php';
    require_once 'core/controller.php';

    require_once 'config/constant.php';
    require_once 'public/tcpdf/tcpdf.php';

    error_reporting(E_ALL);
    ini_set('ignore_repeated_errors', TRUE);
    ini_set('display_errors', FALSE);
    ini_set('log_errors', TRUE);
    ini_set("error_log", "php-error.log");
    error_log("Inicio de Aplicacion WEB");

    $app = new App();
    
?>