<h1 class="nombre-pagina">Recuperar contraseña</h1>
<p class="descripcion-pagina">Coloca tu nueva contraseña a continuación</p>

<!--ERRORES Y ALERTAS-->
<?php include_once __DIR__.'/../templates/alertas.php'; ?>

<!--SI EL TOKEN ES INCORRECTO, DESAPARECE EL FORMULARIO-->
<?php if($error) return; ?>

<form method="POST" class="formulario" novalidate>
    <div class="campo">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" placeholder="Nueva contraseña">
    </div>

    <button type="submit" class="boton">Enviar</button>
</form>

<div class="acciones">
    <a href="/appsalonH/">¿Ya tienes cuenta?, inicia sesión</a>
    <a href="/appsalonH/crear-cuenta">¿Aún no tienes una cuenta?, crea una</a>
</div>