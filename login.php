<?php  
require "conex.php";
session_start();
if($_POST){
                                $usuario = $_POST['usuario'];
                                $password = $_POST['contraseña'];
                        
                                $sql= "SELECT COD_USU, DNI_USU, NOMBRE_USU, CORREO_USU, tipo_usu FROM usuario WHERE CORREO_USU='$usuario'";
                                $resultado = $conexion-> query($sql);
                                $num = $resultado->num_rows;
                        
                                if($num>0){
                        
                                    $row = $resultado->fetch_assoc();
                                    $password_bd = $row['DNI_USU'];
                        
                                    $pass_c = $password;
                        
                                    if($password_bd == $pass_c){
                        
                                        $_SESSION['COD_USU']=$row ['COD_USU'];
                                        $_SESSION['NOMBRE_USU']=$row ['NOMBRE_USU'];
                                        $_SESSION['tipo_usu']=$row ['tipo_usu'];
                        
                                        header("Location: DASHBOARD/startbootstrap-sb-admin-2-gh-pages/principal.php");
                        
                                    }else{
                                        echo "La contraseña no coincide";
                                    }
                        
                                }else{
                                    echo "NO existe usuario";
                                }
                            }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <script src="js/bootstrap.bundle.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/jquery-3.6.3.js" ></script>
      <script src="js/log.js" >
    </script>
    <section class="vh-100" style="background-color: #f6c8c7;">  
      <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="imagenes/sauna.png" width="140%" height="140%" 
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">


      
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <i class="fas fa-cubes fa-2x me-3" style="color: #f6c8c7;"></i>
                          <span class="h1 fw-bold mb-0">SPA FOREVER BEAUTIFUL</span>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Ingresa con tu cuenta</h5>
      
                        <div class="form-outline mb-4">
                          <input type="email" id="d" class="form-control form-control-lg" name="usuario">
                          <label class="form-label" for="form2Example17">Usuario</label>
                        </div>
      
                        <div class="form-outline mb-4">
                          <input type="password" id="c" class="form-control form-control-lg" name="contraseña">
                          <label class="form-label" for="form2Example27">Contraseña</label>
                        </div>
      
                        <div class="pt-1 mb-4">
                        <a><input type="submit" class="boton_iniciar_sesion" value="INGRESAR"></a>
                        </div>

                        
      
                        <a class="small text-muted" href="#!">Olvidaste la contraseña?</a>
                        <a class="small text-muted" href="form.php">Soy NUEVA</a>
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section></head></html>

      