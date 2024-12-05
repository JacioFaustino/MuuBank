<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seus Dados</title>
    <link rel="stylesheet" href="cu.css">
</head>
<body>
    <header class="navigation">
        <h2>Muubank</h2>
        
        <nav>
            <a class="a1" href="#">Desenvolvedor</a>
            <a class="a3" href="dados.php">Seus dados</a>
            <a class="a1" href="index.html">Registrar-se</a>
        </nav>
    </header>
    <main>
        <div class="wrapper">
    <h2 class="h2o">Seus dados</h2>

        <?php
        
        $nome = ($_GET)["nome"];

        $email = ($_GET)["email"];

        echo"
        <p>Nome: $nome </p>
        <p>Email: $email </p>"
         ?>
        </div>
    </main>
    <div class="rodape">
     <footer>

        <p>IFRN campus Santa Cruz</p>
        <p>Trabalho de Autoria Web</p>
        <p>Prof. Marcelo Figuereido Barbosa Júnior</p>
        <p>Jácio Faustino de Souza</p>
     </footer>
    </div>

</body>
</html>

