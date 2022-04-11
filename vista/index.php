
<?php require "layout/header.php" ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  </head>
  <body>
   	<div class="col-lg-12">
	<div class="card" >
    <div class="card-header" style="background-color:blue;">
      <div  style="color:white;"> COMUNICACION GOBAL   
	  <input type="button" value=" CERRAR CESION" style="float: right;"  style="color:white;">
   </div>	   
	</div clas="card-body">
  </body>

  <style type="text/css">
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th {
        padding: 10px;
		width: 900px;
        background-color:navy;
        font-size: 15px;
        color:rgb(255, 255, 255);
    }
    
</style>
 <div align=right >
        
<table  >
<th  >ENCARGADO DE ALMACEN</th>
</table>
</div>	

<a href="index.php?m=nuevo">NUEVO</a>
<table border="1">
	<tr>
		<td>Id</td>
		<td>Nombre</td>
		<td>Precio</td>
		<td>Categoria</td>
		<td>Acción</td>
	</tr>

	    <?php 
	    foreach ($dato as $key => $value)
	        foreach ($value as $va ):
	            echo "<tr><td>".$va['id'].
	                 "</td><td>".$va['nombre'].
	                 "</td><td>S./".$va['precio'].
	               
	                 "</td>";

	        	echo "<td><a href='index.php?m=editar&id=".$va['id']."'>ACTUALIZAR</a> <a href='index.php?m=eliminar&id=".$va['id']."'>ELIMINAR</a></td>";
	        	echo "</tr>";
	        endforeach;
	    ?>

</table>
<?php require "layout/footer.php" ?>

</html>
 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
