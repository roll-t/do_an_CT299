const list_input=document.querySelectorAll(".input-validate")
function show_error(input,text){
    input.style.border="1px solid red";
    alert(text);
}
function check_fill(input,text){
    input.value &&  show_error(input,text);
}
if(list_input)