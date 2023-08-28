<?php
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

class Livro {

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

    }
}

Class Biblioteca{
    public $livros = []; 
    public $alunos = [];

    public function adicionarLivro(Livro $livro){
        $this->livros[] = $livro; 
    }

    public function getLivro(){
        return $this->livros; 
    }

    public function adicionarAluno(Aluno $aluno){

    }

    public function getAluno(){
        return $this->alunos; 
    }
}

class Emprestimo extends Livro {

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
?>
    </body>
</html>