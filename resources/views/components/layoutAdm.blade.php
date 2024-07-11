<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio</title>
    <link rel="stylesheet" href={{$css}}>
</head>

<body>

    <header class="header2">
        <nav class="menu-hamburger">

            <input id="menu-hamburguer" type="checkbox" />
            <label for="menu-hamburguer">
                <div class="menu">
                    <span class="hamburguer"></span>
                </div>
            </label>

            <ul class="menu-hamburguer-elements show">

                <div class="img_topo">
                    <img src="jpg/das3.png" alt="Descrição da imagem">
                </div>

                <li>
                    <a href="#">Inicio</a>
                </li>
                <li>
                    <a href="#">Privacidade</a>
                </li>

                <li>
                    <a href="#">Ajuda/Suporte</a>
                </li>
            </ul>
        </nav>
    </header>

    {{$slot}}

   
</body>

</html>