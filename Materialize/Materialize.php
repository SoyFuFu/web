<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <style>
    .avatar {
      display: block;
      margin: 0 auto;
    }
    .section-title {
      margin-top: 40px;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="row section-title">
    <div class="col s12 m6">
      <h5>Formulario</h5>
      <form method="POST" action="">
        <div class="input-field">
          <input id="nombre" type="text" name="nombre" required>
          <label for="nombre">Nombre Completo</label>
        </div>
        <div class="input-field">
          <input id="anio" type="number" name="anio" required>
          <label for="anio">Año de Nacimiento</label>
        </div>
        <div class="input-field">
          <select name="estado" required>
            <option value="" disabled selected>Selecciona una opción</option>
            <option value="México">México</option>
              <option value="Jalisco">Jalisco</option>
              <option value="Nuevo León">Nuevo León</option>
              <option value="Puebla">Puebla</option>
              <option value="Veracruz">Veracruz</option>
              <option value="Guanajuato">Guanajuato</option>
              <option value="Chiapas">Chiapas</option>
              <option value="Tabasco">Tabasco</option>
          </select>
          <label>Estado de México</label>
        </div>
        <button class="btn blue" type="submit">Guardar</button>
      </form>
    </div>

    <div class="col s12 m6">
      <h5>Datos Ingresados</h5>
      <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <?php
          $nombre = htmlspecialchars($_POST['nombre']);
          $anio = intval($_POST['anio']);
          $estado = htmlspecialchars($_POST['estado']);
          $edad = date("Y") - $anio;
        ?>
        <div class="card-panel">
          <span class="black-text">
            <p><strong>Nombre:</strong> <?= $nombre ?></p>
            <p><strong>Edad:</strong> <?= $edad ?></p>
            <p><strong>Año de Nacimiento:</strong> <?= $anio ?></p>
            <p><strong>Estado:</strong> <?= $estado ?></p>
          </span>
        </div>
        <div class="card-panel center-align">
          <img src="Assest/jeff.jpg" alt="Avatar" class="avatar circle" width="100">
          <p>Avatar</p>
        </div>
      <?php else: ?>
        <div class="card-panel yellow lighten-4">
          <p>Completa el formulario para ver los datos ingresados.</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    M.FormSelect.init(elems);
  });
</script>
</body>
</html>
