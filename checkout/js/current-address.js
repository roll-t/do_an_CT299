function address_checkout(){
    function get_address_select (){
        const select_items=document.querySelectorAll(".select-info-address")
        let id_value=0;
        let error=false;
        select_items.forEach((items,index)=>{
            if(items.checked==true && !error){
                id_value=index;
                error=true;
            }
        })
        if(!error){
            alert("Vui lòng chọn địa chỉ")
        }
        return error;
    }
        const btn_checkout=document.querySelector(".confirm_checkout")
        btn_checkout.addEventListener("click",e=>{
            !get_address_select() && e.preventDefault();
        })
}
address_checkout();