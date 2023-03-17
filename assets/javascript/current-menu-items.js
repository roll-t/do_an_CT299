addEventListener("load",e=>{
    localStorage.setItem("current_menu_item",`menu-items-1`)
})
const list_menu=document.querySelectorAll(".menu .menu-items")

list_menu.forEach((items,index)=>{
    items.addEventListener("click",e=>{
        localStorage.setItem("current_menu_item",`menu-items-${index+1}`)
    })
})
const items_current=document.querySelector(`.menu .${localStorage.getItem("current_menu_item")}`)

items_current && items_current.classList.add("active")