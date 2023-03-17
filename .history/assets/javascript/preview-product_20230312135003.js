function preview(){
    const btn=document.querySelector(".info-product-add .right-side-add .preview");
    const wrap_li=document.querySelector(".info-product-add .right-side-add .product-items")
    const img_1_pd=document.querySelectorAll(".left-side-add .wrap-input input")[2]
    const img_2_pd=document.querySelectorAll(".left-side-add .wrap-input input")[3]

    var link_img_1

    img_1_pd.addEventListener("change",e=>{
        const file=e.target.files[0];
         link_img_1= URL.createObjectURL(file)
    })
    
    var link_img_2

    img_2_pd.addEventListener("change",e=>{
        const file=e.target.files[0];
         link_img_2= URL.createObjectURL(file)
    })

    btn.addEventListener("click",e=>{
        const name_pd=document.querySelectorAll(".left-side-add .wrap-input input")[0].value
        const price_pd=document.querySelectorAll(".left-side-add .wrap-input input")[1].value
        const content=`
        <div class="top-product">
        <img src="${link_img_1}" alt="">
        <img src="${link_img_2}" alt="" class="img-zoom">
        <div class="add-cart">
            <div class="left-add">
                <ion-icon name="cart-outline"></ion-icon>
                <p>Add to cart</p>
            </div>
            <div class="right-add">
                <ion-icon name="heart-outline"></ion-icon>
                <ion-icon name="expand-outline"></ion-icon>
            </div>
        </div>
        <div class="texture"></div>
        <div class="sale-ticker">
            Sale
        </div>
    </div>

    <div class="product-content">
        <h3 class="name-product">${name_pd}</h3>
        <div class="product-price"><span>$</span><p>${price_pd}</p></div>
    </div>
        `
        wrap_li.innerHTML=content;   
    })
}
preview()

const btn_get_id=document.querySelector(".btn-confirm");
const cate_id_hidden=document.querySelector(".cate-id-hidden")
const rooms_id_hidden=document.querySelector(".rooms-id-hidden")
const get_cate_id=document.querySelectorAll(".body-detele-product .address-save .wrap-input select")[1]
const get_rooms_id=document.querySelectorAll(".body-detele-product .address-save .wrap-input select")[2]
let id=[0,0];

get_cate_id.addEventListener("change",e=>{
    cate_id=get_cate_id.value
    id[0]=cate_id;
    is_change=true;
})

get_rooms_id.addEventListener("change",e=>{
    rooms_id=get_rooms_id.value
    id[1]=rooms_id;
    is_change=true;
})
btn_get_id.addEventListener("click",e=>{
    cate_id_hidden.value=id[0];
    rooms_id_hidden.value=id[1];
    console.log(cate_id_hidden.value,rooms_id_hidden.value)
})