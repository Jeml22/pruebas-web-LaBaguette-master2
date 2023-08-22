<?php
include("conexion.php");
$conectar =conectar();

$correo=$_POST["correo"];
$cuenta=$_POST["cuenta"];
$banco=$_POST["cuenta"];
$opcion1 = isset($_POST['opcion1']) ? 1 : 0;
$opcion2 = isset($_POST['opcion2']) ? 1 : 0;

$sente="INSERT INTO clientes (correo,cuenta,banco,cuentaAhorros,cuentaCorriente) VALUES ('".$correo."','".$cuenta."','".$banco."','".$opcion1."','".$opcion2."')";
$verificando=mysqli_query($conectar,"SELECT * FROM pagos WHERE cuenta='$cuenta'");
if(mysqli_num_rows($verificando) > 0){
    echo"
    <script>alert('Esta cuenta ya esta registrada'); window.location.href='/baguette/Index.html'</script>";
    exit;
}else{
    $sql=mysqli_query($conectar,$sente);
    echo"<script>alert('Cuenta Guardada'); window.location.href='/baguette/Index.html'</script>";
}
?>