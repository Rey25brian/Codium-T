<?php
class administrador{
private $Nombres;
private $Apellidos;
private $Correo;
private $Password;


  public function inicializar($Nombres,$Apellidos,$Correo, $Password){
	$this -> Nombres = $Nombres;
    $this -> Apellidos = $Apellidos;
    $this -> Correo = $Correo;
	$this -> Password = $Password;
   }

  public function conexion(){
    $con = mysqli_connect("localhost","root","","id20492245_systemdoc") or die("Existen Problemas con la Base de Datos");
      return $con;
   }

  public function insertar(){ 
$registro=mysqli_query($this->conexion(),"select Nombres,Apellidos,Correo,Password
	  from administradores where Correo='$this->Correo'") or die("Problemas en el Select: ".mysqli_error($this->conexion()));
	  if($reg=mysqli_fetch_array($registro)){
        echo '<center>';
        echo '<br><br>';
		  echo "El Administrador ya Existe, Inicie Sesion";
          
	  }else{  
      mysqli_query($this -> conexion(),"INSERT INTO administradores(Nombres,Apellidos,Correo,Password) values ('$this->Nombres','$this->Apellidos','$this->Correo','$this->Password')") 
	  or die("Problemas en el insert".mysqli_error($this -> conexion()));
      echo '<center>';
      echo '<br><br>';
      echo "<b>Administrador registrado.</b>";
      echo '</center>';
    }
   }
   
public function listarAdm(){
    $con = mysqli_connect("localhost","root","","id20492245_systemdoc") or die("Existen Problemas con la Base de Datos");
	  $registro=mysqli_query($con, "select * from administradores")or die(mysql_error($con));
     
      echo '<center>';
      echo '<h2>ADMINISTRADORES</h2><br>';
echo '<table  border=3>
  <tr><td>
  <form action="agregarAdm.php" method="post">
  <input type="submit" value="Agregar">
  <input type="hidden" name="opc" value="1">
  </form></td>
  </tr>
  </table>';
  echo '<div class="table-responsive">';
  echo '<table class="color" border=3>';
	  echo '<tr><th>id</th><th>Nombres</th><th>Apellidos</th><th>Correo</th><th>Password</th><th> Modificar</th><th>Consultar</th><th>Borrar</th></tr>';
	  while($reg=mysqli_fetch_array($registro)) {
		  echo'<tr><td aling="center">'.$reg['id'].'</td>';
		  echo'<td aling="center">'.$reg['Nombres'].'</td>';
		  echo'<td aling="center">'.$reg['Apellidos'].'</td>';
		  echo'<td aling="center">'.$reg['Correo'].'</td>';
		  echo'<td aling="center">'.$reg['Password']."</td>
	<td><form action='ctrlAdmin.php' method='post'>
    <input type='submit' value='Modificar'>
    <input type='hidden' name='opc' value='2'>
    <input type='hidden' name='opcion' value='1'>
	<input type='hidden' name='id' value=".$reg['id'].">
    </form></td>    
	<td aling='center'>
	<form action='ctrlAdmin.php' method='post'>
    <input type='submit' value='Consultar'>
    <input type='hidden' name='opc' value='3'>
    <input type='hidden' name='opcion' value='1'>
	<input type='hidden' name='id' value=".$reg['id'].">
    </form></td>	
    <td aling='center'>
	<form action='ctrlAdmin.php' method='post'>
    <input type='submit' value='Borrar'>
    <input type='hidden' name='opc' value='4'>
    <input type='hidden' name='opcion' value='1'>
	<input type='hidden' name='id' value=".$reg['id'].">
    </form></td>";
}
echo'</table>';
echo'</div>';


 }  
 
    public function consultarAdm($id){
        $con = mysqli_connect("localhost","root","","id20492245_systemdoc") or 
		 die("Existen Problemas con la Base de Datos");
	  $registro =mysqli_query($con, "select id, Nombres, Apellidos,Correo,Password from administradores where id='$id'")or die(mysql_error($con));
	   if($reg=mysqli_fetch_array($registro)){
        echo "<center>";
		echo "<br><br>";
        echo "<b>CONSULTA DE ADMINISTRADOR</b>";
        echo "<hr>";
		echo "ID_Administrador: ".$reg['id']."<br>";		  
		echo "Nombres: ".$reg['Nombres']."<br>";
		echo "Apellidos: ".$reg['Apellidos']."<br>";
		echo "Correo: ".$reg['Correo']."<br>";
		echo "Contra: ".$reg['Password']."<br>";
        echo "</center>";

  }
  else{
  echo "No existe Administrador Con ese ID";
  }
   }
   public function borrarAdm($id){
    $con = mysqli_connect("localhost","root","","id20492245_systemdoc") or 
		 die("Existen Problemas con la Base de Datos");
	  $registro =mysqli_query($con, "select id, Nombres,Apellidos,Correo, Password from administradores where  id='$id'")or die(mysql_error($con));
	   if($reg=mysqli_fetch_array($registro)){	 
        echo "<center>";
		echo "<br><br>";
        echo "<b>SE BORRO EL ADMINISTRADOR:</b>";
        echo "<hr>"; 	
		  echo "ID_Administrador: ".$reg['id']."<br>";
		  echo "Nombres: ".$reg['Nombres']."<br>";
		  echo "Apellidos: ".$reg['Apellidos']."<br>";
		  echo "Correo: ".$reg['Correo']."<br>";
		  echo "Contraseña: ".$reg['Password']."<br>";
		  
	mysqli_query($con, "delete from administradores where id='$id'")or die(mysql_error($con));
	   echo "<br> Se borro Adecuadamente El Administrador: " .$reg['Nombres'];
   
  }
  else{
  echo "No existe Administrador Con ese ID";
  }
   }

    

public function modificarAdm($id){
$registro=mysqli_query($this->conexion(),"select * from administradores where id='$id'")
or die(mysqli_error($this -> conexion()));
if($reg=Mysqli_fetch_array($registro)){
    echo '<br><br>';
		echo'<div class="col-lg-6 offset-lg-3 p-4">';
		echo'<div class="card">';
		echo "<center>";
		echo '<h3 class="tituloForm">Modificar Administrador</h3>';
		echo '<div class="table-responsive">';
echo '<form action="modiAdm2.php" method="POST">';
   echo '<table class="color">';
   echo '<td>';
   echo '<div class="col"><input class="form-control form-control-lg" type="hiden" name="id" value="'.$reg['id'].'"></div>';
   echo '</td>';
   echo '</tr>';
   echo '<tr>';
   echo '<td>';
   echo '<div class="col"><input class="form-control form-control-lg" type="text" name="Nombres" value="'.$reg['Nombres'].'"></div>';
   echo '</td>';
   echo '</tr>';
   echo '<tr>';
   echo '<td>';
   echo '<div class="col"><input class="form-control form-control-lg" type="text" name="Apellidos" value="'.$reg['Apellidos'].'"></div>';
   echo '</td>';
   echo '</tr>';
   echo '<tr>';
   echo '<td>';
   echo '<div class="col"><input class="form-control form-control-lg" type="email" name="Correo" value="'.$reg['Correo'].'"></div>';
    echo '<tr>';
   echo '<td>';
   echo '<div class="col"><input class="form-control form-control-lg" type="password" name="Password" value="'.$reg['Password'].'"></div>';
   echo '</td>';
   echo '</tr>';
   echo '<tr>';
   echo '</tr>';
   echo '</table>';
   echo '<br>';
   echo '<a href="listarAdm.php"><button type="button" class="btn btn-primary">Volver</button></a>';
   echo '<input class="btn btn-primary"type="submit" name="operar" value="Modificar">';
   echo '</form>';
   echo '</div>';
   echo '</div>';echo '</div>';
}else{
echo "No existe registro";
}
}
public function modificarAdm2($id,$Nombres,$Apellidos,$Correo, $Password){
$registro=mysqli_query($this->conexion(),"UPDATE administradores set Nombres='$Nombres', Apellidos='$Apellidos', Correo='$Correo', Password='$Password' where id='$id'")
or die("Error al modificar ".mysqli_error($this->conexion()));
echo "<center>";
echo "<br><br>";
echo "<b>ADMINISTRADOR MODIFICADO</b>";
echo "<br>";
echo "<br>";
echo "<hr>";
$registro=mysqli_query($this->conexion(),"select id, Nombres, Apellidos,Correo, Password from administradores where id='$id'")
or die(mysqli_error($this->conexion()));
if($reg=mysqli_fetch_array($registro)){
    echo "ID_Administrador: ".$reg['id']."<br>";
	echo "Nombres: ".$reg['Nombres']."<br>";
	echo "Apellidos:".$reg['Apellidos']."<br>";
	echo "Correo: ".$reg['Correo']."<br>";
	echo "Password: ".$reg['Password']."<br>";
    echo "</center>";
}
}
		
public function cerrar(){
     mysqli_close($this->conexion());
  }
}
?>
