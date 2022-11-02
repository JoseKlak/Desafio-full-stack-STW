<h1>Criar novo ingrediente</h1>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar_ingrediente">
    <div class="mb-3">
        <label>Nome do ingrediente: </label>
        <input type="text" name="nome_ingrediente" class="form-control" placeholder="Ex: Milho">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Criar novo ingrediente</button>
    </div>
</form>