<?php
include_once "encabezado.php";
include_once "navbar.php";
session_start();

if(empty($_SESSION['usuario'])) header("location: login.php");

$id = $_GET['id'];
if (!$id) {
    echo 'No se ha seleccionado el usuario';
    exit;
}
include_once "funciones.php";
$usuario = obtenerUsuarioPorId($id);
?>
<div class="container">
    <h3>Editar usuario</h3>
    <form method="post">
        <div class="mb-3">
            <label for="usuario" class="form-label">Nombre de usuario</label>
            <input type="text" name="usuario" class="form-control" value="<?php echo $usuario->usuario;?>" id="usuario" placeholder="Escribe el nombre de usuario. Ej. Juan">
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre completo</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo $usuario->nombre;?>" id="nombre" placeholder="Escribe el nombre completo del usuario">
        </div>
        <div class="mb-3">
            <label for="contraseña" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" value="<?php echo $usuario->password;?>" id="password" placeholder="La contraseña por defecto es 0000">
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
<<<<<<< HEAD
            <input type="text" name="telefono" class="form-control" value="<?php echo $usuario->telefono;?>" id="telefono" placeholder="Ej. 8097162252">
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" name="direccion" class="form-control" value="<?php echo $usuario->direccion;?>" id="direccion" placeholder="Ej. Av. Hugo Chavez, 11905, Los Tres Brazos">
=======
            <input type="text" name="telefono" class="form-control" value="<?php echo $usuario->telefono;?>" id="telefono" placeholder="Ej. 809-788-2089">
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" name="direccion" class="form-control" value="<?php echo $usuario->direccion;?>" id="direccion" placeholder="Ej. Av Venezuela, Sirena">
>>>>>>> develop
        </div>

        <div class="text-center mt-3">
            <input type="submit" name="registrar" value="Registrar" class="btn btn-primary btn-lg">
            
            </input>
            <a href="usuarios.php" class="btn btn-danger btn-lg">
                <i class="fa fa-times"></i> 
                Cancelar
            </a>
        </div>
    </form>
</div>
<?php
if(isset($_POST['registrar'])){
    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    if(empty($usuario)
    ||empty($nombre) 
    ||empty($password)
    || empty($telefono) 
    || empty($direccion)){
        echo'
        <div class="alert alert-danger mt-3" role="alert">
            Debes completar todos los datos.
        </div>';
        return;
    } 
    
    include_once "funciones.php";
    $resultado = editarUsuario($usuario, $nombre, $password, $telefono, $direccion, $id);
    if($resultado){
        echo'
        <div class="alert alert-success mt-3" role="alert">
            Información de usuario actualizada con exito.
        </div>';
    }
    
}
?>