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
const btn_show_product=document.querySelectorAll(".menu-product .category-items")



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
                let btn_filter=document.querySelector(".btn-filter")
                let btn_filter_2=document.querySelectorAll(".btn-filter")[1]
                detele.disabled=true;
                select.addEventListener("change",e=>{
                    const value_items=()=>(select.value)
                    btn_filter.href=`filter.php?id_menu=${value_items()}`
                    btn_filter_2.href=`filter.php?id_menu=${value_items()}`
                    detele.disabled=false; 
                })

                $(".btn-filter").click(function(){
                    let url=this.href;
                    $(".select-none-chilrent").load(url)
                    return false;
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
                const select=show.querySelector(".select-none-parent")
                let btn_filter=document.querySelector(".btn-change-room")
                select.addEventListener("change",e=>{
                    const value_items=()=>(select.value)
                    btn_filter.href=`filter.php?id_room=${value_items()}`
                })
                $(".btn-change-room").click(function(){
                    let url=this.href;
                    $(".body-change-room").load(url)
                    return false;
                })

            }
        })
    })
})

const body_add_product=document.querySelectorAll(".body-add-product")
let slide=false;
console.log(body_add_product)
console.log(btn_show_product)
btn_show_product.forEach((items,index)=>{
    items.addEventListener("click",e=>{
        list_category.forEach(value=>{
            value.classList.remove("active");
        })
        body_add_product.forEach((show,idx)=>{
            if(index===idx){
                show.classList.add("active")
                $(".change").click(function(){
                    let url=this.href;
                    $(".product-detele").load(url)
                    return false;
                })
                $(".update_detail").click(function(){
                    slide=true;
                    let url=this.href;
                    $(".product-detele").load(url)
                    return false;
                })
            }
        })
    })
})



function change_img(){
    const btn_next=document.querySelector(".left-detail .control ion-icon:nth-child(1)")
    const btn_prve=document.querySelector(".left-detail .control ion-icon:nth-child(2)")
    const lists=document.querySelectorAll(".left-detail .list-img .img-items img")

    lists.forEach(items=>{
        items.addEventListener("click",e=>{
            const body_img =document.querySelector(".center-detail .main-img-detail img")
            body_img.src=items.src
        })
    })
    btn_next.addEventListener("click",e=>{
        const list_img=document.querySelectorAll(".left-detail .list-img .img-items")
        document.querySelector(".left-detail .list-img ").appendChild(list_img[0]);

        const body_img =document.querySelector(".center-detail .main-img-detail img")
        const show_product_img=document.querySelectorAll(".left-detail .list-img .img-items img")[0]
        body_img.src=show_product_img.src
    })
    btn_prve.addEventListener("click",e=>{
        const list_img=document.querySelectorAll(".left-detail .list-img .img-items")
        document.querySelector(".left-detail .list-img ").prepend(list_img[list_img.length-1]);
        
        const body_img =document.querySelector(".center-detail .main-img-detail img")
        const show_product_img=document.querySelectorAll(".left-detail .list-img .img-items img")[0]
        body_img.src=show_product_img.src
    })
}

change_img()
