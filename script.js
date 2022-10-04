const preto1 = document.querySelectorAll(".preto1 > div")

function desmarcar(preto1){
    preto1.classList.remove("selecionada")
  }

  preto1.forEach(function(preto1){
  preto1.onmousedown = function(){
   preto1.classList.add("selecionada")

  }
  
  
preto1.onmouseup = () => desmarcar (preto1)
preto1.onmouseleave = () => desmarcar(preto1)
})