<div class="barra">
    <p>Bienvenido <?=$nombre ?? '';?></p>

    <a class="boton" href="/appsalonH/logout">Cerrar sesión</a>
</div>

<?php if(isset($_SESSION['admin'])): ?>
    <div class="barra-servicios">
        <a href="/appsalonH/admin" class="boton">Ver citas</a>
        <a href="/appsalonH/servicios" class="boton">Ver servicios</a>
        <a href="/appsalonH/servicios/crear" class="boton">Nuevo servicio</a>
    </div>
<?php endif; ?>

