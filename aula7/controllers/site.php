<?php
    class siteController
    {
        public function home(){
            require_once("views/templates/header.php");
            require_once("views/pages/sobre.php");
            require_once("views/templates/footer.php");
        }

        public function produto(){
            require_once("views/templates/header.php");
            require_once("views/pages/produtos.php");
            require_once("views/templates/footer.php");
        }
    }
    


?>