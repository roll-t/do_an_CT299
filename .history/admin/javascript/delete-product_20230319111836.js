const list_items_delete=document.querySelectorAll(".delete-confirm .delete-now");
list_items_delete.forEach(items=>{
    items.addEventListener("click",e=>{
        console.log(items)
        console.log(items.document.querySelector("a"))
    })
})