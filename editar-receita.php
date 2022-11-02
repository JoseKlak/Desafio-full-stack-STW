<h1>Editar receita</h1>

<?php
    $sql = "SELECT * FROM receitas WHERE id_receitas=".$_REQUEST["id_receitas"];
    $resultado = $conn->query($sql);
    $row = $resultado->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar_receita">
    <input type="hidden" name="id_receitas" value="<?php print $row->id_receitas; ?>">
    <div class="mb-3">
        <label>Nome da receita: </label>
        <input type="text" name="nome_receita" class="form-control" value="<?php print $row->descricao; ?>">
    </div>
    
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
</form>