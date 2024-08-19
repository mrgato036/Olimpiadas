<?php
    include 'config.php';

    @$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    mysqli_set_charset($link, 'UTF8');

    echo $sqlSelect = 'SELECT * FROM loginn WHERE emails = ' . $_GET['eliminar_consulta'];
    $rs = mysqli_query($link, $sqlSelect);

    if (mysqli_num_rows($rs) != 1) {
        mysqli_close($link);
        header('Location: consultas.php?error=1');
        die;
    }

    $sqlDelete = 'DELETE FROM loginn WHERE email = ' . $_GET['eliminar_consulta'];

    $rs = mysqli_query($link, $sqlDelete);

    mysqli_close($link);

    header('Location: consultas.php');