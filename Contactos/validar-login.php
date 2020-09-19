<?php
    require_once 'conexion.php';
    require_once 'clases/Usuario.php';
    
    $id=$conexion->real_escape_string($_POST['user-id']);
    
    $password=$conexion->real_escape_string($_POST['user-password']);
    
    
    
    
    if(!empty($id) && !empty($password)){
        
        $resultado= $conexion->query("select * from usuario where id_usuario='$id' and password='$password'");
        $fila=$resultado->fetch_assoc();
        
        if($fila!==NULL){
            
            $_SESSION['user']=$fila;
            
            header('Location: Vistas/contactos.php');
            die();
        }
        $_SESSION['error-login']['autenticacion']="Error en id o contraseña";
    }
    
    $_SESSION['error-login']['campos']="Debes rellenar ambos campos";
    header('Location: Vistas/index.php');
    
?>
