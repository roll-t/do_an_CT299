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
const gender =list_input[1]
function get_gender(){
    let value=[];
    if()
}
if(name_client){
    $(".btn_confirm_info").click(function(){
        this.href=`./profile/add-name-gender.php?add_name=${get_name()}`
        let url=this.href
        $(".wrap_name").load(url)
        return false
    })
}
if(){

}