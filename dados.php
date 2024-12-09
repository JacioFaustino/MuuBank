<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seus Dados</title>
    <link rel="stylesheet" href="cup-index.css">
    <link rel="stylesheet" href="cup.css">
</head>
<body>
    <header class="navigation">
        <h2>Muubank</h2>
        
        <nav>
            <a class="a1" href="dev.html">Desenvolvedor</a>
            <a class="a3" href="#">Seus dados</a>
            <a class="a1" href="index.html">Registrar-se</a>
        </nav>
    </header>
    <main>
    <div class="wrapper1">
        <h2 class="h2o">Seus dados</h2>
        <div class="piloto">
            <?php
                $nome = ($_POST)["nome"] ?? "Não preenchido";
                $email = ($_POST)["email"] ?? "N/A";
                echo"
                <p>Nome: $nome</p>
                <p> Email: $email</p>"
            ?>
        </div>
        <div id="paragrafos" class="p2">

            <?php 
                $telefone = ($_POST)["telefone"] ?? "Não preenchido";
                $filhos = ($_POST)["filhos"] ?? "N/A";
                echo"<p>Telefone: $telefone</p> ";
                if($filhos == ''){
                    echo "<p>Filhos: N/A</p> ";
                }
                else{
                echo'<p>Filhos:'. $filhos .'</p>';
                }
            ?>
        </div>
        <div class="p3">
            <?php 
                $dataNas = ($_POST)["dataNas"] ?? "Não preenchido";
                $genero = ($_POST)["genero"] ?? "N/A";
                echo"<p>Data de Nascimento: $dataNas</p> ";
                echo"<p>Gênero: $genero</p> ";
            ?>
        </div>
        <div class="p3">
            <?php 
                $PrazoAss = ($_POST)["PrazoAss"] ?? "Não preenchido";
                $senha = ($_POST)["senha"] ?? "N/A";
                echo"<p>Prazo da Assinatura: $PrazoAss</p> ";
                echo"<p>Senha: $senha</p> ";
            ?>
        </div>
        <div class="p3">
            <?php
                $file = ($_POST)['file'] ?? "N/A";
                $termos = ($_POST)["termos"] ?? "N/A";
                if($file == ''){
                    echo'<p>Arquivo: N/A</p>';
                }
                else{
                    echo'<p>Arquivo: '. $file .' </p>';
                }
                echo"<p>Termos: $termos</p> ";
            ?>
        </div>
    </div>    
    </main>
    <div class="rodape1">
     <footer>
        <p>IFRN campus Santa Cruz</p>
        <p>Trabalho de Autoria Web</p>
        <p>Prof. Marcelo Figuereido Barbosa Júnior</p>
        <p>Jácio Faustino de Souza</p>
     </footer>
    </div>

</body>
</html>

