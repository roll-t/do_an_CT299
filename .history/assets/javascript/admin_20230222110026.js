
const show_items=document.querySelectorAll(".menu-items p")

show_items.forEach(items=>{
    items.addEventListener("click",e=>{
        items.parentElement.querySelector(".category").classList.toggle("active")
    })
})

const list_category=document.querySelectorAll(".body-add-category")
const list_room=document.querySelectorAll(".body-add-room")
const btn_show_category=document.querySelectorAll(".menu-category .category-items")
const btn_show_room=document.querySelectorAll(".menu-room .category-items")
const btn_filter=document.querySelectorAll("btn-filter")
console.log(btn_filter)
btn_show_category.forEach((items,index)=>{
    items.addEventListener("click",e=>{
        list_category.forEach(value=>{
            value.classList.remove("active");
        })
        list_category.forEach((show,idx)=>{
            if(index===idx){
                show.classList.add("active")
                const select=show.querySelector(".select-none-parent")
                const detele=show.querySelector(".select-none-chilrent")
                detele.disabled=true;
                select.addEventListener("change",e=>{
                    const value_items=()=>(select.value)
                    btn_filter.href=`"#?id=${value_items()}`
                    detele.disabled=false;
                })
            }
        })
    })
})


btn_show_room.forEach((items,index)=>{
    items.addEventListener("click",e=>{
        list_category.forEach(value=>{
            value.classList.remove("active");
        })
        list_room.forEach((show,idx)=>{
            if(index===idx){
                show.classList.add("active")
            }
        })
    })
})


