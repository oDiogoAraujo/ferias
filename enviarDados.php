<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Reset total-->
    <link rel="stylesheet" href="CSS/reset.css">
    <!--Adicionando Fonte DynaPuff e Baloo2 pelo GoogleFonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500&family=DynaPuff:wght@400;500;600&display=swap"
        rel="stylesheet">
    <!-- CSS Principal-->
    <link rel="stylesheet" href="CSS/style.css">
    <title>Projeto Ferias</title>
</head>

<body>

    <div class="container_projetoFerias">

        <section class="container_alunoInformacoes">
            <!-- <h2 class="titulo">Projeto Ferias</h2>-->
            <?php
            
            echo('<h2 class="subtitulo_aluno">Os dados foram enviados para o professor!</h2>');
            
            $nomeAluno = $_POST['alunoNome'];
            $alunoTurma = $_POST['alunoTurma'];
            $alunoHistoria = $_POST['alunoHistoria'];
            //Pegando o upload do aluno
            $alunoArquivo = $_FILES['alunoArquivo']['name'];
            $caminhoAtualArquivo = $_FILES['alunoArquivo']['tmp_name'];
            

            //criando o nome da pasta junto com nome o aluno e a data do servidor
            $pastaNovoAluno = ($nomeAluno . "_" . date('d.m.Y-H-i-s'));
            //criando a pasta em "ferias-aluno" e atribuindo o nome
            mkdir("ferias-alunos/". $pastaNovoAluno);

            $feriasArquivo = ($nomeAluno . '.txt');
            $manipularArquivo = fopen($feriasArquivo, "a+");
            fwrite($manipularArquivo, "Nome do aluno: ". $nomeAluno . "\n");
            fwrite($manipularArquivo, "Turma do aluno: ". $alunoTurma . "\n");
            fwrite($manipularArquivo, "Relato de ferias do aluno: ". $alunoHistoria . "\n");
            fclose($manipularArquivo);
            
            //definindo o caminho para a pasta 
            $moverArquivo = "ferias-alunos/$pastaNovoAluno/$feriasArquivo";
            //movendo o projeto do aluno para a pasta correta
            rename($feriasArquivo, $moverArquivo);
            //movendo o upload do aluno para a pasta correta
            move_uploaded_file($caminhoAtualArquivo, "ferias-alunos/$pastaNovoAluno/$alunoArquivo");
            

            ?>

        </section>
    </div>

</body>

</html>