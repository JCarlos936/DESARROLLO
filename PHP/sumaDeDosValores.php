



<html>
    <head>

    </head>

<body>

<-- formulario de entrada de datos--!>
<form action="c.php" method="post">
<input type="text" placeholder="Numero1" name="n1">
<input type="text" placeholder="Numero2" name="n2">
<input type="submit" name="enviar">
</form>


<-- Procesamos los valores de las variables de PHP--!>
<?php
if(isset($_POST['enviar'])){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $suma = $n1 + $n2;
}
?>


<--Formulario de llegada, aquí es donde mostraremos los valores--!>
<form action="c.php" method="get"> 
<input type="text" value="<?php echo $suma ?>">
</form>


</body>


</html>




