<?php
require_once("config.php");
require_once("controlador/controller.php");
if(isset($_GET['m'])):
    $metodo =   $_GET['m'];
    if(method_exists('modeloController',$metodo)):
        modeloController::{$metodo}();
    endif;
else:
    modeloController::index();
endif;
?>