document.addEventListener("keyup", e=>{
    if (e.target.matches("#searchTool")){

        document.querySelectorAll(".book").forEach(book =>{

            book.textContent.toLowerCase().includes(e.target.value.toLowerCase())
                ?book.classList.remove( "filtro")
                :book.classList.add("filtro")

        })

    }
})