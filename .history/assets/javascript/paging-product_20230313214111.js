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
    console.log(btn)
}
next_paging();