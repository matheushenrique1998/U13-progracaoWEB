<?php 
    include('classes.php');

    $aluno = new aluno (" Pedro", "351.548.753-01", "pedro@gmail.com", "(14) 8888-8888", "(14) 99999-9999");

    $livro1 = new Livro("978-1234567880", "2023", "o carro", "ana", "100");
    $livro2 = new Livro("978-1234567880", "2023", "A moto", "ana", "100");
   
    $biblioteca = new Biblioteca();

    $biblioteca->adicionarLivro($livro1); 
    $biblioteca->adicionarLivro($livro2); 
     

    $biblioteca->adicionarAluno($aluno);

?>