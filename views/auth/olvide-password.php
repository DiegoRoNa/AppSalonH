<h1 class="nombre-pagina">Olvidé contraseña</h1>
<p class="descripcion-pagina">Reestablece tu contraseña escribiendo tu correo a continuación</p>

<!--ERRORES Y ALERTAS-->
<?php include_once __DIR__.'/../templates/alertas.php'; ?>

<form action="/appsalonH/olvide" method="POST" class="formulario" novalidate>
    <div class="campo">
        <label for="email">Correo</label>
        <input type="email" name="email" id="email" placeholder="Tu correo">
    </div>

    <button type="submit" class="boton">Enviar instrucciones</button>
</form>

<div class="acciones">
    <a href="/appsalonH/">¿Ya tienes una uenta?, inicia sesión</a>
    <a href="/appsalonH/crear-cuenta">¿Aún no tienes una cuenta?, crea una</a>
</div>
