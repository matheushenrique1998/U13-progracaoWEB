<?php  
   include"funcionario.php";
?>

<html>
    <head>
        <title>lista de funcionarios</title>
</head>
        <body>
          <h1>lista de funcionarios</h1>
          <table border ="1">
            <thead>
           <tr>
           

<th>ID</th>

<th>Nome</th>

<th>E-mail</th>

<th>Telefone</th>

<th>Ação</th>

</tr>
            </thead>
            <tbody>
                <?php foreach($listaFunciorios as $funcionario): ?>

                
               
            <tr>
            <th><?=$funcionario["id"]?></th>
                <td><?=$funcionario["nome"]?></td>
                <td><?=$funcionario["email"]?></td>
                <td><?=$funcionario["telefone"]?></td>
                <td>editar visulisar excluir</td>
            </tr>
            <?php endforeach; ?>
            </tbody>
            <tfoot>
            <tr>
                <td colspan="5">foi encontrado 5 funcionários cadastrados</td>
            </tr>
            </tfoot>
            
          </table>
  </body>
</html>