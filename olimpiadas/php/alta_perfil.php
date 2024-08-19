<?php
require_once 'config.php';
require_once 'funciones.php';

if (!empty($_GET['perfil_editar'])) {
    $titulo = 'Proyecto carrito :: Modificacion de perfil';
    $textoAccionBoton = 'Guardar los cambios';
    $accion = 'UPDATE';

    $link = getDBCon();
    if (!$link) {
        header('Location: pagina-error.php');
        die;
    }
    $sql = 'SELECT * FROM perfil WHERE id_perfil = '.$_GET['perfil_editar'];
    $rs = mysqli_query($link, $sql);
    mysqli_set_charset($link, DB_CHARSET);
    mysqli_close($link);
    $perfilParaEditar = mysqli_fetch_assoc($rs);

    $nickname=$perfilParaEditar['nickname'];
    $apellido=$perfilParaEditar['apellido'];
    $nombre=$perfilParaEditar['nombre'];
    $Correo=$perfilParaEditar['Correo'];
    

} else {
  $titulo = 'Proyecto carrito :: Alta de un perfil';
    $textoAccionBoton = 'Agregar perfil';
    $accion = 'INSERT';

   inivariables();
}

?>
    <h1><?php echo $titulo; ?></h1>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'validar_perfiles.php';
    if (empty($errores)) {
        if (!empty($foto_tmp_name)) {
            if (getimagesize($foto_tmp_name)) {
                move_uploaded_file($foto_tmp_name, 'img/perfils/' . $foto_name);
            }
        }

    $link = getDBCon(); 
        if ($accion == 'UPDATE') {
            $sql = "UPDATE perfil
                    SET
                    nickname = '$nickname',
                    nombre = '$nombre',
                    Correo = '$Correo',
                    foto = '$foto',
                    apellido = $apellido                 
                    WHERE id_diagno = " . $_GET['perfil_editar'];
            $rs = mysqli_query($link, $sql);
            mysqli_close($link);
            $mensaje = 'Se modificaron los datos de perfil con exito.';
            $tipoDeMensaje = 'positivo';
        } 
    } else {
        $mensaje = $errores;
        $tipoDeMensaje = 'negativo';
    }
}

if (!empty($mensaje)) {
    ?>
    <div class="mensaje <?= $tipoDeMensaje ?>">
        <strong>Atencion:</strong>
        <?php echo $mensaje; ?>
    </div>
    <?php
}

include 'perfil_alta_form.php';
