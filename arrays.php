<?php

//CONSTANTES 2 TIPOS
$name = "Miguel";
$is_Dev = true;
$age = 78;
     
 //GLOBALES 
//define("nombre_constante, valor");

define('LOGO_URL','data:image/png;base64,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');

//Constantes locales
#const NOMBRECONSTANTE = valor;
const NOMBRE = 'Miguel'; 


//...........
$output = "Hola $name, con una edad de $age.  😊 .  ";
$outputAge = match (true){

    $age < 2 => "Eres un bebe, $name",
    $age < 10 =>"Eres un nino, $name",
    $age < 18 => "Eres adolescente, $name",
    $age ===18 => "Eres mayor de edad, $name",
    $age < 40 => "Eres adulto joven, $name",
    //$age  40 => "Eres un adulto viejo, $name",
    default => "Hueles mas a madera que a fruta, $name",
    
};

//ARRAYS
$array = ['valor1', 'valor2' ,'valor3'];
    //Array de los mejores lenguajes
    $bestlanguajes = ["php", "Javarascript", "Python",1,2];
    //agregar un elemento al array
    $bestlanguajes []="Java";
    $bestlanguajes []= "Typescript";
?> 





<ul>
   <?php foreach($bestlanguajes as $key => $languaje) : ?>
    <li><?= $key ." " .$languaje ?></li>
    <?php endforeach; ?>
</ul>
<h2>
    el mejor lenguaje es 
    <?= $bestlanguajes[0];?> <br>
 </h2>

<h2> <?= $outputAge ?> </h2>

<img src="<?= LOGO_URL?>" alt="lOGO PHP">
<h1>
    
    <?= NOMBRE?>
    

</h1>

<style>
    :root {
        color-scheme: light dark;

        body {
            display: grid;
            place-content: center;
        }
    }
</style>    