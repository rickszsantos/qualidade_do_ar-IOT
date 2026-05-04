<?php
require_once "../app/models/Usuario.php";
class AuthController {




public function login() {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuario = Usuario :: buscarPorEmail($email);


    if($usuario && $senha == $usuario->verificarSenha($senha)){
        //login sucesso, mandar para home
    }
    else{
        echo "senha ou email invalido";
    }


}


public function cadastro() {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


   
    //validarsenha($senha); colocar depois
   // if(validarEmail($email) && validarSenha($senha)){

     //   $usuario = new Usuario($nome, $email, $senha);

    //}
     
    

}


/*

--login();
--cadastro();


logout();
esqueciSenha();
trocarSenha();
verificarSessao();   ????

*/






}
?>