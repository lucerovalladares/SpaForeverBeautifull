<?php
include ("cn.php");
if(isset($_POST['regis'])){
    if(
        
        strlen($_POST['dni'])>=1&&
        strlen($_POST['nom'])>=1&&
        strlen($_POST['direc'])>=1&&
        strlen($_POST['edad'])>=1&&
        strlen($_POST['correo'])>=1&&
        strlen($_POST['cel'])>=1){
       // strlen($_POST[''])>=1&&

    $nom=trim($_POST['nom']);
    $dni=trim($_POST['dni']);
    $direc=trim($_POST['direc']);
    $edad=trim($_POST['edad']);
    $correo=trim($_POST['correo']);
    $cel=trim($_POST['cel']);
    $consulta="INSERT INTO usuarios(us_dni,us_nombre,us_direccion,us_edad,us_correo,us_cel) 
    VALUES ('$dni','$nom','$direc','$edad','$correo','$cel')";
   
   $resultado=mysqli_query($conex, $consulta);

    if($resultado)
    {
        ?><h3 class="success_d" > Tu registro se ha completado</h3><?php    
    }
    else
    {
    ?><h3 class="error_d" > Ocurrió un error</h3><?php  
    }}
    else
    {
    ?><h3 class="error_d" > Llena todos los campos</h3><?php  
    }
}
?>