document.querySelectorAll(".delete-confirm").forEach((items,index)=>{
    const  confirm=items.querySelector(".delete-now")
    const  btn=items.querySelector(".make-delete")
    btn.addEventListener("click",e=>{
        confirm_remove()
    })
    function confirm_remove(btn){
        let text="Bạn muốn xóa sản phẩm ?"
        confirm(${text})
    }
})
