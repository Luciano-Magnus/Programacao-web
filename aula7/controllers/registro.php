<?php

    class registro{
        public function registrarCliente()
        {
            require_once("views/templates/header.php");
            require_once("views/pages/registroView.php");
            require_once("views/templates/footer.php");
        }

        public function index()
        {
            
        }


        public function registroView()
        {
            $cadastro = array( 
               'nome' => $_POST['nome'],
               'email' => $_POST['email']
            );

            require_once("views/templates/header.php");
            require_once("views/pages/mostrarRegistro.php");
            require_once("views/templates/footer.php");


        }

        public function listarClientes()
        {
            require_once('models/clientesModel.php');
            $clientes = new clientesModel();
            $clientes -> listarClientes();
            $result = $clientes -> getConsulta();

            $arrayClientes = array();

            while($linha = $result -> fetch_assoc()){
                array_push($arrayClientes, $linha);
            }

            require_once("views/templates/header.php");
            require_once("views/pages/mostrarClientes.php");
            require_once("views/templates/footer.php");
        }


    }

?>