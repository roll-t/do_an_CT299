const list_input=document.querySelectorAll(".input-validate")
let validate={
    fill:true,
    address:true
}
function show_error(input,text){
    input.style.border="1px solid red";
    input.focus()
    alert(text);
}
function show_sucess(input){
    input.style.border="1px solid black"
}
function check_fill(input,text){
    input.value=="" && show_error(input,text) && (validate.fill=false);
}
const name_client=list_input[0].querySelector("input");

const phone_format=document.querySelector(".validate_phone span ")

function format_phone(input){
    const value=  input.innerHTML
    let arr_value=value.split("");
    let new_value=`*****${arr_value[arr_value.length-1]}${arr_value[arr_value.length-2]}${arr_value[arr_value.length-3]}`
    input.innerHTML=new_value;
}

phone_format && format_phone(phone_format)

function get_name(){
    let value=[];
    if(name_client.value.length>1 && name_client.value.length>3){
        value.push(name_client.value);
    }
    return value;
}


if(name_client){
    $(".btn_confirm_info").click(function(){
        this.href=`./profile/add-name.php?add_name=${get_name()}`
        let url=this.href
        $(".wrap_name").load(url)
        return false
    })
}

const tag_tinh=document.querySelector(".tinh")
const link_tinh=document.querySelector(".get_tinh")
const huyen=document.querySelector(".huyen")
tag_tinh.addEventListener("change",e=>{
    link_tinh.href=`./profile/address-client.php?id_tinh=${tag_tinh.value}`
    huyen.disabled=false;
    link_tinh.click();
})

$(".get_tinh").click(function(){
    let url=this.href;
    $(".huyen").load(url)
    return false;
})

const des_address=list_input[3].querySelector("textarea")
const input_huyen=list_input[2].querySelector("select")
const input_tinh=list_input[1].querySelector("select")
console.log(input_tinh)

    document.querySelector(".btn_confirm_info").addEventListener("click",e=>{
        let add_address=true;
        if(input_tinh.value!=""){
            if(input_huyen.value==""){
                add_address=false;
                show_error(input_huyen,"Không được bỏ trống huyện !")
            }
            if(des_address.value==""){
                add_address=false;
                show_error(des_address,"Không được bỏ trống mô tả !")
            }
            des_address.addEventListener("click",e=>{
                show_sucess(des_address)
            })
            input_huyen.addEventListener("click",e=>{
                show_sucess(input_huyen)
            })
        }
        if(add_address){
            let value_address=[input_tinh.value,input_huyen.value,des_address.value]
            const a=document.createElement("a")
            a.className="link_add_address"
            a.href=`./profile/address-client.php?add_address=${value_address}`;
            a.click()
        }
    })


