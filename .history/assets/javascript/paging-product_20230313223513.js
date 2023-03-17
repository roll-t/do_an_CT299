
$(".body-2.body-2-product .padding .page-items").click(function(){
    let url=this.href;
    $(".body-2.body-2-product .list-product.main-list-product").load(url);
    return false;
})

function next_paging(){
    const btn =document.querySelector(".body-2.body-2-product .padding .page-next")
    const list_page=document.querySelectorAll(".body-2.body-2-product .padding .page-index")
    const id_page=Number(list_page[2].innerHTML)+1;
    const quantity_page=document.querySelector(".quantity-page").value
    let idx=1;
    let btn_per=false;
    let index_end=0;

        btn.addEventListener("click",e=>{
            if(Number(quantity_page)+1>index_end){
                btn.href=`./paging/paging-product.php?page_next=${id_page}`
                idx+=1;
                let count=idx;
                list_page.forEach(items=>{
                    items.href=`./paging/paging-product.php?page=${count}`;
                    items.innerHTML=count++;
                    index_end=count;
                })
            }
    
        })
}
next_paging();