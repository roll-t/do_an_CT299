
$(".padding .page-items").click(function(){
    let url=this.href;
    $(".body-detele-product .list-product-select").load(url);
    return false;
})
function paging(){
    const get_cate_id=document.querySelectorAll(".body-detele-product .address-save .wrap-input select")[1]
    const get_rooms_id=document.querySelectorAll(".body-detele-product .address-save .wrap-input select")[2]
    const link=document.querySelector(".body-detele-product .sort_product_detail .btn-confirm");
    const btn_next=document.querySelector(".padding .page-next")
    const btn_per=document.querySelector(".padding .page-per")
    const list_page=document.querySelectorAll(".padding .page-index")
    const quantity_page=document.querySelector(".quantity-page").value
    const count_page=Number(quantity_page);
    let curent_index=0;
    let link_target=`./paging-admin.php?all_id&page=`
    let id=[];

    get_cate_id.addEventListener("change",e=>{
        id[0]=get_cate_id.value
    })
    get_rooms_id.addEventListener("change",e=>{
        id[1]=get_rooms_id.value
    })

    
    link.addEventListener("click",e=>{
        link_target=`./paging-admin.php?page-cate=${id.join(" ")}`
        list_page.forEach((items)=>{
            items.href=`${link_target}`
        })
    })
 
    let count=2;
    console.log(count_page)
    btn_next && btn_next.addEventListener("click",e=>{
        if(curent_index==2){
            let index=count++;
            btn_per.classList.add("active");
            if(count==count_page-1){
                btn_next.classList.add("active")
            }
            btn_next.href=`${link_target}${count+2}`;
            btn_per.href=`${link_target}${count-2}`
            list_page.forEach((items)=>{
                items.innerHTML=index;
                items.href=`${link_target}${index}`;
                index++;
            })
        }else{
            curent_index++;
            list_page.forEach((value,idx)=>{
                idx===curent_index && value.click();


            })
        }
    })

    btn_per && btn_per.addEventListener("click",e=>{
        if(curent_index===0){           
            btn_next.classList.remove("active");
            btn_next.href=`${link_target}${count+1}`;
            btn_per.href=`${link_target}${count-3}`
            if(count==3){
                btn_per.classList.remove("active");
            }
            let index=count--;
            list_page.forEach(items=>{
                items.innerHTML=index-2;
                items.href=`${link_target}${index-2}`
                index++;
            })
        }else{
            curent_index--;
            list_page.forEach((value,idx)=>{
                idx===curent_index && value.click();


            })
        }
    })


    list_page.forEach((items,idx)=>{
        items.addEventListener("click",e=>{
            curent_index=idx;
        })
    })

}
paging()

function active(){
    const list_page=document.querySelectorAll(".padding .page-index")
    list_page.forEach((items,index)=>{
        index===0 && items.classList.add("active-index")
        items.addEventListener("click",e=>{
            list_page.forEach(value=>{
                value.classList.remove("active-index");
            })
            items.classList.add("active-index");
           
        })
    })
}
active()