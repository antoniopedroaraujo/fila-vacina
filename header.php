<!DOCTYPE html>
<html>
    <head>
        <title>Gerenciador de Fila Vacinação</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    	<link rel="stylesheet" type="text/css" href = "estilo.css">
    </head>
    <body>
        <header>
            <div class="container">
                <a href="?pagina=chamar"><img src= "https://seeklogo.com/images/Z/ze-gotinha-sus-logo-FE66AACA97-seeklogo.com.png"
                 title="Ze Gotinha" width="150" height="150"></a>
                <div id="menu">
                    <?php if (isset($_SESSION['login'])) { ?>
                        <a href="?pagina=chamar">Chamar Paciente</a>
                        <a href="?pagina=adicionar">Inserir Paciente</a>
                        <a href="?pagina=remover">Remover Paciente</a>
                        <a href="logout.php"> (Sair/Logout)</a>
                    <?php } ?>
                </div>
            </div>
        </header>
        <div id="conteudo" class="container">
