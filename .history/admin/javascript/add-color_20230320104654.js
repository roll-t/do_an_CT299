const btn_color=document.querySelector(".body-color .add-color")
const list_color_2=document.querySelector(".body-color .main-body .list-color")
btn_color.addEventListener("click",e=>{
    add_color();
    const input=document.querySelector(".input-color")
    const confirm_add=document.querySelector(".confirm-color")
    const btn_add=document.querySelector(".body-color .main-body .btn-add")
    btn_add.addEventListener("click",e=>{
        if(input.value.trim()!=""){
        confirm_add.href=`./add-color-material.php?add_color=${input.value}`;
        }
    })
    btn_color.style.display="none";
    input.addEventListener("keyup",e=>{
        if(e.key=="Enter" && input.value !=""){
            btn_add.click();
        }
    })
})

function add_color(){
    const wrap=document.querySelector("li")
    wrap.className="color-items"
    const content =`
    <input class="input-color" placeholder="Nhap vao chat lieu"/>
    <a href="#" class="confirm-color change-color"><button class="btn-add">Thêm</button></a>`
    wrap.innerHTML=content
    list_color_2.append(wrap)
}

const btn_delete_color=document.querySelectorAll(".body-color .list-color .delete-color .color")
const id_color=document.querySelectorAll(".id_color")
btn_delete_color.forEach((items,index)=>{
    items.style.zIndex="1000"
    items.addEventListener("click",e=>{
        const link=items.parentElement
        const text="Bạn muốn xóa màu này ?";
        if(confirm(text)){
            link.href=`./add-color-material.php?delete_color=${id_color[index].value}`;
        }
    })
})
               
const btn_change_color =document.querySelectorAll(".body-color .list-color .change-color ion-icon")
btn_change_color.forEach((items,index)=>{
    items.addEventListener("click",e=>{
      items.style.display="none"  
      const input=items.parentElement.parentElement.querySelector(".body-color .name-color")
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
            document.querySelector(".link_change-material").href=`./add-color-material.php?change_material=${value_change.value}&id_change=${id_color[index].value}`;
        }else{
            alert ("khong duoc bo trong")
          }
      })
      value_change.addEventListener("keyup",e=>{
        if(e.key=="Enter" && value_change.value !=""){
            document.querySelector(".link_change-material").click();
        }
      })
  })
})