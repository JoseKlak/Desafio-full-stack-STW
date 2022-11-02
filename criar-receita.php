<h1>Criar nova receita</h1>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar_receita">
    <div class="mb-3">
        <label>Nome da receita: </label>
        <input type="text" name="nome_receita" class="form-control" placeholder="Ex: Ração para novilhos">
    </div>

    <div class="mb-3">
        <label>Primeiro ingrediente: </label>
        <input type="text" name="nome_ingrediente" class="form-control" placeholder="Ex: Milho">
    </div>
    <div class="mb-3">
        <label>Quantidade prevista em KG: </label>
        <input type="number" name="quantidade" class="form-control" placeholder="Ex: 1000">
    </div>

    <div class="mb-3">
        <label>Segundo ingrediente: </label>
        <input type="text" name="nome_ingrediente2" class="form-control" placeholder="Ex: Milho">
    </div>
    <div class="mb-3">
        <label>Quantidade prevista em KG: </label>
        <input type="number" name="quantidade2" class="form-control" placeholder="Ex: 1000">
    </div>
    
    <div class="mb-3">
        <label>Terceiro ingrediente: </label>
        <input type="text" name="nome_ingrediente3" class="form-control" placeholder="Ex: Milho">
    </div>
    <div class="mb-3">
        <label>Quantidade prevista em KG: </label>
        <input type="number" name="quantidade3" class="form-control" placeholder="Ex: 1000">
    </div>

    <div class="mb-3">
        <label>Quarto ingrediente: </label>
        <input type="text" name="nome_ingrediente4" class="form-control" placeholder="Ex: Milho">
    </div>
    <div class="mb-3">
        <label>Quantidade prevista em KG: </label>
        <input type="number" name="quantidade4" class="form-control" placeholder="Ex: 1000">
    </div>

    <div class="mb-3">
        <label>Quinto ingrediente: </label>
        <input type="text" name="nome_ingrediente5" class="form-control" placeholder="Ex: Milho">
    </div>
    <div class="mb-3">
        <label>Quantidade prevista em KG: </label>
        <input type="number" name="quantidade5" class="form-control" placeholder="Ex: 1000">
    </div>
    
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Criar nova receita</button>
    </div>
</form>
