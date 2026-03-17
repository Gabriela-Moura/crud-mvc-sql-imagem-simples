<h2>Lista de Produtos</h2>
<br><br>
<a href="index.php?acaoP=criarP">Novo Produto</a>
<br><br>
<style>
table {
    border-collapse: collapse;
    width: 100%;
    margin: 10px
}

table, th, td {
    border: 1px solid black;
}

th, td {
    padding: 5px;
}
</style>

<table border="01">
<h2> Tabela Produtos </h2>
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Fornecedor</th>
    <th>Quantidade</th>
    <th>Fabricante</th>
    <th>Preço</th>
    <th>Data de Cadastro</th>
    <th>Status</th>
    <th>Imagem</th>
</tr>
<?php foreach ($produtos as $p) { ?>
<tr>
    <td><?php echo $p['id_produto'];?></td>
    <td><?php echo $p['nomeP'];?></td>
    <td><?php echo $p['fornecedor'];?></td>
    <td><?php echo $p['quantidade'];?></td>
    <td><?php echo $p['fabricante'];?></td>
    <td><?php echo $p['preco']; ?></td>
    <td><?php echo $p['data_cadastro'];?></td>
    <td><?php echo $p['status_pro'];?></td>
    <td>
        <?php if ($p['imagemP']) { ?>
            <img src="<?php echo $p['imagemP']; ?>" width="80">
        <?php } ?>
    </td>
    <td>
        <a href="index.php?acaoP=editarP&id_produto=<?php echo $p['id_produto']; ?>"> Editar </a> |
        <a href="index.php?acaoP=excluir&id_produto=<?php echo $p['id_produto']; ?>"> Excluir </a>
    </td>
</tr>
<?php } ?>