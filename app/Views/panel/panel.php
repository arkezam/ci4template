<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Visualizacion de vale</title>
    <meta name="description" content="Electro Puno Vale Fise">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>

    <div class="container">
        <h2><?php 
     
             ?>
             Vale Fise ;
        </h2>
        <a href=" <?php echo base_url(); ?>/logout">Salir</a>
    </div>

</header>


<!-- CONTENT -->

<div class="">

    <div>

    <?php 
        if(!isset($msg)){
            echo "";
        }
        else{
            echo "---------> " .$msg;
        }
         
        if(!isset($dni)){
            echo "sin mse";
        }
        else{
            echo $dni;
        }
     ?>
        
    
    </div>

   

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
