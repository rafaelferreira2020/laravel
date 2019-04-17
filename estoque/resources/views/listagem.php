<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <title>Controle de Estoque</title>
</head>
<body>
    <div class="container"> 
        <h1>Listagem de Produtos</h1>
            
        <table class="table table-striped table-bordered">
            <thead>
                <td><b>NOME</b></td>
                <td><b>VALOR</b></td>
                <td><b>DESCRICAO</b></td>
                <td><b>QUANTIDADE</b></td>
            </thead>
            <?php  foreach ($produtos as $p):  ?>
            
            <tr>
                <td><?= $p->nome ?></td>
                <td><?= $p->valor ?></td>
                <td><?= $p->descricao ?></td>
                <td><?= $p->quantidade ?></td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>
</html>