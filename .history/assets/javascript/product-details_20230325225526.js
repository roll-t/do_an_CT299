function comment_details_product(){
    const show_danhgia=document.querySelector(".right-detail .headline-status .healine-items:nth-child(1)")
const show_baohanh=document.querySelector(".right-detail .headline-status .healine-items:nth-child(2)")
const show_vanchuyen=document.querySelector(".right-detail .headline-status .healine-items:nth-child(3)")
const content_danhgia=document.querySelector(".right-detail .danhgia")
const content_baohanh=document.querySelector(".right-detail .baohanh")
const content_vanchuyen=document.querySelector(".right-detail .vanchuyen")

const list_items=document.querySelectorAll(".right-detail .headline-status .healine-items")
list_items.forEach(items=>{
    items.addEventListener("click",e=>{
        list_items.forEach(value=>{
            value.classList.remove("active")
        })
        items.classList.add("active")
    })
})

show_danhgia.addEventListener("click",e=>{
    content_danhgia.style.display="block"
    content_baohanh.style.display="none"
    content_vanchuyen.style.display="none"
})
show_baohanh.addEventListener("click",e=>{
    content_baohanh.style.display="block"
    content_danhgia.style.display="none"
    content_vanchuyen.style.display="none"
})
show_vanchuyen.addEventListener("click",e=>{
    content_vanchuyen.style.display="block"
    content_danhgia.style.display="none"
    content_baohanh.style.display="none"
})
}
comment_details_product()

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
