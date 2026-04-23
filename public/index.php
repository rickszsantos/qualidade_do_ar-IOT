<?php
require_once "../app/controllers/AuthController.php";

//rota login ===========================================================
$acao = $_GET['acao'] ?? 'home';




if($acao == "home"){

   require_once "../app/views/home.php";

}
elseif($acao == "login"){

    $controllers = new AuthController();
    $controllers->login();

}
elseif($acao == "cadastro"){

    $controllers = new AuthController();
    $controllers->cadastro();

}




?>



