<h1 class="nombre-pagina">Crear Servicios</h1>
<p class="descripcion-pagina">Llena todos los campos para agregar un nuevo servicio</p>

<?php include_once __DIR__.'/../templates/barra.php'; ?>
<?php include_once __DIR__.'/../templates/alertas.php'; ?>

<form action="/servicios/crear" method="post" class="formulario">

    <?php include_once __DIR__.'/formulario.php'; ?>

    <button type="submit" class="boton">Guardar servicio</button>
</form>
