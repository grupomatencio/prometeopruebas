<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Magarin</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">

        <div class="container-fluid">
            <!-- Formuario de Acceso a la web -->
            <form class="row" method="post" action="">

                <div class="form-group">
                    <label for="user">Usuario:</label>
                    <input type="text" id="user">
                </div>

                <div class="form-group">
                    <label for="pasw">Contraseña:</label>
                    <input type="text" id="pasw">
                </div>

                <input class="btn btn-primary" type="submit" value="Submit">
            </form>
        </div>



    </body>
</html>
