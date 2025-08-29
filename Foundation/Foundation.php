<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.5/dist/css/foundation.min.css">
</head>
<body>
  <div class="grid-container">
    <div class="grid-x grid-margin-x mt-4">
      
      
      <div class="cell medium-6">
        <h3>Formulario</h3>
        <form method="POST" action="">
          <label>Nombre Completo
            <input type="text" name="nombre" required>
          </label>
          <label>Año de Nacimiento
            <input type="number" name="anio" required>
          </label>
          <label>Estado de México
            <select name="estado" required>
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
          </label>
          <button type="submit" class="button primary">Guardar</button>
        </form>
      </div>

      <div class="cell medium-6">
        <h3>Datos Ingresados</h3>
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
          <?php
            $nombre = htmlspecialchars($_POST['nombre']);
            $anio = intval($_POST['anio']);
            $estado = htmlspecialchars($_POST['estado']);
            $edad = date("Y") - $anio;
          ?>
          <div class="callout">
            <h5>Información</h5>
            <p><strong>Nombre:</strong> <?= $nombre ?></p>
            <p><strong>Edad:</strong> <?= $edad ?></p>
            <p><strong>Año de Nacimiento:</strong> <?= $anio ?></p>
            <p><strong>Estado:</strong> <?= $estado ?></p>
          </div>
          <div class="callout text-center">
            <img src="Assest/jeff.jpg" alt="Avatar" class="mb-2" width="100">
            <p>Avatar</p>
          </div>
        <?php else: ?>
          <div class="callout alert">Completa el formulario para ver los datos ingresados.</div>
        <?php endif; ?>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.5/dist/js/foundation.min.js"></script>
</body>
</html>
