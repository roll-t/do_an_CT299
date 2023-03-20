document.querySelectorAll(".delete-confirm").forEach((items,index)=>{
    items.document.querySelector(".make-delete").addEventListener("click",e=>{
        console.log(e,index);
    })
})
