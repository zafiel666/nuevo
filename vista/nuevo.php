<?php require "layout/header.php" 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/nuevo.css">
</head>
<body>
	
<section id="container">
<form action="">
    <h1> NUEVO </h1>
	<label for=""> Nombre </label> <br>
	<input type="text" name="nombre"><br><br>
	<label for=""> Precio </label><br>
	<input type="text" name="precio"><br><br>
    <label for=""> Categoria </label> <br>
    <select name="categoria"> 

   <?php 
    $obj= new modeloController();
    $dato= $obj-> cbo_categoria();
    foreach ($dato as $key => $value)
	        foreach ($value as $va ):
	        	echo "<option value=". "'" . $va ["idcategoria"] . "'>" . $va ["descripcion"] . "</option>";
    endforeach;

   ?>

    </select>
 
    <br><br>
	<input type="submit" name="btn">
	<input type="hidden" name="m" value="guardar">

</form>
</section>
</body>
</html>

<?php require "layout/footer.php" 
?>