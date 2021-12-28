<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link rel="shortcut icon" href="{{{ asset('img/icon.png') }}}">

        <title>Faculdade santos</title>

  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <img src="{{{ asset('img/login.png') }}}" class="img-fluid" alt="..." width="500">
            </div>
            <div class="col-12 d-flex justify-content-center">
                <p class="fs-3" style="color: #013d52;">Você esta logado, <strong><a href="{{ route('dashboard') }}">clique aqui</a></strong> para acessar dashboard</p>
            </div>
        </div>
    </div>

  </body>
</html>

