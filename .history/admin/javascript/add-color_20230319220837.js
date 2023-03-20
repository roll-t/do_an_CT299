const btn_add_items=document.querySelector(".body-material .add-items")
const list_color=document.querySelector(".body-material .main-body-item .list-color")

console.log(btn_add)

btn_add_items.addEventListener("click",e=>{
    add_items();
})

function add_items(){
    const wrap=document.querySelector("li")
    wrap.className="color-items"
    const content =`
    <input class="input-material" placeholder="Nhap vao chat lieu"/>
    <div class="change-color"><ion-icon name="checkmark-outline"></ion-icon></div>`
    wrap.innerHTML=content
    list_color.append(wrap)
}

                