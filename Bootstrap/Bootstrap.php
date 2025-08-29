<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <h3>Formulario</h3>
        <form method="POST" action="">
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre Completo</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
          </div>
          <div class="mb-3">
            <label for="anio" class="form-label">Año de Nacimiento</label>
            <input type="number" class="form-control" id="anio" name="anio" required>
          </div>
          <div class="mb-3">
            <label for="estado" class="form-label">Estado de México</label>
            <select class="form-select" id="estado" name="estado" required>
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
          <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>

      <div class="col-md-6">
        <h3>Datos Ingresados</h3>
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
          <?php
            $nombre = htmlspecialchars($_POST['nombre']);
            $anio = intval($_POST['anio']);
            $estado = htmlspecialchars($_POST['estado']);
            $edad = date("Y") - $anio;
            
          ?>
          <div class="card p-3 mb-3">
            <h5>Información</h5>
            <p>Nombre: <?= $nombre ?></p>
            <p>Edad: <?= $edad ?></p>
            <p>Año de Nacimiento: <?= $anio ?></p>
            <p>Estado: <?= $estado ?></p>
          </div>
          <div class="card text-center p-3">
            <img src="Assest/jeff.jpg" alt="Avatar" class="mx-auto d-block mb-2" width="100">
            <p>Avatar</p>
            
          </div>
        <?php else: ?>
          <div class="alert alert-info">Completa el formulario para ver los datos ingresados.</div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</body>
</html>
