<h1 class="nombre-pagina">Olvide mi contraseña</h1>
<p class="descripcion-pagina">Reestablece tu contraseña escribiendo tu correo electrónico a continuación</p>

<?php include_once __DIR__ . "/../templates/alertas.php" ?>

<form action="/forget" method="post" class="formulario">
    <div class="campo">
        <label for="email">Correo electrónico</label>
        <input type="email" name="email" id="email" placeholder="Tu correo">
    </div>
    <input type="submit" value="Enviar instrucciones" class="boton">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia sesión</a>
    <a href="/create-an-account">¿Aún no tienes una cuenta? Crea una</a>
</div>