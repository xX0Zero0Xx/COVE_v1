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

    <div class="contenedor-inicio">
        <section class="seccion-inicio">
            <div class="bloque">
                <h2>Iniciar sesión</h2>
                <form method="POST" action="">
                    @csrf

                    <label for="alias">Nombre de usuario / Correo electrónico</label>
                    <input type="text" id="alias" name="alias" value="{{ old('alias') }}" placeholder="Ej. Mambo" required>

                    <label for="contraseña">Contraseña</label>
                    <input type="password" id="contraseña" name="contraseña" placeholder="******" required>

                    <button type="submit" class="btn-enviar">Iniciar sesión</button>
                </form>

                <nav class="nav-secundaria" aria-label="Enlaces de ayuda">
                    <a href="#">Registro</a>
                    <a href="#">Soporte técnico</a>
                    <a href="#">FAQ</a>
                </nav>
            </div>
        </section>
        <img src="{{ asset('css/Cove.jpeg') }}" alt="Logo de COVE" class="logo">
    </div>
    </nav>
</body>
</html>