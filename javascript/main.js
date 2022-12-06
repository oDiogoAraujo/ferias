const formularioAluno = document.querySelector('form');
const alunoNome = document.querySelector('#alunoNome');
const alunoHistoria = document.querySelector('#alunoHistoria');
const alunoArquivo = document.querySelector('#alunoArquivo');

formularioAluno.addEventListener('submit', eventoSubmit => {
    eventoSubmit.preventDefault();
    VerificaFormulario();
})

function VerificaFormulario() {
    const campoNomeVazio = alunoNome.value.trim() == "";
    const campoHistoriaVazio = alunoHistoria.value.trim() == "";
    const inputFileTamanho = alunoArquivo.files.length;

    const alertaNome = document.querySelector('#alertaNome');
    const alertaFerias = document.querySelector('#alertaFerias');

    alertaNome.classList.remove('ativado');
    alertaFerias.classList.remove('ativado');


    if (campoNomeVazio) {
        return alertaNome.classList.add('ativado');
    }


    if (inputFileTamanho == 0 && campoHistoriaVazio) {
        return alertaFerias.classList.add('ativado');
    }


    return formularioAluno.submit();
}