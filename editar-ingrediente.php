<h1>Editar Ingrediente</h1>

<?php
    $sql = "SELECT * FROM ingredientes WHERE id_ingredientes=".$_REQUEST["id_ingredientes"];
    $resultado = $conn->query($sql);
    $row = $resultado->fetch_object();
    ?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar_ingrediente">
    <input type="hidden" name="id_ingredientes" value="<?php print $row->id_ingredientes; ?>">
    <div class="mb-3">
        <label>Nome do ingrediente: </label>
        <input type="text" name="nome_ingrediente" class="form-control" value="<?php print $row->descricao; ?>">
    </div>
    
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
</form>