
$(".padding .page-items").click(function(){
    let url=this.href;
    $(".body-detele-product .list-product-select").load(url);
    return false;
})


function paging(){
    const btn_next=document.querySelector(".padding .page-next")
    const btn_per=document.querySelector(".padding .page-per")
    const list_page=document.querySelectorAll(".padding .page-index")
    const quantity_page=document.querySelector(".quantity-page").value
    const count_page=Number(quantity_page);
    let curent_index=0;

    let count=2;

    btn_next && btn_next.addEventListener("click",e=>{
        if(curent_index==2){
            let index=count++;
            btn_per.classList.add("active");
            if(count==count_page-1){
                btn_next.classList.add("active")
            }
            btn_next.href=`./filter.php?page=${count+2}`;
            btn_per.href=`./filter.php?page=${count-2}`
            list_page.forEach((items)=>{
                items.innerHTML=index;
                items.href=`./filter.php?page=${index}`;
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
            btn_next.href=`./filter.php?page=${count+1}`;
            btn_per.href=`./filter.php?page=${count-3}`
            if(count==3){
                btn_per.classList.remove("active");
            }
            let index=count--;
            list_page.forEach(items=>{
                items.innerHTML=index-2;
                items.href=`./filter.php?page=${index-2}`
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