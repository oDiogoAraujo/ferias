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
    <!-- Adicionando a fonte Just Another Hand -->
    <link href="https://fonts.googleapis.com/css2?family=Just+Another+Hand&display=swap" rel="stylesheet">
    <!-- CSS Principal-->
    <link rel="stylesheet" href="CSS/style.css">
    <title>Projeto Ferias</title>
</head>

<body>

    <form class="container_projetoFerias" action="enviarDados.php" method="post" enctype="multipart/form-data">
        <section class="container_alunoInformacoes">
            <h2 class="tituloProjeto">Projeto Ferias</h2>
            <div class="alunoDados">
                <span class="espacador_informacao">
                    <label for="alunoNome" class="subtitulo_aluno">Insira seu nome</label>
                    <input type="text" placeholder="Seu lindo nome aqui" id="alunoNome" name="alunoNome">
                    <h3 class="alertaFormulario" id="alertaNome">Preencha esse campo!</h3>

                </span>
                <span class="espacador_informacao">
                    <label for="alunoTurma" class="subtitulo_aluno" for="alunoTurma">Insira sua turma</label>
                    <select name="alunoTurma" id="alunoTurma">
                        <option value="Turma A">Turma A</option>
                        <option value="Turma B">Turma B</option>
                        <option value="Turma C">Turma C</option>
                    </select>
                </span>
            </div>
            <h3 class="subtitulo_aluno" id="leiProtecaoDados">Todas as informações prestadas nesse site, são de
                responsabilidade do instituto.</h3>
        </section>

        <section class="container_alunoRelato">
            <img id="monstroRoxao" src="imagens/monstro.png">
            <textarea name="alunoHistoria" id="alunoHistoria" cols="30" rows="10"
                placeholder="Nas minhas ferias..."></textarea>

            <h2 class="subtitulo_aluno subtitulo_arquivo">Se quiser, insira um arquivo:</h2>
            <label for="alunoArquivo" class="btn-arquivo">Escolher Arquivo</label>
            <input type="file" id="alunoArquivo" name="alunoArquivo" accept=".jpg, .jpeg, .png, .mp3">
            <h3 class="alertaFormulario" id="alertaFerias">Escreva a suas ferias ou insira um arquivo !</h3>

            <button type="submit" class="btn-enviar">Enviar</button>
        </section>
    </form>


    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>

    <script src="javascript/main.js"></script>
</body>

</html>