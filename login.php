<?php
/*include_once "encabezado.php";*/
?>

<?php
include_once "encabezado.php";

if(isset($_POST['ingresar'])){
    if(empty($_POST['usuario']) || empty($_POST['password'])){
        echo'
        <div class="alert alert-warning mt-3" role="alert">
            Debes completar todos los datos.
            <a href="login.php">Regresar</a>
        </div>';
        return;
    }
}
?>
<div class="container">
    <div class="row m-5 no-gutters shadow-lg">
        <div class="col-md-6 d-none d-md-block">
            <img src="logo_principal.png" class="img-fluid" style="min-height:100%;" />
        </div>
        <div class="col-md-6 bg-white p-5">
            <h3 class="pb-3">Iniciar sesión</h3>
            <div>
                <form action="iniciar_sesion.php" method="post">
                    <div class="form-group pb-3">
                        <input type="text" placeholder="Usuario" class="form-control" name="usuario" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group pb-3">
                        <input type="password" placeholder="Contraseña" class="form-control" name="password" id="exampleInputPassword1">
                    </div>

                    <div class="pb-2">
                        <button type="submit" name="ingresar" class="btn btn-primary w-100 font-weight-bold mt-2">Login</button>
                    </div>
                </form>
             </div>
        </div>
    </div>
</div>
