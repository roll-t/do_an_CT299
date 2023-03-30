
const content_address=document.querySelectorAll(".wrap-info-address")
content_address.length>0 &&
content_address.forEach((items,index) =>{
    const checkbox=items.querySelector(".select-info-address");
    checkbox.addEventListener("click",e=>{
        content_address.forEach((value,idx)=>{
            const check_items=value.querySelector(".select-info-address")
            value.classList.remove("active")
            if(check_items.checked==true && index!=idx){
                check_items.click()
            }
        })
        if(checkbox.checked==true){
            items.classList.add("active")
        }else{
            items.classList.remove("active")
        }
    })
    if(index ===content_address.length-1){
        checkbox.checked=true;
        items.classList.add("active")
    }
    
})

