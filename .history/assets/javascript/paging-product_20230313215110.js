function render_paging(){
    const list_paging=document.querySelectorAll(".body-2.body-2-product .padding .page-items")
    list_paging.forEach(items=>{
        console.log(items)
    })
}
$(".body-2.body-2-product .padding .page-items").click(function(){
    let url=this.href;
    $(".body-2.body-2-product .list-product.main-list-product").load(url);
    return false;
})

function next_paging(){
    const btn =document.querySelector(".body-2.body-2-product .padding .page-next")
    const list_page=document.querySelectorAll(".body-2.body-2-product .padding .page-items")
    const id_page=Number(list_page[2].innerHTML)+1;
    btn.addEventListener("click",e=>{
        btn.href=`./paging/paging-product.php?page_next=${id_page}`
    })
}
next_paging();