<html>
    <head>
        <meta charset="utf-8">
        <title>cadastre de aluno</title>
        <style>
            .boxSenha{
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
        <h1>cadastre de aluno<</h1>
        <form action="bilioteca.php"method="get">
            <label for="qtdeCadastre">quantidades de cadastre</label>
            <br>
            <input name="qtdeCadastre" type="number" id="qtdeCadastre">
            <br>
            <button type="submit">gerar</button>
            <a href="qtdeCadastre.php">cancelar </a>
        </form>
        <hr>
        <?php
        if(isset($_GET['qtdeCadastre'])):?>
            <?php for($i=1;$i <= $_GET['qtdeCadatres'];$i++):?>
            <div class="boxCadastre">
            <?=$i?>
        </div>
        <?php endfor; ?>
        <?php endif; ?> 
        <hr>
        
        <p>
            copyright &COPY;  <?=date("Y")?>- todos os direitos são reservados
        </p>
    </body>
</html>