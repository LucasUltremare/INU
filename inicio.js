window.addEventListener("scroll",()=>{

    document.querySelectorAll(".esquerda").forEach(
        (animacao, inicio ) => {
         if(animacao.getBoundingClientRect().top <
        window.innerHeight - 50){
            animacao.classList.add("efeitoScroll")
        }
    })

    document.querySelectorAll(".direita").forEach(
        (animacao, inicio ) => {
         if(animacao.getBoundingClientRect().top <
        window.innerHeight - 50){
            animacao.classList.add("efeitoScroll")
        }
    })

    document.querySelectorAll(".baixo").forEach(
        (animacao, inicio ) => {
         if(animacao.getBoundingClientRect().top <
        window.innerHeight - 50){
            animacao.classList.add("efeitoScroll")
        }
    })

})