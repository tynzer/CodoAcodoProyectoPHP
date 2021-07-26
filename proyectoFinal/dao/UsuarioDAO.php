<?php 

class UsuarioDAO {

    public function validarUsuarioYPass($usuario, $contrasenia) {
        require_once("../dataBase/ConexionDB.php");

        $conexionDB = new ConexionDB("localhost","root","","cacproyecto");
        $conexionDB->conectar();
    
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave = '$contrasenia'";
        $conexionDB->ejecutar($sql);
    
        return $conexionDB->cantFilas() > 0;
    }

    public function validarUsuario($usuario) {
        require_once("../dataBase/ConexionDB.php");

        $conexionDB = new ConexionDB("localhost","root","","cacproyecto");
        $conexionDB->conectar();
    
        $sql = "SELECT * FROM usuarios WHERE usuario = $usuario";
        $conexionDB->ejecutar($sql);
    
        return $conexionDB->cantFilas() > 0;        
    }
}

?>