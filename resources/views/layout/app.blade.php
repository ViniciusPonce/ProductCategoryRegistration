<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <style>
        body {
            background:url("https://images.pexels.com/photos/33545/sunrise-phu-quoc-island-ocean.jpg?cs=srgb&dl=pexels-pixabay-33545.jpg&fm=jpg") center center/cover no-repeat local ;
            background-attachment: fixed;
            padding: 20px;
        }
        .navbar{
            margin-bottom: 20px;
        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            color: white;
            text-align: center;
            font-weight: lighter;
        }
    </style>
    <title>Cadastro de Produtos</title>
</head>
<body>
    <div class="container">
        @component('component_navbar', ["current"=>$current])
        @endcomponent
        <main role="main">
            @hasSection('body')
                @yield('body')
            @endif
        </main>

    </div>

    <script src="{{asset('js/app.js')}}" type="text/javascript">

    </script>
    <div class="footer">&reg ViniciusPonce</div>
</body>
</html>
