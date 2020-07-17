document.querySelectorAll('.click-menu').forEach(link =>{
    const conteudo = document.getElementById('conteudo');

    link.onclick = function(e){
        e.preventDefault();
        fetch(link.href)
            .then(resp => resp.text())
            .then(html => conteudo.innerHTML = html)
    }
});

function msg() {
    alert("Programar essa parte do envio");
}

function carregahome(){
    const conteudo = document.getElementById('conteudo');
    fetch('./pages/home.html')
            .then(resp => resp.text())
            .then(html => conteudo.innerHTML = html)
}
carregahome();

function carregaSobre(){
    const conteudo = document.getElementById('conteudo');
    fetch('./pages/sobre.html')
            .then(resp => resp.text())
            .then(html => conteudo.innerHTML = html)
}

function carregaContato(){
    const conteudo = document.getElementById('conteudo');
    fetch('./pages/contato.html')
            .then(resp => resp.text())
            .then(html => conteudo.innerHTML = html)
}

new WOW().init();