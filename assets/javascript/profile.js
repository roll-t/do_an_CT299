
const btn_show_items=document.querySelectorAll(".container-profile .left-profile .items-profile p")
const list_ul=document.querySelectorAll(".container-profile .left-profile .items-profile ul")
const items_right_profile=document.querySelectorAll(".container-profile .right-profile .items-right-profile")
btn_show_items.forEach((items,index)=>{
    items.addEventListener("click",e=>{
        list_ul.forEach((value,idx)=>{
            if(index!=idx){
                value.classList.remove("active")
            }
            if(index===idx && idx!=1){
                value.classList.toggle("active");
            }
        })
    })
})


btn_show_items.forEach((items,index)=>{
    items.addEventListener("click",e=>{
        items_right_profile.forEach((value,idx)=>{
            value.classList.remove("active")
            if(index===idx){
                value.classList.add("active")
            }
        })
    })
})






