
const show_items=document.querySelectorAll(".menu-items p")

show_items.forEach(items=>{
    items.addEventListener("click",e=>{
        items.parentElement.querySelector(".category").classList.toggle("active")
    })
})

const list_category=document.querySelectorAll(".body-add-category")

const btn_1=document.querySelectorAll(".menu-items .category-items")[0]
btn_1.addEventListener("click",e=>{
    list_category.forEach(items=>{
        items.classList.remove("active")
    })
    list_category[0].classList.add("active")
})