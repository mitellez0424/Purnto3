<?php
include("conexion.php");


$cod_producto= isset($_POST['SKU'])?$_POST['SKU']:NULL;
$nombre=isset($_POST['Nombre'])?$_POST['Nombre']:NULL;
$Valor=isset($_POST['Valor'])?$_POST['Valor']:NULL;
$descripcion=isset($_POST['Descripcion'])?$_POST['Descripcion']:NULL;
$tienda=isset($_POST['Tienda'])?$_POST['Tienda']:NULL;
$imagen=isset($_POST['Imagen'])?$_POST['Imagen']:NULL;




$sql="INSERT INTO producto ( SKU, Nombre, Valor, Descripcion, tienda, Imagen ) VALUES('$cod_producto', '$nombre', '$Valor', '$descripcion', '$tienda', '$imagen')";
echo $sql;
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: producto.php");
    
}else {
}
?>