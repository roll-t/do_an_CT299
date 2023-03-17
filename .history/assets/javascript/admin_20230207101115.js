
const btn_show_categoey=document.querySelector(".top ion-icon")
const menu=document.querySelector(".menu")
const add_category=document.querySelector("input.menu-items")
const input_hidden=document.querySelector(".confirm-input")

btn_show_categoey.addEventListener("click",e=>{
    menu.classList.toggle("active")
})

add_category.addEventListener("focus",e=>{
    add_category.type="text"
    add_category.value=""
    add_category.placeholder="Nhâp vào tên danh mục"
    input_hidden.type="submit"
})

input_hidden.addEventListener("click",e=>{
    const li=document.createElement("li")
    li.className="menu-items";
    li.innerHTML=add_category.value.trim();
    
    menu.append(li)

    add_category.type="submit"
    add_category.value="Thêm danh mục"
    input_hidden.type="hidden"

})
add_category.addEventListener("focusout",e=>{
    if(add_category.value.trim()==""){
        add_category.type="submit"
        add_category.value="Thêm danh mục"
        input_hidden.type="hidden"
    }
})
