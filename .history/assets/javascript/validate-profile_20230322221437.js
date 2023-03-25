const list_input=document.querySelectorAll(".input-validate")
console.log(list_input)
function show_error(input,text){
    input.style.border="1px solid red";
    alert(text);
}
function show_sucess(input){
    input.style.border="1px solid blck"
}
function check_fill(input,text){
    input.value=="" &&  show_error(input,text);
}
const name_client=list_input[0].querySelector("input");
name_client.addEventListener("foucus",e=>{

})
const btn_save=document.querySelector(".btn_confirm_info")
btn_save.addEventListener("click",e=>{
    check_fill(name_client,"Không được bỏ trống Tên");
    e.preventDefault();
})