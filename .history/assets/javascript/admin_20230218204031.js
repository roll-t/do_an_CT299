
const show_items=document.querySelectorAll(".menu-items p")

show_items.forEach(items=>{
    items.addEventListener("click",e=>{
        items.querySelector(".category").classList.toggle("active")
    })
})


