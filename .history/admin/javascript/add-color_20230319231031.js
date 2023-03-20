const btn_add_color=document.querySelector(".body-material .add-color")
const list_color=document.querySelector(".body-material .main-body .list-color")
btn_add_color.addEventListener("click",e=>{
    add_color();
    const input=document.querySelector(".input-material")
    const confirm_add=document.querySelector(".confirm-add-color")
    const btn_add=document.querySelector(".body-material .main-body .btn-add")
    btn_add.addEventListener("click",e=>{
        if(input.value.trim()!=""){
        confirm_add.href=`./add-color-material.php?add_material=${input.value}`;
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

const btn_delete_material=document.querySelectorAll(".body-material .list-color .delete-color ion-icon")
const id_material=document.querySelectorAll(".id_material")

btn_delete_material.forEach((items,index)=>{
    items.addEventListener("click",e=>{
        const link=items.parentElement
        const text="Bạn muốn xóa chất liệu này ?";
        if(confirm(text)){
            link.href=`./add-color-material.php?delete_material=${id_material[index].value}`;
        }
    })
})
               
const btn_change_material =document.querySelectorAll(".body-material .list-color .change-color ion-icon")
btn_change_material.forEach(items=>{
    items.addEventListener("click",e=>{
      const input=items.parentElement.parentElement.querySelector(".name-color")
      value_input=input.innerHTML;
      const tag=document.createElement("input")
      tag.value=value_input;
      input.append=tag;
  })
})