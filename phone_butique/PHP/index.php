<?php 
$con=mysqli_connect('localhost','root','','formulario') or die('Error en la conexion con el servidor');
$sql="INSERT INTO registro VALUES('".$_POST["Nombre"]."','".$_POST["Apellido"]."','".$_POST["Correo"]."','".$_POST["Direccion"]."','".$_POST["fp"]."','".$_POST["Pedido"]."')";
   $resultado=mysqli_query($con,$sql)or die ('Error en el query database');
   mysqli_close($con);

   echo 'El nombre ingresado es: '.$_POST["Nombre"].$_POST["Apellido"];
   echo 'El correo es: '.$_POST["Correo"];
   echo 'Con una direccion de: '.$_POST["Direccion"];
   echo 'Usted paga: '.$_POST["fp"];
   echo 'Su pedido es: '.$_POST["Pedido"];
 ?>