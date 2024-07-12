<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/recuperacao') }}">
    <title>Recuperação de senha</title>
</head>


<body>

    <div class="container" id="container">
        <div class="form-container sign-up"></div>
        <div class="form-container sign-in">
            <form>
                <h1>Atualize a senha</h1>
                <div class="social-icons">
                </div>
                <span>Preencha com seu e-mail abaixo</span>
                <input type="email" placeholder="Email">
                <button>Enviar</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Som Da Rua</h1>
                    <p>Digite seu e-maiil para modificar sua senha </p>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/login.js')}}"></script>
</body>

</html>