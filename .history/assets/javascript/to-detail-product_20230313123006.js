
const list_product=document.querySelectorAll(".list-product .product-items")

list_product.forEach(items=>{
    const img=items.querySelector(".top-product img:nth-child(1)")

    img.addEventListener("click",e=>{
        const a=document.createElement("a")
        a.href="./product-details.html"
        a.click();
    })
})

console.log(list_product)