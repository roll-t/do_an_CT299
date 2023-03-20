document.querySelectorAll(".delete-confirm").forEach((items,index)=>{
    const  confirm=items.querySelector(".delete-now")
    const  btn=items.querySelector(".make-delete")
    btn.addEventListener("click",e=>{
        let text="Bạn muốn xóa sản phẩm ?"
      if(confirm(text)==true){
        btn.click()
      }
    })
})
