<?php
//$foto_tmp_name = '';
//$foto_name = '';

//if (isset($_FILES['foto'])) {
//    if (isset($_FILES['foto']['tmp_name'])) {
//        $foto_tmp_name = $_FILES['foto']['tmp_name'];
//    }
//    if (isset($_FILES['foto']['name'])) {
//        $foto_name = $_FILES['foto']['name'];
//    }
//}

$errores='';
$nickname=(isset($_POST['nickname']))?trim($_POST['nickname']):'';
$nombre=(isset($_POST['nombre']))?trim($_POST['nombre']):'';

if(is_numeric($nickname)){
    $errores.='El nivel de urgencia no puede ser numerico';

}
if(is_numeric($nombre)){
    $errores.='El nombre no puede estar en caracteres';

}
