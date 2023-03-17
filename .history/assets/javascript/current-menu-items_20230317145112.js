
const list_menu=document.querySelectorAll(".menu .menu-items")

list_menu.forEach((items,index)=>{
    items.addEventListener("click",e=>{
        localStorage.getItem("current_menu_item",`menu-items-${index}`)
    })
})