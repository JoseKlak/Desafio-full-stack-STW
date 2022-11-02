<h1>Listar todas as receitas!</h1>

<?php
    $sql = "SELECT * FROM receitas order by id_receitas";
    $resultado = $conn->query($sql);
    $qtd = $resultado->num_rows;

    if($qtd > 0) {
        print "<table class='table table-hover  table-striped table-bordered'>";
            print "<tr>";
            print "<th>Codigo</th>";
            print "<th>Nome da receita</th>";
            print "<th>Ações</th>";
            print "</tr>";
        while($row = $resultado->fetch_object()) {
            print "<tr>";
            print "<td>".$row->id_receitas."</td>";
            print "<td>".$row->descricao."</td>";
            print "<td>
                <button onclick=\"location.href='?page=editar-receita&id_receitas=".$row->id_receitas."';\" class='btn btn-success'>Editar</button>
                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir_receita&id_receitas=".$row->id_receitas."';}else{false;}\" class='btn btn-danger'>Excluir</button>
                <button onclick=\"location.href='?page=mostrar-receita&id_receitas=".$row->id_receitas."';\" class='btn btn-primary'>Mostrar mais</button>
            </td>";
            print "</tr>";
        }
        print "</tr>";
    }else {
        print "<p class='alert alert-danger'>Nenhuma receita foi encontrada!</p>";
    }
?>