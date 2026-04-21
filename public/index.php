<?php

echo "teste1, back funcionando";

echo "<br/> teste 2";

//rota login ===========================================================
$acao = $_GET['acao'];
if($acao == "login"){

    $controllers = new AuthControllers();
    $controllers->login();

}

?>