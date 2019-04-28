<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link href="/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <title>Controle de Estoque</title>
</head>
<body>
<div class="container">

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar">teste</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{action('ProdutoController@lista')}}">
                            INICIO
                        </a>
                    </li>
                </ul>
                @if (Auth::guest())
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/login">Login</a></li>
                    </ul>
                @else
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{action('ProdutoController@novo')}}">
                                Novo
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a> {{ Auth::user()->name }} </a></li>
                        <li><a href="/auth/logout">SAIR</a></li>
                    </ul>
                @endif
            </div>
        </div>
    </nav>

    @yield('conteudo')
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <footer class="footer">
        <p>© Livro de Laravel do Alura.</p>
    </footer>
</div>
</body>
</html>