<?php
function validarTel($tele){
    $key="9977b6f2256349b29ad01236fa5ecb6c";
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://phonevalidation.abstractapi.com/v1/?api_key='.$key.'&phone='.$tele);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

    $data = curl_exec($ch);

    curl_close($ch);


    $json = json_decode($data, true);

    $valor=$json['valid'];

    if($valor==true){
        return 1;
        
    }
    else{
        return 0;
        
    }
    
}

?>
