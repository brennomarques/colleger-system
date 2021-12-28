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
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
    </svg>

    @if(session('error'))
        <div class="alert alert-danger d-flex justify-content-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
                {{session('error')}}
            </div>
        </div>

    @endif

    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <img src="{{{ asset('img/login.png') }}}" class="img-fluid" alt="..." width="500">
            </div>
            <div class="col-12 d-flex justify-content-center">
                <p class="fs-3" style="color: #013d52;">Você não tem permissão para acessar este recurso!!</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <p class="fs-5" style="color: #013d52;"><strong><a href="{{ route('login') }}">Clique aqui</a></strong> para login</p>
            </div>
        </div>
    </div>

  </body>
</html>

