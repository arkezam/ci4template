<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fise Electro Puno S.A.A.</title>
    <meta name="description" content="Electro Puno Vale Fise">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>

    <div class="container">
        <h2>
            Vale Fise
        </h2>
    </div>

</header>


<!-- CONTENT -->

<div class="">

    <div>

    <?php 
        if(!isset($msg)){
            echo "sin mse";
        }
        else{
            echo "con msb" .$msg;
        }
     ?>
        
    
    </div>

    <form action="<?php echo base_url();?>/ingreso/signIn" method="post">
        <label for="dni">Número de DNI</label>
        <input type="text" name="dni" placeholder="Ingrese su DNI">
        <br><br>
        <label for="dni">PIN</label>
        <input type="password" name="pin" placeholder="********">
        <br><br>
        <input type="submit" value="Ingresar">
    </form>

</div>

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>
    <div class="environment">

        <p>Pagina renderizada en {elapsed_time} segundos</p>


    </div>

    <div class="copyrights">

        <p>&copy; <?= date('Y') ?> Fise. Todos los derechos reservados</p>

    </div>

</footer>

<!-- SCRIPTS -->



</body>
</html>
