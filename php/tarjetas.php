<?php
include("conexion.php");
$conectar =conectar();

$numero=$_POST["numero"];
$titular=$_POST["titular"];
$opcion1 = isset($_POST['opcion1']) ? 1 : 0;
$opcion2 = isset($_POST['opcion2']) ? 1 : 0;
$fechaVence=$_POST["fvence"];
$pin=$_POST["pin"];
$sente="INSERT INTO clientes (numeroTarjeta,titularTarjeta,tarjetaDebito1,tarjetaCredito2,fechaVencimiento,pinTarjeta) VALUES ('".$numero."','".$titular."','".$opcion1."','".$opcion2."','".$fechaVence."','".$pin."')";
$verificando=mysqli_query($conectar,"SELECT * FROM pagos WHERE numeroTarjeta='$numero' and titularTarjeta='$titular'");
if(mysqli_num_rows($verificando) > 0){
    echo"
    <script>alert('Esta Tarjeta ya esta registrada'); window.location.href='/baguette/Index.html'</script>";
    exit;
}else{
    $sql=mysqli_query($conectar,$sente);
    echo"<script>alert('Cambio Guardado'); window.location.href='/baguette/Index.html'</script>";
}
?>