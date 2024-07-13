<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/recuperacao.css') }}">
    <title>Recuperação de senha</title>
</head>
<body>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="container" id="container">
        <div class="form-container sign-in">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email">Email</label>
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="btn btn-primary">
                    EMAIL PASSWORD RESET LINK
                </button>
            </div>
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