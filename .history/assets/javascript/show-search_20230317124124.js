

const search_icon=document.querySelector(".search .btn-search")
const search_input=document.querySelector(".search input")
const search_result=document.querySelector(".search-result");


search_icon.addEventListener("click",e=>{
    if(search_input.value==""){ 
    search_input.classList.toggle("active")
    }else{
        search_result.type="sudmit";
    }
})