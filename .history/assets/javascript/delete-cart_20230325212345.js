
$(".link_delete_product_cart").click(function(){
    let url=this.href;
    console.log(url)
    $(".list-product-cart").load(url)
    return false;
})
