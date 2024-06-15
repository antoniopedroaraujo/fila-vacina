<center><h1>Bem-vindo(a) a fila de Vacinação</h1></center>
<form method="POST" action="login.php"> 
    <label>Usuário</label>
    <input type="text" name="usuario" placeholder="Insira o usuário" class="form-control">
    <br>
    <label>Senha</label>
    <input type="password" name="senha" placeholder="Insira a senha" class="form-control"> 
    <br>
    <input type="submit" value="Acessar" class="btn btn-primary btn-lg"> 
</form>
<br>
<?php if (isset($_GET['erro'])) { ?>
    <div class="alert alert-danger" role="alert">
        Seu acesso foi negado!
    </div>
<?php } ?>