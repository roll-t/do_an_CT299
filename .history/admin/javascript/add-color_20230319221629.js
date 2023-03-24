const btn_add_color=document.querySelector(".body-material .add-color")
const list_color=document.querySelector(".body-material .main-body .list-color")

let stop_now=0;
if(stop_now<1){
    btn_add_color.addEventListener("click",e=>{
        add_color();
        stop_now++;
    })
}

function add_color(){
    const wrap=document.querySelector("li")
    wrap.className="color-items"
    const content =`
    <input class="input-material" placeholder="Nhap vao chat lieu"/>
    <div class="change-color"><ion-icon name="checkmark-outline"></ion-icon></div>`
    wrap.innerHTML=content
    list_color.append(wrap)
}

                