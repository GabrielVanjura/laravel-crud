<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="<?= asset('css/app.css'); ?>">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="#" class="navbar-brand">Lara<b>Dev</b></a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="<?= url('/imoveis/'); ?>" class="nav-link">Listar todos os Imóveis</a></li>
            <li class="nav-item"><a href="<?= url('/imoveis/novo'); ?>" class="nav-link">Cadastrar novo Imóvel</a></li>
        </ul>
    </div>
</nav>
<div class="container my-3">
    @yield('content')
</div>

<script src="<?= asset('js/app.js'); ?>"></script>
</body>
</html>
