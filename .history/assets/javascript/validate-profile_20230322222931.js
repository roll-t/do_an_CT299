const list_input=document.querySelectorAll(".input-validate")
console.log(list_input)
function show_error(input,text){
    input.style.border="1px solid red";
    input.focus()
    alert(text);
}
function show_sucess(input){
    input.style.border="1px solid black"
}
function check_fill(input,text){
    input.value=="" && show_error(input,text);
}
const name_client=list_input[0].querySelector("input");
name_client.addEventListener("click",e=>{
    show_sucess(name_client)
})
const phone_format=document.querySelector(".validate_phone span ")

function format_phone(input){
    const value=  input.innerHTML
    let arr_value=value.split("");
    console.log(arr_value)
    let new_value=`*****${arr_value[arr_value.length-1]}${arr_value[arr_value.length-2]}${arr_value[arr_value.length-3]}`
    input.innerHTML=new_value;
}
phone_format && format_phone(phone_format)

function check_address(input){
    console.log(input.querySelector("select").value)
}


check_address(list_input[2])
const btn_save=document.querySelector(".btn_confirm_info")
btn_save.addEventListener("click",e=>{
    check_fill(name_client,"Không được bỏ trống Tên");
    e.preventDefault();
})  