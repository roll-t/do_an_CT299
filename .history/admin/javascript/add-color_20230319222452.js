const btn_add_color=document.querySelector(".body-material .add-color")
const list_color=document.querySelector(".body-material .main-body .list-color")

btn_add_color.addEventListener("click",e=>{
    add_color();
    const input=document.querySelector(".input-material")
    const confirm_add=document.querySelector(".confirm-add-color")
    console.log(input)
    if(input.value.trim()!=""){
    confirm_add.href="";
    }
    btn_add_color.style.display="none";
})

function add_color(){
    const wrap=document.querySelector("li")
    wrap.className="color-items"
    const content =`
    <input class="input-material" placeholder="Nhap vao chat lieu"/>
    <a href="#" class="confirm-add-color change-color"><ion-icon name="checkmark-outline"></ion-icon></a>`
    wrap.innerHTML=content
    list_color.append(wrap)
}

                