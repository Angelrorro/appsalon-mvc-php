<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Iniciar sesión</p>

<?php include_once __DIR__ . "/../templates/alertas.php" ?>

<form action="/" method="POST" class="formulario">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Tu email">
    </div>

    <div class="campo">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" placeholder="Tu contraseña">
    </div>

    <input type="submit" class="boton" value="Iniciar sesión">
</form>

<div class="acciones">
    <a href="/create-an-account">¿Aún no tienes una cuenta? Crea una</a>
    <a href="/forget">¿Olvidate tu contraseña?</a>
</div>