<?php

const API_URL = 'https://whenisthenextmcufilm.com/api';
 #Inicializar una nueva seccion de cURL: ch = cURL handle
 $ch = curl_init(API_URL);
 //Indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 /* Ejecutar la peticion y guardamos el resultado */
 $result = curl_exec($ch); 
 $data = json_decode($result, true);

 curl_close($ch);
 
 
?> 
<head>
    <title>La proxima pelicula de marvel</title>
    <meta charset="UTF-8" /> 
<!-- Centered viewport -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    >   
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<main> 
  
<section>
<img src="<?= $data["poster_url"];?>" width="200" alt="Poster de <?= $data["title"];?>" style="border-radius:16px ;">
</section>
<hgroup>
    <h3><?= $data["title"];?> se estrena en <?= $data["days_until"]; ?> dias</h3>
    <p> Fecha de estreno <?=$data["release_date"];?></p>
    <p> La siguiente es <?=$data["following_production"]["title"];?></p>
    <img src="https://i.pinimg.com/736x/43/19/2f/43192faa3dd4a633e4192dac7071fbe8.jpg" width="200" alt="momo">
</hgroup>

</main>
<style>
    :root {
        color-scheme: light dark;
    }
        body {
            display: grid;
            place-content: center;
        }

    section{
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup{
        /*display flex- me pone mis elementos horizontalemnte uno alado de otro*/
        display: flex;
        /*hace que los elementos de pondan en columna, uno abajo de otro*/
        flex-direction: column;
        /*justify content centra los elementos horizontalmente */
        justify-content: center;
        /*text aling alinea el texto horizantal mente al centro, alinea elementos en linea dentro de un contenedor */
        text-align: center;

    }
    
      img{
        margin: 0 auto;
    }

</style>    