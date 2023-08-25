<html>
    <head>
        <meta charset="utf-8">
        <title>cadastre de aluno</title>
        <style>
            .boxCadastre{
                border:1px solid #cccccc;
                display:inline-block;
                padding:20px;
                width:50px;
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
        <h1>cadastre de aluno</h1>
        <form action="biblioteca.php"method="get">
            <label for="nomedolivro"> livros</label>
            <input name="nomedolivro" type="varchar" id="nomedolivro">
            <br>
            <label for="nomedoisbn">isbn</label>
            <input name="nomedoisbn" type="int" id="nomedoisbn">
            <br>
            <label for="nomedolanopublicacao"> ano publicacao</label>
            <input name="nomedoanopublicacao" type="int" id="nomedoanopublicaco">
            <br>
            <label for="nomedotitulo"> titulo</label>
            <input name="nomedotitulo" type="varchar" id="nomedoanopublicacao">
            <br>
            <label for="nomedoautuor" >autor</label>
            <input name="nomedoautor" type="varchar" id="nomedoautor">
            <br>
            <label for="nomedonumeropagina">numero pagina</label>
            <input name="nomedonumeropagina" type="int" id="nomedonumaropagina">
            <br>tre
            
            <button type="submit">gerar</button>
                <a href="cadastrolivrobiblioteca.php">cadastre </a>
            <button type="submit">visualizar</button>
                <a href="sistemabiblioteca.php">cancelar </a>
        </form>
       <p>$livro : <?=$dadosbiblioteca['livro'] ?></p>
       echo"livro";
       <p>$isbn: <?=$dadosbiblioteca['isbn'] ?></p>
       echo"isbn";
        <p>$AnoPublicacao: <?=$dadosbiblioteca['anopublicacao'] ?></p>
        echo"ano publicacao";
        <p>$titulo : <?=$dadosbiblioteca['titulo'] ?></p>
        echo"titulo";
        <p>$autor : <?=$dadosbiblioteca['autor'] ?></p>
        echo"autor";
        <p>$numeropaginas: <?=$dadosbiblioteca['numeropaginas'] ?></p>
        echo"numero paginas";
        <hr>
        <?php
       
       ?>
       
        <hr>
        
        <p>
            copyright &COPY;  <?=date("Y")?>- todos os direitos são reservados
        </p>
        
    </body>
</html>