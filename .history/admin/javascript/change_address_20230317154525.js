
function sort_detali_product(){
    const get_cate_id=document.querySelectorAll(".body-detele-product .address-save .wrap-input select")[1]
    const get_rooms_id=document.querySelectorAll(".body-detele-product .address-save .wrap-input select")[2]
    const link=document.querySelector(".body-detele-product .sort_product_detail .btn-confirm");
    const rooms_hidden=document.querySelector(".rooms-id-hidden")
    const cate_hidden=document.querySelector(".cate-id-hidden")


    const id=[0,0];

    id[0]=get_cate_id.value

    id[1]=get_rooms_id.value
    var cate_id;
    var rooms_id;
    var is_change=false;

    get_cate_id.addEventListener("change",e=>{
        cate_id=get_cate_id.value
        id[0]=cate_id;
        link.href=`filter.php?sort_product_detail=${id.join(" ")}`;
        is_change=true;
    })

    get_rooms_id.addEventListener("change",e=>{
        rooms_id=get_rooms_id.value
        id[1]=rooms_id;
        link.href=`filter.php?sort_product_detail=${id.join(" ")}`;
        is_change=true;
    })

    $(".body-detele-product .sort_product_detail .btn-confirm").click(function(){
            let url;
            if(is_change){
                url=this.href
            }else{
                this.href=`filter.php?sort_product_detail=${id.join(" ")}`;
                url=this.href
            }
            $(".body-detele-product .list-product-select").load(url)
            return false;
    })
}

sort_detali_product()




