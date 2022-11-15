<?php
    include('mensaje.php');
    include('validarTel.php');

    $tele=$_REQUEST['tele'];

    $validarTel=validarTel($tele);

    if($validarTel==1){
        mensaje ("Telefono Validado", "index.php", "bien.jpg");
    }
    else{
        mensaje ("Telefono No Validado", "index.php","mal.jpg");
    }

?>