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
    <form action="cadastroaluno.php" method="post">

        <label for="nome"> nome</label>
        <input name="nome" type="varchar" id="nome">
        <br>

        <label for="cpf">cpf</label>
        <input name="cpf" type="varchar" id="cpf">
        <br>

        <label for="email">email</label>
        <input name="email" type="int" id="email">
        <br>

        <label for="telefone"> telefone</label>
        <input name="telefone" type="int" id="telefone">
        <br>

        <label for="celular">celular</label>
        <input name="celular" type="int" id="celular">
        <br>

        <button type="submit" name="confirmar">gerar</button>

        <button type="submit">visualizar</button>
        <button type="reset">cancelar</button>
    </form>

    <?php
    include('dados.php');
    if (isset($_POST["confirmar"])) {
        $nome = $_POST["nome"];
        $cpf= $_POST["cpf"];
        $email= $_POST["email"];
        $telefone= $_POST["telefone"];
        $celular = $_POST["celular"];
        
        $aluno = new Aluno($nome, $cpf,$email, $telefone, $celular);
        $biblioteca->adicionarAluno($aluno);
    }
    ?>

    <table class="tabela" border="1">
        <thead>
            <th class="tituloTabela" colspan="5">Informações do Aluno</th>
            <tr>
                <th>nome</th>
                <th>cpf</th>
                <td>email</td>
                <th>telefone</th>
                <th>celular</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($biblioteca->getLivro() as $livro) : ?>
                <tr>
                <td><?= $aluno->nome ?></td>
                <td><?= $aluno->cpf ?></td>
                <td>$email : <?= $aluno->email?></td>
                <td>telefone: <?= $aluno->telefone?></td>
                <td>celular: <?= $aluno->celular ?></td>
               </tr>
            <?php endforeach; ?>
        </tbody>
    </table>;
    <p>
        copyright &COPY; <?= date("Y") ?>- todos os direitos são reservados
    </p>

</body>

</html>