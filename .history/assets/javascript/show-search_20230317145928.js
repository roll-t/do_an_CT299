

const search_icon=document.querySelector(".search .btn-search")
const search_input=document.querySelector(".search input")
const search_result=document.querySelector(".search-result");

let active_input=false;
search_icon.addEventListener("click",e=>{
    if(search_input.value==""){  
    search_input.classList.toggle("active")
    active_input=!active_input;
    if(active_input){
        search_input.focus();
        search_input.placeholder="Search..."   
    }else{
        search_input.placeholder=""   
    }
    }else{  
        search_result.type="submit";
        search_result.click();
    }
})