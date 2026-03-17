<h2>Novo Produto</h2>
<form method="POST" enctype="multipart/form-data">

    Nome: <input type="text" name="nomeP"><br><br>
    Descrição: <input type="text" name="descricao"><br><br>
    Fornecedor: <input type="text" name="fornecedor"><br><br>
    Quantidade: <input type="int" name="quantidade"><br><br>
    Fabricante: <input type="text" name="fabricante"><br><br>
    Preço: <input type="decimal" name="preco"><br><br>
    Margem: <input type="decimal" name="margem"><br><br>
    Data Cadastro: <input type="date" name="data_cadastro"><br><br>
    Status: 
    <select name="status_pro">
        <option value="">Selecione uma opção...</option>
        <option value="Disponível">Disponível</option>
        <option value="Indisponível">Indisponível</option>
    </select>
    <br><br>
    Imagem: <input type="file" name="imagemP"><br><br>

    <button type="submit">Salvar</button>

</form>