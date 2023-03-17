
const show_items=document.querySelectorAll(".menu-items p")
console.log(show_items)
show_items.forEach(items=>{
    items.addEventListener("click",e=>{
        items.querySelector(".category").classList.add("active")
    })
})


