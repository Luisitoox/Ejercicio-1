<!DOCTYPE html>
<html>
<link href="assets/style.css" rel="stylesheet" type="text/css">
<body>

<h2>Formulario de empleados</h2>

<form action="procesar.php" method="post">
  <?php for ($i = 1; $i <= 5; $i++): ?>
    <h3>Empleado <?php echo $i; ?></h3></div>
    <label for="nombre<?php echo $i; ?>">Nombre y Apellido:</label><br>
    <input type="text" id="nombre<?php echo $i; ?>" name="empleados[<?php echo $i; ?>][nombre]"><br>
    <label for="edad<?php echo $i; ?>">Edad:</label><br>
    <input type="number" id="edad<?php echo $i; ?>" name="empleados[<?php echo $i; ?>][edad]"><br>
    <label for="estadoCivil<?php echo $i; ?>">Estado Civil:</label><br>
    <select id="estadoCivil<?php echo $i; ?>" name="empleados[<?php echo $i; ?>][estadoCivil]">

      <option value="Soltero(a)">Soltero(a)</option>
      <option value="Casado(a)">Casado(a)</option>
      <option value="Viudo(a)">Viudo(a)</option>

    </select><br>
    <label for="sexo<?php echo $i; ?>">Sexo:</label><br>
    <select id="sexo<?php echo $i; ?>" name="empleados[<?php echo $i; ?>][sexo]">

      <option value="Femenino">Femenino</option>
      <option value="Masculino">Masculino</option>
      
    </select><br>
    <label for="sueldo<?php echo $i; ?>">Sueldo:</label><br>
    <input type="number" id="sueldo<?php echo $i; ?>" name="empleados[<?php echo $i; ?>][sueldo]"><br>
  <?php endfor; ?>
  <input type="submit" value="Enviar">
 
</form>

</body>
</html>