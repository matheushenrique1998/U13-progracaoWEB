<html>
    <head>
        <title>alua de php</title>
    </head>
    <body>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, dolores modi. Quae, iste expedita libero consectetur similique officia recusandae laborum rem ipsum officiis debitis saepe in ad, ipsam ducimus exercitationem?</p>
        <?php
            echo "matheus henrique";
           
            ?>
            <br>
            <?php
                print"senac marilia";
           ?>
           <br>
           <!--comentário em html -->
           <?php
            
            //comentário em php
            /*
              varias 
              linhas
            */
            $nomeCompleto="matheus henrique";
            $idade=24;
            $status=true;
            $salario=1320.50;
            echo $nomeCompleto." ".$idade;
            echo"<br>";
            echo "$nomeCompleto $idade anos dzds";
            echo'<br>';
            echo'$nomeCompleto $idade anos';

            $logosenac="https://www.sp.senac.br/o/senac-theme/images/logo_senac_default.png";
         ?>
         <img src="<?=$logosenac ?>" alt="senac marília">

    </body>
</html>