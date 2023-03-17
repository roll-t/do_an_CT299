
const list_product=document.querySelectorAll(".list-product .product-items ")

list_product.forEach(items=>{
    items.addEventListener("click",e=>{
        console.log(e.target)
    })
})
