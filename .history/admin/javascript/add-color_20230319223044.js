const btn_add_color=document.querySelector(".body-material .add-color")
const list_color=document.querySelector(".body-material .main-body .list-color")

btn_add_color.addEventListener("click",e=>{
    add_color();
    const input=document.querySelector(".input-material")
    const confirm_add=document.querySelector(".confirm-add-color")
    const btn_add=document.querySelector(".body-material .main-body .btn-add")
    btn_add.addEventListener("click",e=>{
        if(input.value.trim()!=""){
        confirm_add.href="./add-color-material.php";
        }
    })
    btn_add_color.style.display="none";
})

function add_color(){
    const wrap=document.querySelector("li")
    wrap.className="color-items"
    const content =`
    <input class="input-material" placeholder="Nhap vao chat lieu"/>
    <a href="#" class="confirm-add-color change-color"><button class="btn-add">Thêm</button></a>`
    wrap.innerHTML=content
    list_color.append(wrap)
}

                