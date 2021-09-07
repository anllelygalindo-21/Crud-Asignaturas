<?php 
    include("conexionASI.php");
    $con=conectar();


    $sql="SELECT *  FROM asignaturas";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);



    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> INGRESAR DATOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 
        
    </head>
    
<body style="background:#9EECE5;">
            <img src="logogrupo.PNG" width="100" height="100">
                <div class="container mt-5">
                    <div style="width: 50%; margin-left: 25%;background-color:#9EECE5; ">
                <h1 style= "font-family: candy randy"><font color="#000000"><b>Ingresar datos</h1>

<!-- <div class="col-md-5" style="align-content: right;">
 -->
 
 <form action="insertarASI.php" method="POST">

<label for="id_asig">ID</label>
<input type="text" class="form-control mb-3" name="id_asig">

<label for="nom_asig">NOMBRE DE LA ASIGNATURA</label>                   
<input type="text" class="form-control mb-3" name="nom_asig">

<label for="int_horaria">INTENSIDAD HORARIA</label>     
<select class="form-control mb-3" name="int_horaria">
<option value="">Seleccione una opcion</option>
<option value="1">1 Hora</option>
<option value="2">2 Horas</option>
<option value="3">3 Horas</option>
<option value="4">4 Horas</option>
          </select>

  <label for="est_asig">est_asig</label>
<input type="text" class="form-control mb-3" name="id_asig">        


<label for="id_area">ID AREA</label>
<select class="form-control mb-3" name="id_area">
 <option value="">Selecciona una opcion</option>
 <option value="1">Ciencias Naturales</option>
 <option value="2">Ciencias Sociales</option>
 <option value="3">Matematicas</option>
 <option value="4">Lengua Castellana</option>
 <option value="5">Etica y Valores</option>
 <option value="6">ReligioN</option>
 <option value="7">ArtIstica</option>
 <option value="8">Educación Física</option>
 <option value="9">Informática</option>
 <option value="10">Pedagogia</option>
                                    </select>                                   

  <b><input type="submit"style="background-color:#000000;font-family: arial ; border-color:#F5F5DC;" class="btn btn-danger" value=Ingresar></b>
                                </form>

  <th><label for="busqueda"></label><br><a href="asignaturas.php" class="btn btn-info">VOLVER</a></th>
                        </div>