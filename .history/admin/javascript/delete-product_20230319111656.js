const list_items_delete=document.querySelectorAll(".delete-confirm");
list_items_delete.forEach(items=>{
    items.addEventListener("click",e=>{
        console.log(items)
        console.log(items.document.querySelector(".delete-now"))
    })
})