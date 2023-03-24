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
btn_change_material.forEach((items,index)=>{
    items.addEventListener("click",e=>{
      items.style.display="none"  
      const input=items.parentElement.parentElement.querySelector(".name-color")
      value_input=input.innerHTML;
      const content=`
      <input class="value_change" placeholder="Nhap ten chat lieu" value="${value_input}"/>
      <a class="link_change-material" href="#">Thay đổi</a>`;
      const tag=document.createElement("div")
      tag.innerHTML=content;
      input.innerHTML=""
      input.append(tag);
      const value_change=document.querySelector(".value_change")
      document.querySelector(".link_change-material").addEventListener("click",e=>{
          if(value_change.value!=""){
            document.querySelector(".link_change-material").href=`./add-color-material.php?change_material=${value_change.value}&id_change=${id_material[index].value}`;
          }
      })
  })
})