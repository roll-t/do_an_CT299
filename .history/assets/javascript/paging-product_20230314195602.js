
$(".body-2.body-2-product .padding .page-items").click(function(){
    let url=this.href;
    $(".body-2.body-2-product .list-product.main-list-product").load(url);
    return false;
})

function paging(){
    const btn_next=document.querySelector(".body-2.body-2-product .padding .page-next")
    const btn_per=document.querySelector(".body-2.body-2-product .padding .page-per")
    const list_page=document.querySelectorAll(".body-2.body-2-product .padding .page-index")
    const quantity_page=document.querySelector(".quantity-page").value
    const count_page=Number(quantity_page);
    
    let count=2;

    btn_next && btn_next.addEventListener("click",e=>{
        let index=count++;
        btn_per.classList.add("active");
        if(count==count_page-1){
            btn_next.classList.add("active")
        }
        btn_next.href=`./paging/paging-product.php?page=${count+2}`;
        btn_per.href=`./paging/paging-product.php?page=${count-2}`
        list_page.forEach((items)=>{
            items.innerHTML=index;
            items.href=`./paging/paging-product.php?page=${index}`;
            index++;
        })
    })

    btn_per && btn_per.addEventListener("click",e=>{
        btn_next.classList.remove("active");
        btn_next.href=`./paging/paging-product.php?page=${count+1}`;
        btn_per.href=`./paging/paging-product.php?page=${count-3}`
        if(count==3){
            btn_per.classList.remove("active");
        }
        let index=count--;
        console.log(count)
        list_page.forEach(items=>{
            items.innerHTML=index-2;
            items.href=`./paging/paging-product.php?page=${index-2}`
            index++;
        })
    })
}

paging()



function active(){
    const list_page=document.querySelectorAll(".body-2.body-2-product .padding .page-index")
    list_page.forEach(items=>{
        items.addEventListener("click",e=>{
            list_page.forEach(value=>{
                value.classList.remove("active-index");
            })
            items.classList.add("active-index");
        })
    })
}
active()