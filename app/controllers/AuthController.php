<?php
require_once "../app/models/Usuario.php";
public class AuthController(){




public function login() {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuario = Usuario :: buscarPorEmail($email);


    if($usuario && $senha == $usuario->verificarSenha($senha)){
        //login sucesso, mandar para home
    }
    else{
        //email e senha invalido
    }


}


public function cadastro() {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //colocar a validação aqui
    //validarEmail($email); colocar depois
    //validarsenha($senha); colocar depois
    $usuario = new Usuario($nome, $email, $senha);

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