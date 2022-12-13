
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <title>Registro de Usuarios</title>
        <link rel="stylesheet" href="/CSS/style.css">
    </head>
<body>
    <header>
        <div class="w3-container w3-black" align= "center">
            <h1>Registro de Usuarios</h1>
        </div>
    </header>
    <div class="Fondo">
    <div class="containerR">
        <div class="w3-container w3-green" align= "center">
            <h1>Registrarse</h1>
        </div>
        <div>
            <form action="agregar_usuario.php" class="w3-container" method="POST">
                <p>
                    <label class="w3-label">Usuario</label>
                    <input type="text" class="w3-input w3-border" name="nombre_usuario" placeholder="Usuario">
                </p>
                <p>
                    <label class="w3-label">Contraseña</label>
                    <input type="text" class="w3-input w3-border" name="contrasena" placeholder="Escribe tu contraseña">
                </p>
                <p>
                    <label class="w3-label">Confirmación</label>
                    <input type="text" class="w3-input w3-border" name="contrasena2" placeholder="Confirma tu contraseña">
                </p>
                <p>
                    <button type="submit" class="btn-R">Registrar</button>
                </p>
            </form>
        </div>
        <div class="w3-container w3-green" align= "center">
            <h3>Login</h3>
        </div>
        <div>
            <form action="login.php" class="w3-container" method="POST">
                <p>
                    <label class="w3-label">Usuario</label>
                    <input type="text" class="w3-input w3-border" name="login_usuario" placeholder="Usuario">
                </p>
                <p>
                    <label class="w3-label">Password</label>
                    <input type="text" class="w3-input w3-border" name="login_contrasena" placeholder="Escribe tu contraseña">
                </p>
                <p>
                    <button type="submit">Login</button>
                </p>
            </form>
        </div>
        </div>
        </div>
</body>
</html>