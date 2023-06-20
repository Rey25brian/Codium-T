<?php
$Correo=$_POST['Correo'];
$Password=$_POST['Password'];
session_start();
$_SESSION['Correo']=$Correo;

$conexion=mysqli_connect("localhost","root","","id20492245_systemdoc");

$consulta="SELECT * FROM usuario where Correo='$Correo' and Password='$Password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
$query = "SELECT suscripcion FROM usuario WHERE Correo='$Correo'";
$result = mysqli_query($conexion, $query);
$row = mysqli_fetch_assoc($result);

if($filas and $row['suscripcion'] == 'Gratis'){
        echo "<script>alert('Inicio de Sesión correcto'); window.location='cuentaGratis.html'</script>";
   } elseif ($row['suscripcion'] == 'Plus') {
       echo "<script>alert('Inicio de Sesión correcto'); window.location='cuentaPlus.html'</script>";
   } elseif ($row['suscripcion'] == 'Pro') {
    echo "<script>alert('Inicio de Sesión correcto'); window.location='bienvenido.html'</script>";
}else{
    ?>
    <?php
    include("index.html");
    ?>
    <script>alert('No existe el Usuario'); window.location='login.html'</script>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>