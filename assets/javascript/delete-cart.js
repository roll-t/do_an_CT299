
$(".link_delete_product_cart").click(function(){
    let url=this.href;
    $(".list-product-cart").load(url)
    return false;
})
