const list_input=document.querySelectorAll(".input-validate")
console.log(list_input)
function show_error(input,text){
    input.style.border="1px solid red";
    alert(text);
}
function check_fill(input,text){
    input.value=="" &&  show_error(input,text);
}
list_input[0].querySelector("input").addEventListener("focusout",e=>{
    check_fill(list_input[0].querySelector("input"));
})