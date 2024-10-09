// Script para interações futuras (galeria, busca, etc.)
document.addEventListener('DOMContentLoaded', function() {
    console.log("Plataforma carregada com sucesso!");
});


document.getElementById('search-button').addEventListener('click', function() {
    var searchTerm = document.getElementById('search-bar').value;
    if (searchTerm) {
        alert('Você pesquisou por: ' + searchTerm);
    } else {
        alert('Por favor, insira um termo de pesquisa.');
    }
});
