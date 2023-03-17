


const user_name=document.querySelectorAll(".user-box input")[0]
const password=document.querySelectorAll(".user-box input")[1]
const btn=document.querySelector(".btn")

btn.addEventListener("click",e=>{
    if(user_name.value!='admin'){
        alert('sai tai khoan');
    }else if(password.value!="12345"){
        alert("sai mat khau");
    }else{
        
    }
})