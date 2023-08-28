<html>

<head>
    <meta charset="utf-8">
    <title>cadastre de livros</title>
    <style>
        .boxCadastre {
            border: 1px solid #cccccc;
            display: inline-block;
            padding: 20px;
            width: 50px;
            text-align: center;
            background-color: #fbec5d;
            font-size: 20px;
            color: black;
            font-weight: bold;
            margin: 5px;
        }
    </style>
</head>

<body>
    <h1>cadastro de livros</h1>
    <form action="cadastrolivro.php" method="post">

        <label for="Titulo"> titulo</label>
        <input name="Titulo" type="varchar" id="Titulo">
        <br>

        <label for="Autor">autor</label>
        <input name="Autor" type="varchar" id="Autor">
        <br>

        <label for="ISBN">isbn</label>
        <input name="ISBN" type="int" id="ISBN">
        <br>

        <label for="AnoPublicacao"> ano publicacao</label>
        <input name="AnoPublicacao" type="int" id="AnoPublicacao">
        <br>

        <label for="numeropaginas">numero pagina</label>
        <input name="numeropaginas" type="int" id="numeropaginas">
        <br>

        <button type="submit" name="confirmar">gerar</button>

        <button type="submit">visualizar</button>
        <button type="reset">cancelar</button>
    </form>

    <?php
    include('dados.php');
    if (isset($_POST["confirmar"])) {
        $ISBN = $_POST["ISBN"];
        $AnoPublicacao = $_POST["AnoPublicacao"];
        $Titulo=$_POST["Titulo"];
        $Autor=$_POST["Autor"];
       $numeropaginas = $_POST["numeropaginas"];
        
         
        $livro = new Livro($ISBN, $AnoPublicacao, $Titulo, $Autor, $numeropaginas);
        $biblioteca->adicionarLivro($livro);
    }
    ?>

    <table class="tabela" border="1">
        <thead>
            <th class="tituloTabela" colspan="5">Informações do Emprestimo</th>
            <tr>
                
                <th>ISBN</th>
               <TR>AnoPublicacao</TR>
                <TR>Titulo</TR>
                <tr>Autor</tr>
                <tr>numeropaginas</tr>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($biblioteca->getLivro() as $livro) : ?>
                <tr>
            
                <td>ISBN: <?= $livro->ISBN ?></td>
                <td>Ano de Publicação: <?= $livro->AnoPublicacao ?></td>
                <td>Titulo: <?= $livro->Titulo?></td>
                <td>Autor : <?= $livro->Autor?></td>
                <td>Número de Páginas: <?= $livro->numeropaginas ?></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>;
    <p>
        copyright &COPY; <?= date("Y") ?>- todos os direitos são reservados
    </p>

</body>

</html>