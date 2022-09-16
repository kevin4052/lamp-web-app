<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title')</title>
        @vite(['resources/css/style.scss'])
    </head>
    <body>
        <header class="nav">
            <div class="logo">web app</div>
            <nav>
                <a href="#">home</a>
                <a href="#">about</a>
                <a href="#">contact</a>
            </nav>
        </header>

        <main>@yield('contain')</main>

        <footer style="background-color: rgb(0, 255, 170); color: white">
            <div class="logo">web app: footer</div>
        </footer>
    </body>
</html>
