
const show_items=document.querySelectorAll(".menu-items p")

show_items.forEach(items=>{
    items.addEventListener("click",e=>{
        items.parentElement.querySelector(".category").classList.toggle("active")
    })
})

const list_category=document.querySelectorAll(".body-add-category")

const btn_1=document.querySelectorAll (".menu-items")