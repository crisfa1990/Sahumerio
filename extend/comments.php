<div class="row">
  <div class="col-md-12">
    <form method="post" action="create-account.php" method="POST">
        <div class="form-group">				
            <input type="text" class="form-control" name="nombre_comentario" placeholder="Ingresa el comentario" required>			
        </div>
        <div class="form-group">
          <label for="comentario">Soy una etiqueta</label>
          <textarea class="form-control" name="comentario" id="comentario" rows="3" placeholder="Ingrese su comentario aquí" required></textarea>
        </div>
        <button type="submit" class="btn btn-success btn-block">Enviar comentario</button>
    </form>
  </div>
</div>

<?php
/*
==================================
AGREGAR LOS COMENTARIOS
==================================
*/
$nombre_comentario=$_POST['nombre_comentario'];
$comentario=$_POST['comentario'];
if(asset($comentario) && asset($nombre_comentario)){
  $queryCom= "INSERT INTO nombreTabla(nombre_comentario, nombre) VALUES ($nombre_comentario, $comentario)";
}else{
  echo "<p>Usted no ha ingresado todo los datos correctamente</p>";
}
?>
<?php
/*
==================================
SELECT LOS COMENTARIOS
==================================
*/
?>

<?php
/*
==================================
DELETE LOS COMENTARIOS
==================================
*/
?>

<?php
/*
==================================
UPDATE LOS COMENTARIOS
==================================
*/
?>

<?php include '../script/scripts.php' ?>
