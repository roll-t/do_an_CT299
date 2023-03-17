
function sort_detali_product_2(){
    const get_cate_id=document.querySelectorAll(".body-detele-product .address-save .wrap-input select")[1]
    const get_rooms_id=document.querySelectorAll(".body-detele-product .address-save .wrap-input select")[2]
    const link=document.querySelector(".body-detele-product .sort_product_detail .btn-confirm");
    const rooms_hidden=document.querySelector(".rooms-id-hidden")
    const cate_hidden=document.querySelector(".cate-id-hidden")

    get_cate_id.addEventListener("change",e=>{
        cate_hidden.value=get_cate_id.value;
    })

    get_rooms_id.addEventListener("change",e=>{
        rooms_hidden.value=get_rooms_id.value;
    })
    
}

sort_detali_product_2()




