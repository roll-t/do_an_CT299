function render_paging(){
    const list_paging=document.querySelectorAll(".body-2.body-2-product .padding .page-items")
    list_paging.forEach(items=>{
        console.log(items)
    })
}
$(".body-2.body-2-product .padding .page-items").click(function(){
    let url=this.href;
    render_paging();
    $(".body-2.body-2-product .list-product.main-list-product").load(url);
    return false;
})

function next_paging(){
    const btn =document.querySelector(".body-2.body-2-product .padding .page-next")
    const list_page=document.querySelectorAll(".body-2.body-2-product .padding .page-items")
    const id_page=list_page[2].innerHTML;
    console.log(id_page)
}
next_paging();