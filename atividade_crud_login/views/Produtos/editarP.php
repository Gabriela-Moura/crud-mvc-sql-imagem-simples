<h2>Editar Produtos</h2>
<form method="POST" enctype="multipart/form-data">

Nome:
<input type="text" name="nomeP" value="<?php echo $produto['nomeP']; ?>"><br><br>
Descrição:
<input type="text" name="descricao" value="<?php echo $produto['descricao']; ?>"><br><br>
Fornecedor:
<input type="text" name="fornecedor" value="<?php echo $produto['fornecedor']; ?>"><br><br>
Quantidade:
<input type="int" name="quantidade" value="<?php echo $produto['quantidade']; ?>"><br><br>
Fabricante:
<input type="text" name="fabricante" value="<?php echo $produto['fabricante']; ?>"><br><br>
Preco:
<input type="decimal" name="preco" step="0.01" value="<?php echo $produto['preco'] ?>"><br><br>
Margem:
<input type="decimal" name="margem" step="0.01" value="<?php echo $produto['margem']; ?>"><br><br>
Data Cadastro:
<input type="date" name="data_cadastro" value="<?php echo $produto['data_cadastro']; ?>"><br><br>
Status:
    <select name="status_pro" value="<?php echo $produto['status_pro']; ?>">
        <option value="Disponível">Disponível</option>
        <option value="Indisponível">Indisponível</option>
    </select>
<br><br>
Nova Imagem:
<br>
<?php if ($produto['imagemP']) { ?>
    <img src="<?php echo $produto['imagemP']; ?>" width="100"><br>

    <?php } ?>
<br>
<input type="file" name="imagemP"><br><br>

<input type="hidden" name="imagem_atual" value="<?php echo $produto['imagemP']; ?>">

<button type="submit">Atualizar</button>

</form>