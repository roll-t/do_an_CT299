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
const btn_show_thongke=document.querySelectorAll(".menu-thongke .category-items")
const btn_show_order=document.querySelectorAll(".menu-order .category-items")


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
                let btn_filter=document.querySelectorAll(".btn-filter")[0]
                let btn_filter_2=document.querySelectorAll(".btn-filter")[1]
                btn_filter.style.opacity="0"
                btn_filter_2.style.opacity="0"
                detele.disabled=true;

                select.addEventListener("change",e=>{
                    const value_items=()=>(select.value)
                    console.log (value_items())
                    btn_filter.href=`filter.php?id_menu=${value_items()}`
                    btn_filter_2.href=`filter.php?id_menu=${value_items()}`
                    detele.disabled=false; 
                    get_caterogy()
                    
                })

                function get_caterogy(){
                    $(".btn-filter").click(function(){
                        let url=this.href;
                        $(".select-none-chilrent").load(url)
                        return false;
                    })
                    $(".btn-filter").click()
                }

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
                btn_filter.style.opacity="0";
                select.addEventListener("change",e=>{
                    const value_items=()=>(select.value)
                    btn_filter.href=`filter.php?id_room=${value_items()}`
                    get_room();
                })

                function get_room(){
                    $(".btn-change-room").click(function(){
                            let url=this.href;
                            $(".body-change-room").load(url)
                            return false;
                    })
                    $(".btn-change-room").click()
                }
            }
        })
    })
})


const body_add_product=document.querySelectorAll(".body-add-product")

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


const body_thongke=document.querySelectorAll(".body-thongke")

btn_show_thongke.forEach((items,index )=>{
    items.addEventListener("click",e=>{
        list_category.forEach(value=>{
            value.classList.remove("active");
        })
        body_thongke.forEach((show,idx)=>{
            if(index===idx){
                show.classList.add("active")
            }
        })
    })
})


const body_order=document.querySelectorAll(".body-order")

btn_show_order.forEach((items,index )=>{
    items.addEventListener("click",e=>{
        list_category.forEach(value=>{
            value.classList.remove("active");
        })
        body_order.forEach((show,idx)=>{
            if(index===idx){
                show.classList.add("active")
                const list_body_table=document.querySelectorAll(".body-see-order")
                const show_table=document.querySelectorAll(".menu .items")
                show_table.forEach((items,i_1)=>{
                    items.addEventListener("click",e=>{
                            list_body_table.forEach(row=>{
                                row.classList.remove("active")
                            })
                        list_body_table.forEach((value,i_2)=>{
                            if(i_1===i_2){
                                value.classList.add("active")
                            }
                        })
                    })
                })

            }
        })
    })
})

const btn_show_kho=document.querySelectorAll(".menu-kho .category-items")

const body_kho=document.querySelectorAll(".body-kho")

btn_show_kho.forEach((items,index)=>{
    items.addEventListener("click",e=>{
        list_category.forEach(item=>{
            item.classList.remove("active")
        })
        body_kho.forEach((value,idx)=>{
            if(index===idx){
                value.classList.add("active");
            }
        })
    })
})


function select_address(index){
    const body_product=document.querySelectorAll(".body-add-product")[index]
    const catalog_list=body_product.querySelectorAll(".address-save .wrap-input select")[0]
    const address_1=document.querySelectorAll(".address_1")[0]
        catalog_list.addEventListener("change",e=>{
            const get_value=()=>(catalog_list.value);
            address_1.href=`filter.php?id_product_add=${get_value()}`
            get_cate()
        })

        function get_cate(){
            $(".address_1").click(function(){
                    let url=this.href;
                    $(".address-save .wrap-input:nth-child(2) select").load(url)
                    return false;
            })
            $(".address_1").click()
        }
}
select_address(0);
select_address(1);


function preview(){
    const btn=document.querySelector(".info-product-add .right-side-add .preview");
    const wrap_li=document.querySelector(".info-product-add .right-side-add .product-items")
    const img_1_pd=document.querySelectorAll(".left-side-add .wrap-input input")[2]
    const img_2_pd=document.querySelectorAll(".left-side-add .wrap-input input")[3]
    var link_img_1;

    img_1_pd.addEventListener("change",e=>{
        const file=e.target.files[0];
        link_img_1=URL.createObjectURL(file)
    })
    btn.addEventListener("click",e=>{
        const name_pd=document.querySelectorAll(".left-side-add .wrap-input input")[0].value
        const price_pd=document.querySelectorAll(".left-side-add .wrap-input input")[1].value
        const content=`
        <div class="top-product">
        <img src="${link_img_1}" alt="">
        <img src="${}" alt="" class="img-zoom">
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




