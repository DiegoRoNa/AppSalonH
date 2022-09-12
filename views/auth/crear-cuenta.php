<h1 class="nombre-pagina">Crear cuenta</h1>
<p class="descripcion-pagina">Llena el siguiente formulario para crear una cuenta</p>

<!--ERRORES Y ALERTAS-->
<?php include_once __DIR__.'/../templates/alertas.php'; ?>

<form action="/appsalonH/crear-cuenta" method="POST" class="formulario" novalidate>
    <div class="campo">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="<?=isset($usuario->nombre) ? s($usuario->nombre) : '';?>" placeholder="Tu nombre">
    </div>

    <div class="campo">
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="apellidos" value="<?=isset($usuario->apellido) ? s($usuario->apellidos) : '';?>" placeholder="Tus apellidos">
    </div>

    <div class="campo">
        <label for="telefono">Teléfono</label>
        <input type="tel" name="telefono" id="telefono" value="<?=isset($usuario->telefono) ? s($usuario->telefono) : '';?>" placeholder="Tu telefono">
    </div>

    <div class="campo">
        <label for="email">Correo</label>
        <input type="email" name="email" id="email" value="<?=isset($usuario->email) ? s($usuario->email) : '';?>" placeholder="Tu correo">
    </div>

    <div class="campo">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" placeholder="Tu contraseña">
    </div>

    <button type="submit" class="boton">Crear cuenta</button>
</form>

<div class="acciones">
    <a href="/appsalonH/">¿Ya tienes una uenta?, inicia sesión</a>
    <a href="/appsalonH/olvide">¿Olvidaste tu contraseña?</a>
</div>
