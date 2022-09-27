window.addEventListener("scroll",()=>{

    document.querySelectorAll(".esquerda").forEach(
        (animacao, index ) => {
         if(animacao.getBoundingClientRect().top <
        window.innerHeight - 50){
            animacao.classList.add("efeitoScroll")
        }
    })

    document.querySelectorAll(".direita").forEach(
        (animacao, index ) => {
         if(animacao.getBoundingClientRect().top <
        window.innerHeight - 50){
            animacao.classList.add("efeitoScroll")
        }
    })

    document.querySelectorAll(".baixo").forEach(
        (animacao, index ) => {
         if(animacao.getBoundingClientRect().top <
        window.innerHeight - 50){
            animacao.classList.add("efeitoScroll")
        }
    })

})