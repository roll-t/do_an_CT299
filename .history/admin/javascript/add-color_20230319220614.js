const btn_add=document.querySelector(".body-material .add-items")
console.log(btn_add)

function add_items(){
    const wrap=document.querySelector("li")
    wrap.className="color-items"
    const content =`
    <input class="input-material" placeholder="Nhap vao chat lieu"/>
    <div class="change-color"><ion-icon name="checkmark-outline"></ion-icon></div>`
    wrap.innerHTML=content
}

                