document.querySelectorAll(".delete-confirm").forEach((items,index)=>{
    let delete =false
    const  confirm=items.querySelector(".delete-now")
    const  btn=items.querySelector(".make-delete")
    btn.addEventListener("click",e=>{
        confirm("Bạn muốn xóa sản phẩm ?") && 
    })
})
