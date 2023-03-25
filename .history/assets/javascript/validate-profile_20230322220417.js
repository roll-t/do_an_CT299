const list_input=document.querySelectorAll(".input-validate")
function show_error(input,text){
    input.style.border="1px solid red";
    alert(`Hông được bỏ trống ${}`)
}
function check_fill(input){
    input.value && 
}