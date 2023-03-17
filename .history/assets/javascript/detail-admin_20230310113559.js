
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

function preview(){
    const btn_preview=document.querySelector(".body-detail.body-detail-admin .preview")
    const img_1=document.querySelectorAll(".left-side-add .wrap-input.img input")[0]
    const img_2=document.querySelectorAll(".left-side-add .wrap-input.img input")[1]
    const img_3=document.querySelectorAll(".left-side-add .wrap-input.img input")[2]
    const img_4=document.querySelectorAll(".left-side-add .wrap-input.img input")[3]
    const img_5=document.querySelectorAll(".left-side-add .wrap-input.img input")[4]
    let link_1;
    let link_2;
    let link_3;
    let link_4;
    let link_5;

    function get_link(img){
        let link;
        img.addEventListener("change",e=>{
            const file=e.target.files[0];
            console.log(URL.createObjectURL(file))
             return URL.createObjectURL(file)
        })
        return link;
    }

    link_1=get_link(img_1)

    btn_preview.addEventListener("click",e=>{
        console.log(link_1)
    })
}
preview()