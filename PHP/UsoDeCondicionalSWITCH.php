


<html>
    <head>

    </head>

<body>

<-- Formulario de entrada--!>
<form action="c.php" method="post">
<input type="text" name="opcion" placeholder="Opcion">
<input type="submit" name="enviar">
</form>
<?php


<-- Procesamos el valor de html a PHP--!>
if(isset($_POST['enviar'])){
    $opcion = $_POST['opcion'];
}
?>
 
 
<-- Procesamos los valores en este formulario de llegada --!>
<form action="c.php" method="get">
<input type="text" value="<?php
//Aquí procesaremos el valor de la variable opcion
     switch($opcion){
    case 1: echo "Lunes"; break;
    case 2: echo "Martes"; break;
    case 3: echo "Miercoles"; break;
    case 4: echo "Jueves"; break;
    case 5: echo "Viernes"; break;
    case 6: echo "Sabado"; break;
    case 7: echo "Domingo"; break;
    } ?>">
</form>


</body>


</html>







