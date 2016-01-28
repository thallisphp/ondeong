html<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>{{ $titulo or '' }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {!! Html::style('frontend/css/bootstrap.css') !!}
    {!! Html::style('frontend/css/main.css') !!}
    {!! Html::style('frontend/css/whhg.css') !!}

    @yield('head')
</head>
<body onload="initialize()">

@yield('conteudo')
@yield('scripts')
</body>
</html>
