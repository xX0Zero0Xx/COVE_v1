<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('css/Cove.jpeg') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>inicio</title>
</head>



<body>
    <header>
        <h1>Cove</h1>
    </header>

    <section class="seccion-inicio">
        <div class="bloque">
            <h2>Iniciar sesión</h2>
            <form method="POST" action="">
                @csrf

                <label for="alias">Usuario (alias)</label>
                <input type="text" id="alias" name="alias" value="{{ old('alias') }}" placeholder="Ej. Mambo" required>

                <label for="contraseña">Contraseña</label>
                <input type="password" id="contraseña" name="contraseña" placeholder="******" required>

                <button type="submit" class="btn-enviar">Iniciar sesión</button>
            </form>
        </div>

        <div class="navegacion">
            <img src="{{ asset('css/Cove.jpeg') }}" alt="Logo de COVE" class="logo">
        </div>
    </section>

    <nav class="navegacion">
        <p>Otras secciones:</p>
        <div class="navegacion-enlaces">
            <a href="" class="btn-nav">Registrarse como nuevo usuario</a>
            <a href="" class="btn-nav">Soporte técnico</a>
        </div>
    </nav>

    <footer>
        <p>&copy; 2024 COVE. Todos los derechos reservados.</p>
    </footer>
</body>
</html>