<?php
public class AuthControllers(){




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


/*

--login();


cadastro();
logout();
esqueciSenha();
trocarSenha();
verificarSessao();   ????

*/






}
?>