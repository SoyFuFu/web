<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .container {
      margin-top: 40px;
    }
    .avatar-img {
      display: block;
      margin: 10px auto;
    }
  </style>
</head>
<body>

<div class="ui container container">
  <div class="ui stackable grid">
    <div class="eight wide column">
      <h3 class="ui header">Formulario</h3>
      <form class="ui form" method="POST" action="">
        <div class="field">
          <label>Nombre Completo</label>
          <input type="text" name="nombre" placeholder="Nombre Completo" required>
        </div>
        <div class="field">
          <label>Año de Nacimiento</label>
          <input type="number" name="anio" placeholder="1989" required>
        </div>
        <div class="field">
          <label>Estado de México</label>
          <select class="ui dropdown" name="estado" required>
          <option value="">Selecciona...</option>
              <option value="México">México</option>
              <option value="Jalisco">Jalisco</option>
              <option value="Nuevo León">Nuevo León</option>
              <option value="Puebla">Puebla</option>
              <option value="Veracruz">Veracruz</option>
              <option value="Guanajuato">Guanajuato</option>
              <option value="Chiapas">Chiapas</option>
              <option value="Tabasco">Tabasco</option>
          </select>
        </div>
        <button class="ui primary button" type="submit">Guardar</button>
      </form>
    </div>

    <div class="eight wide column">
      <h3 class="ui header">Datos Ingresados</h3>
      <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <?php
          $nombre = htmlspecialchars($_POST['nombre']);
          $anio = intval($_POST['anio']);
          $estado = htmlspecialchars($_POST['estado']);
          $edad = date("Y") - $anio;
        ?>
        <div class="ui segment">
          <h4 class="ui dividing header">Información</h4>
          <p><strong>Nombre:</strong> <?= $nombre ?></p>
          <p><strong>Edad:</strong> <?= $edad ?></p>
          <p><strong>Año de Nacimiento:</strong> <?= $anio ?></p>
          <p><strong>Estado:</strong> <?= $estado ?></p>
        </div>
        <div class="ui center aligned segment">
          <img src="Assest/jeff.jpg" class="ui circular image avatar-img" alt="Avatar" width="100">
          <p>Avatar</p>
        </div>
      <?php else: ?>
        <div class="ui warning message">
          <p>Completa el formulario para ver los datos ingresados.</p>
        </div>
      <?php endif; ?>
    </div>

  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js"></script>
<script>
  $('.ui.dropdown').dropdown();
  
</script>

</body>
</html>
