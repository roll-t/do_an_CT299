
const show_body_cart=()=>{
const show_cart=document.querySelector(".headline .cart")
const body_cart=document.querySelector(".body-cart")
const close_cart=document.querySelector(".body-cart .space-left")
show_cart.addEventListener("click",e=>{
    body_cart.classList.toggle("active")
})
close_cart.addEventListener("click",e=>{
    body_cart.classList.remove("active");
})
}
show_body_cart();

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

$(".btn-add-cart").click(function(){
    let url=this.href
    $(".list-product-cart").load(url)
    return false;
})


$(".link_delete_product_cart").click(function(){
    let url=this.href;
    $(".list-product-cart").load(url)
    return false;
})

function show_checkout(){
        const btn_checkout=document.querySelector(".checkout")
        btn_checkout.classList.add("active")
        btn_checkout.addEventListener("click",e=>{
            const value_product=JSON.stringify(check_confirm())
            const a=document.createElement("a")
            a.href=`./checkout.php?value_product=${value_product}`;
            a.click()
        })
}

function hidden_checkout(){
    const btn_checkout=document.querySelector(".checkout")
    btn_checkout.classList.remove("active")
}

function checkout(){
    let count_check=0;
    const list_cart=document.querySelectorAll(".list-product-cart .product-cart-items");
    list_cart.forEach(items=>{
        const check=items.querySelector('.check-confirm')
        check.addEventListener("click",e=>{
            if(check.checked==true){
                count_check++;
                if(count_check>0){
                    show_checkout()
                }
            }else{
                count_check--;
                if(count_check==0){
                    hidden_checkout();
                }
            }
        })
    })
}

checkout();

function add_items_cart(){
    const list_add=document.querySelectorAll(".list-product .product-items .btn-add-cart")
    list_add.forEach(items=>{
        items.addEventListener("click",e=>{
            checkout();
        })
    })
}
add_items_cart()

function check_confirm(){
    let arr_checkout=[];
    const list_cart=document.querySelectorAll(".list-product-cart .product-cart-items .check-confirm")
    list_cart.forEach(items=>{
        if(items.checked==true){
            let quantity=items.parentElement.querySelector(".quantity input").value
            let items_checkout=[items.value,quantity]
            arr_checkout.push(items_checkout);
        }
    })
    return arr_checkout;
}
check_confirm()


function total_price(){
    const sum_price=document.querySelector(".main-cart .total-price span")
    let total=0;
    const list_cart=document.querySelectorAll(".list-product-cart .product-cart-items");
    list_cart.forEach(items=>{
        const check=items.querySelector(".check-confirm")
        let price=items.querySelector(".product-price span:nth-child(1)").innerHTML
        let quantity=1;
        let input_quantity=items.querySelector(".quantity input")
        input_quantity.addEventListener("change",e=>{
            quantity=input_quantity.value;  
        })
        price=price.split(",");
        let new_price=price.join("");
        let plus=false;
        check.addEventListener("click",e=>{
            if(check.checked==true){
                input_quantity.disabled=true;
                plus=true;
                total+=(Number(new_price) * Number(quantity));   
            }else if(check.checked==false && plus){
                total-=(Number(new_price) * Number(quantity));
                input_quantity.disabled=false;
            }
            var resutl_total=(total).toLocaleString('zh-CN');
            sum_price.innerHTML=resutl_total;
        })
    })
    list_cart
}
total_price()