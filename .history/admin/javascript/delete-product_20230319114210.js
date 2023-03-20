document.querySelectorAll(".delete-confirm").forEach((items,index)=>{
    let text="Bạn muốn xóa sản phẩm ?"
    const  confirm=items.querySelector(".delete-now")
    const  btn=items.querySelector(".make-delete")
    btn.addEventListener("click",e=>{
      if(confirm(text))
      
    })
})
