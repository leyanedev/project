// script.js

// Função para validar a data de nascimento
function validarDataNascimento(dataNascimento) {
    const data = new Date(dataNascimento);
    const dataAtual = new Date();

    // Verifica se a data de nascimento é válida
    if (isNaN(data.getTime())) {
        return false;
    }

    // Verifica se a data de nascimento não é futura
    if (data > dataAtual) {
        return false;
    }

    return true;
}

// Adiciona um event listener ao formulário
document.addEventListener("DOMContentLoaded", function () {
    const formulario = document.getElementById("signoForm");

    if (formulario) {
        formulario.addEventListener("submit", function (event) {
            const dataNascimento = document.getElementById("dataNascimento").value;

            if (!validarDataNascimento(dataNascimento)) {
                alert("Por favor, insira uma data de nascimento válida e que não seja futura.");
                event.preventDefault(); // Previne o envio do formulário
            }
        });
    }
});
