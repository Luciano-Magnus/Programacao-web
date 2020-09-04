<?php
    if (!isset($_GET["controller"])) {
        require_once("controllers/site.php");
        $site = new siteController();
        $site -> home();
    }else{
        switch ($_REQUEST['controller']) {
            case 'site':
                require_once("controllers/site.php");
                $site = new siteController();
                if (!isset($_GET["acao"])) {
                    $site -> home();
                }else {
                    switch ($_REQUEST['acao']) {
                        case 'home':
                            $site -> home();
                        break;
                        
                        case 'home':
                            $site -> produtos();
                        break;
                      
                    }
                }
            break;

        
        }
    }

    if (!isset($_GET["controller"])) {
        require_once("controllers/registro.php");
        $cliente = new registro();
        $cliente -> index();
    }else {
        switch ($_REQUEST['controller']) {
            case 'registro':
                require_once("controllers/registro.php");
                $cliente = new registro();
                if (!isset($_GET["acao"])) {
                    $cliente -> index();
                }else{
                    switch ($_REQUEST['acao']) {
                        case 'registrar':
                            $cliente -> registrarCliente();
                            break;
                        case 'mostrarRegistro':
                            $cliente -> registroView();
                            break;
                        case 'listar':
                            $cliente -> listarClientes();
                    }
                }
                break;
        }
    }
?>