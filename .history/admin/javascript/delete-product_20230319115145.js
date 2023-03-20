document.querySelectorAll(".delete-confirm").forEach((items,index)=>{
    const  confirm_dl=items.querySelector(".delete-now")
    const  btn=items.querySelector(".make-delete")
    btn.addEventListener("click",e=>{
        confirm_remove(confirm_dl)
    })
    function confirm_remove(btn){
        let text ="Bạn muốn xóa sản phẩm ?"
        if(confirm()==true){
            btn.click()
        }else{
            return false;
        }
    }
})
