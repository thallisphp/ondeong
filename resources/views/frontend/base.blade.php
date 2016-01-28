<!doctype html>
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
<body>

@yield('conteudo')

<script>
    window.asset = function(caminho){
        return "{!! asset('/') !!}" + caminho;
    };
</script>

{!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js') !!}
{!! Html::script('http://maps.googleapis.com/maps/api/js?key=AIzaSyCsbzuJDUEOoq-jS1HO-LUXW4qo0gW9FNs&sensor=false') !!}
{!! Html::script('frontend/js/bootstrap.js') !!}
{!! Html::script('frontend/js/owl.carousel.js') !!}
{!! Html::script('frontend/js/pxgradient-1.0.2.jquery.js') !!}
{!! Html::script('js/app.js') !!}

@yield('scripts')
</body>
</html>
