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
name_client.addEventListener("click",e=>{
    show_sucess(name_client)
})

const phone_format=document.querySelector(".validate_phone span ")

function format_phone(input){
    const value=  input.innerHTML
    let arr_value=value.split("");
    let new_value=`*****${arr_value[arr_value.length-1]}${arr_value[arr_value.length-2]}${arr_value[arr_value.length-3]}`
    input.innerHTML=new_value;
}
function get_link(link,target_link){
    const a=document.querySelector(link)
    a.addEventListener("click",e=>{
        a.href=target_link
        return false;
    })
}
phone_format && format_phone(phone_format)

const btn_save=document.querySelector(".btn_confirm_info")
btn_save.addEventListener("click",e=>{
    if(name_client.value.length>1 && name_client.value.length<3){
        show_error(name_client,"Tên phải có ít nhất 3 ký tự");
    }else if(name_client.value.length>=3){
        
    }
    e.preventDefault();
})  