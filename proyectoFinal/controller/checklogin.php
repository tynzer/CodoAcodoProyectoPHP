<?php 
    require_once("../dao/UsuarioDAO.php");

    $usuarioDAO = new UsuarioDAO();
    $usuValido = $usuarioDAO->validarUsuarioYPass($_POST['inputEmail'], $_POST['inputPassword']);

    if($usuValido) {
        header("Location: ../view/pedido.html");
        exit;
    } else {
        echo "Usuario o password incorrectos <br>";
    }


?>