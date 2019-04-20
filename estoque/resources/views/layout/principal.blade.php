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
            <a class="navbar-brand" href="/produtos"> Estoque Laravel</a>
        </div>

        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="{{action('ProdutoController@lista')}}">
                    Listagem
                </a>
            </li>
            <li>
                <a href="{{action('ProdutoController@novo')}}">
                    Novo
                </a>
            </li>
        </ul>

        </div>
    </nav>

        @yield('conteudo')

    <footer class="footer">
        <p>© Livro de Laravel do Alura.</p>
    </footer>

    </div>
</body>
</html>