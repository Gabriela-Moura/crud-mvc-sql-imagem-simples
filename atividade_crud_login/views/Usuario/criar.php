<h2>Novo Usuário</h2>
<!-- enctype -> para trabalhar com imagens -->
<form method="POST" enctype="multipart/form-data">

    Nome: <input type="text" name="nome"><br><br>
    Email: <input type="text" name="email"><br><br>
    Login: <input type="text" name="login"><br><br>
    Senha: <input type="password" name="senha"><br><br>
    Papel:
    <select name="papel">
        <option value="">Selecione uma opção...</option>
        <option value="admin">Administrador</option>
        <option value="user">Cliente</option>
    </select>
    <br><br>
    Imagem: <input type="file" name="imagem"><br><br>

    <button type="submit">Salvar</button>

</form>