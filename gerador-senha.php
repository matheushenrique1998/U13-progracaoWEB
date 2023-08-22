<html>
    <head>
        <meta charset="utf-8">
        <title>gerador de senha</title>
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
        <h1>gerador de senha</h1>
        <form action="gerador-senha.php"method="get">
            <label for="qtdeSenha">quantidades de senhas</label>
            <br>
            <input name="qtdeSenha" type="number" id="qtdeSenha">
            <br>
            <button type="submit">gerar</button>
            <a href="gerador-senha.php">cancelar senhas</a>
        </form>
        <hr>
        <?php
        if(isset($_GET['qtdeSenha'])):?>
            <?php for($i=1;$i <= $_GET['qtdeSenha'];$i++):?>
            <div class="boxSenha">
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