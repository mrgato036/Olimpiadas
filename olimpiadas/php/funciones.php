<?php
function getDBCon(){
    // va a dar la conexion a la base de datos
	return mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME); 
} // Se usa mysqli por ser la ultima version 

function inivariables(){
 // iniciar y limpiar los valores de las variables
    // las variables se escriben solo una vez
    global $id_usuario,$correo,$nombre,$apelldio,$contrasena,$foto,$id_pedido,$fecha,$estado_entrega,
    $id_producto,$descripcion,$precio,$imagen,$stock,$id_categoria,$nombre_categoria,$id_pago,$precio,
    $fecha_pago,$estado,$id_rol,$nombre_rol;

//variables del perfil
$id_usuario='';
$correo='';
$nombre='';
$apelldio='';
$contrasena='';
$foto='';

//variables de los pedidos

$id_pedido=0;
$fecha=0;
$estado_entrega='';
//$correo='';

//variables de los productos
$id_producto=0;
$descripcion='';
$precio=0;
$imagen='';
$stock=0;
//id_catergoria=0;

//variables de la categoria
$id_categoria=0;
$nombre_categoria='';

//variables de los pagos
$id_pago='';
$precio=0;
$fecha_pago=0;
$estado='';
//$id_usuario='';

//variables de los roles
$id_rol=0;
$nombre_rol='';
}