<?php
//Variables

#se ponen con signo de dolar
$name = "Miguel"; // 
$is_Dev = true;
$age = 44;

$varstring = 'Hola a todos';
$varbole = true;
$varentrero =23;
 
$output = "Hola $name, con una edad de $age.  😊  ";


//alerta con javascript
/*<script>alert('Hola soy una alerta')</script>*/ 
?> 

<h1>
    
    <?= $output?>
    

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