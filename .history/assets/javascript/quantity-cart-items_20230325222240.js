function show_quatity_cart(){
    const quantity_cart=document.querySelector(".cart .quantity-items-cart")
    const list_cart=document.querySelectorAll(".list-product-cart .product-cart-items")
    console.log(list_cart)
    quantity_cart.innerHTML=list_cart.length;
    if(list_cart.length>0){
        quantity_cart.style.transform="scale(1)"
    }else {
        quantity_cart.style.transform="scale(0)"
    }
}
show_quatity_cart()