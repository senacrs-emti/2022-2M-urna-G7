function clicou(n){
    let numeroP = document.querySelector('.tela');
    if (numeroP !== null) {
        numeroP.innerHTML += n;
    }
}