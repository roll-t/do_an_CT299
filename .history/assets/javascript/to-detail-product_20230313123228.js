
const list_product=document.querySelectorAll(".list-product .product-items .top-product img:nth-child(1)")

list_product.forEach(items=>{
    console.log(items);
    items.addEventListener("click",e=>{
        console.log(e.target)
    })
})
