<?php 
    include("conexionASI.php");
    $con=conectar();

$id_asig=$_GET['id_asig'];

$sql="SELECT * FROM asignaturas WHERE id_asig='$id_asig'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ACTUALIZAR DATOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar_Docente</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

     </head>
   <body style="background:#9EECE5;">
            <img src="logogrupo.PNG" width="100" height="100" border-radius="20px">

                <div class="container mt-5">
                    <div style="width: 50%; margin-left: 25%;background-color:#9EECE5; ">
                <h1 style= "font-family: candy randy"><font color="#000000"><b>Actualizar</h1>
                <form action="updateASI.php" method="POST">

<label for="id_asig">ID</label>
<input type="text" class="form-control mb-3" name="id_asig" value="<?php echo $row['id_asig']  ?>">

<label for="nom_asig">NOMBRE</label>
    <input type="text" class="form-control mb-3" name="nom_asig" id="nom_asig"  value="<?php echo $row['nom_asig']  ?>">

    <label for="int_horaria">INTENSIDAD HORARIA</label>
    <select  type="text" class="form-control mb-3" id="int_horaria" name="int_horaria" value="<?php  echo $row['int_horaria']  ?>">
        <option value="<?php echo $row['int_horaria'] ?>"> Selecione un opción  </option>
        <option value="1">1 Hora</option>
        <option value="2">2 Horas</option>
        <option value="3">3 Horas</option>
        <option value="4">4 Horas</option>
    </select>
    
<label for="est_asig">EST_ASIG</label>
    <input type="text" class="form-control mb-3" name="est_asig" id="est_asig" value="<?php echo $row['est_asig']  ?>">

<label for="id_area">CURSO</label>    
    <select type="text" class="form-control mb-3" name="id_area" id="id_area" value="<?php echo $row['id_area']  ?>">
        <option value="<?php echo $row['id_area']  ?>">Seleccione una opción</option>
        <option value="1">Ciencias Naturales</option>
        <option value="2">Ciencias Sociales</option>
        <option value="3">Matematicas</option>
        <option value="4">Humanidades</option>
        <option value="5">Educación Ética y Valores</option>
        <option value="6">Educación Religiosa</option>
        <option value="7">Educación Artística</option>
        <option value="8">Educación Física</option>
        <option value="9">Informática</option>
        <option value="10">Pedagogia</option>
    </select>
                               

                            <input type="submit"style="background-color:#000000;font-family: arial ; border-color:#F5F5DC;" class="btn btn-danger" value=Actualizar>
                    </form>
                    <th><label for="busqueda"></label><br><a href="asignaturas.php" class="btn btn-info">VOLVER</a></th>
                    
                </div>
                    </div>
    </body>
</html>
                    
                        
</html>