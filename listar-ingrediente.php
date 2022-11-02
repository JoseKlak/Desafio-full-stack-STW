<h1>Listar todos os ingredientes!</h1>

<?php
    $sql = "SELECT * FROM ingredientes order by id_ingredientes";
    $resultado = $conn->query($sql);
    $qtd = $resultado->num_rows;

    if($qtd > 0) {
        print "<table class='table table-hover  table-striped table-bordered'>";
            print "<tr>";
            print "<th>Codigo</th>";
            print "<th>Nome do ingrediente</th>";
            print "<th>Ações</th>";
            print "</tr>";
        while($row = $resultado->fetch_object()) {
            print "<tr>";
            print "<td>".$row->id_ingredientes."</td>";
            print "<td>".$row->descricao."</td>";
            print "<td> 
                <button onclick=\"location.href='?page=editar-ingrediente&id_ingredientes=".$row->id_ingredientes."';\" class='btn btn-success'>Editar</button>
                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir_ingrediente&id_ingredientes=".$row->id_ingredientes."';}else{false;}\" class='btn btn-danger'>Excluir</button>
            </td>";
            print "</tr>";
        }
        print "</tr>";
    }else {
        print "<p class='alert alert-danger'>Nenhum ingrediente foi encontrado!</p>";
    }
?>