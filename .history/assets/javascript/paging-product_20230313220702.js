
$(".body-2.body-2-product .padding .page-items").click(function(){
    let url=this.href;
    $(".body-2.body-2-product .list-product.main-list-product").load(url);
    return false;
})

function next_paging(){
    const btn =document.querySelector(".body-2.body-2-product .padding .page-next")
    const list_page=document.querySelectorAll(".body-2.body-2-product .padding .page-index")
    const id_page=Number(list_page[2].innerHTML)+1;
    let idx=1;
    let btn_per=false;
    btn.addEventListener("click",e=>{
        btn.href=`./paging/paging-product.php?page_next=${id_page}`
        idx+=1;
        let count=idx;
        list_page.forEach(items=>{
            items.innerHTML=count++;
            items.href=`./paging/paging-product.php?page=${count}`
        })

    })
}
next_paging();