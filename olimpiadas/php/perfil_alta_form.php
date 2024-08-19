<form method="POST" enctype="multipart/form-data">
	<fieldset>
		<legend> Datos del perfil </legend>
        <br><br>

		<label> nickname </label>
		<input type="text" name="nickname" value="<?=$nombre?>" id="nickname">
        <br><br>

        <label>	apellido </label>
		<input type="text" name="apellido" value="<?=$apellido?>">
        <br><br>

        <label> nombre </label>
		<input type="text" name="nombre" value="<?=$nombre?>" id="nombre">
        <br><br>

        <label> correo </label>
		<input type="text" name="correo" value="<?=$nombre?>" id="correo">
        <br><br>

		

        <label> diagnostico </label>
		<select name="id_diagno">
			<?php
			$link=getDBCon();
			$sql = 'SELECT * FROM id_perfil';
			$resultado = mysqli_query($link,$sql);
			while($fila= mysqli_fetch_assoc($resultado)){

			    ?>
				<option value="<?=$fila['id_perfil']?>" <?php if ($id_diagno == $fila['id_perfil']) {echo 'selected';}?>><?=$fila['descri_internacion']?></option>
				<?php
        
}       
?>
</select>
<br>

</fieldset>
<fieldset id="fieldsetfoto">
            <legend>Foto actual:</legend>
            <img src="img/empleados/sin_imagen.png" alt="Foto del producto" />
        </fieldset>

<fieldset>
    <legend>Foto: </legend>
    <label> Subir foto </label>
    <input type="file" name="foto" value="<?=$foto_name?>">

</fieldset>
<input type="submit" value="<?=$textoAccionBoton?>">
</form>