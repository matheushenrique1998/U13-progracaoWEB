
?>
<html>
    <head>
              <title>biblioteca </title>
    </head>
    <body>
         <h1>biblioteca</h1>
         <?php

 

use Aluno as GlobalAluno;

 

class Aluno {

    public $nome;

    public $cpf;

    public $email;

    public $telefone;

    public $celular;

 

    public function __construct($nome, $cpf, $email, $telefone, $celular) {

        $this->nome = $nome;

        $this->cpf = $cpf;

        $this->email = $email;

        $this->telefone = $telefone;

        $this->celular = $celular;

    }

 

    public function exibirInformacoes() {

        echo "<table border='1'>";

        echo "<tr><th>Informações do Aluno</th></tr>";

        echo "<tr><td>Nome: {$this->nome}</td></tr>";

        echo "<tr><td>CPF: {$this->cpf}</td></tr>";

        echo "<tr><td>Email: {$this->email}</td></tr>";

        echo "<tr><td>Telefone: {$this->telefone}</td></tr>";

        echo "<tr><td>Celular: {$this->celular}</td></tr>";

        echo "</table>";

    }

}

$aluno = new aluno (" Pedro", "351.548.753-01", "pedro@gmail.com", "(14) 8888-8888", "(14) 99999-9999");



 

$aluno->exibirInformacoes();



class BibliotecaLivro {

    public $ISBN;

    public $AnoPublicacao;

    public $Titulo;

    public $Autor;

    public $numeropaginas;

 

    public function __construct($ISBN, $AnoPublicacao, $Titulo, $Autor, $numeropaginas) {

        $this->ISBN = $ISBN;

        $this->AnoPublicacao = $AnoPublicacao;

        $this->Titulo = $Titulo;

        $this->Autor = $Autor;

        $this->numeropaginas = $numeropaginas;

    }

 

    public function exibirInformacoes() {

        echo "<table border='1'>";

        echo "<tr><th>Informações do livro</th></tr>";

        echo "<tr><td>ISBN: {$this->ISBN}</td></tr>";

        echo "<tr><td>Ano de Publicação: {$this->AnoPublicacao}</td></tr>";

        echo "<tr><td>Título: {$this->Titulo}</td></tr>";

        echo "<tr><td>Autor: {$this->Autor}</td></tr>";

        echo "<tr><td>Número de Páginas: {$this->numeropaginas}</td></tr>";

        echo "</table>";

    }

}



 

 

class Emprestimo extends BibliotecaLivro {

    private $aluno;

    private $dataEmprestimo;

    private $dataDevolucao;

 

    public function __construct($aluno, $ISBN, $AnoPublicacao, $Titulo, $Autor, $numeropaginas, $dataEmprestimo,$dataDevolucao) {

        parent::__construct($ISBN, $AnoPublicacao, $Titulo, $Autor, $numeropaginas);

        $this->aluno = $aluno;

        $this->dataEmprestimo = $dataEmprestimo;

        $this->dataDevolucao = $dataDevolucao;

    }

 

    public function exibirInformacoes() {

        echo "<table border='1'>";

        echo "<tr><th>Informações do Empréstimo</th></tr>";

        echo "<tr><td>Aluno: {$this->aluno->nome}</td></tr>";

        echo "<tr><td>Data do Empréstimo: {$this->dataEmprestimo}</td></tr>";

        echo "<tr><td>Livro:{$this->Titulo}</td></tr>";

        echo "<tr><td>data de devolução:{$this->dataDevolucao}</td></tr>";

        echo "</table>";

 

        parent::exibirInformacoes();

    }

}

 

 

$aluno = new Aluno(" Pedro", "551.948.753-01", "pedro@gmail.com", "(14)8888-8888", "(14) 99999-9999");

$livro = new BibliotecaLivro("978-1234567880", "2023", "o carro", "ana", "100");

$emprestimo = new Emprestimo($aluno, "978-1234567880", "2023", "o carro", "ana", "100", "2050-08-18","2001-09-01");

 

$emprestimo->exibirInformacoes();

?>
    </body>
</html>