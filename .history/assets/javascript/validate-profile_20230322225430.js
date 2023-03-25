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

phone_format && format_phone(phone_format)

function check_address(input,text){
    const select=input.querySelector("select")
    select.value=="" && show_error(select,text) && (validate.address=true)
}
for(var i=2;i<=3;i++){
    let value=list_input[i].querySelector("select")
    value.addEventListener("click",e=>{
        show_sucess(value);
    })

}

const des_address=list_input[4].querySelector("textarea")

const btn_save=document.querySelector(".btn_confirm_info")
btn_save.addEventListener("click",e=>{
    check_fill(name_client,"Không được bỏ trống Tên")
    validate.fill==true ? check_fill(des_address,"Hông được để trống mô tả") :false
    check_address(list_input[2],"không được bỏ trống Tỉnh")
    e.preventDefault();
})  