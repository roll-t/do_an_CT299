document.querySelectorAll(".delete-confirm").forEach((items,index)=>{
    const  confirm_dl=items.querySelector(".delete-now")
    const  btn=items.querySelector(".make-delete")
    btn.addEventListener("click",e=>{
        confirm_remove()
    })
    function confirm_remove(){
    
    }
})
