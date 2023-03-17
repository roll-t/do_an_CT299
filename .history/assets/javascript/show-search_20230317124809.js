

const search_icon=document.querySelector(".search .btn-search")
const search_input=document.querySelector(".search input")
const search_result=document.querySelector(".search-result");

let active=false;
search_icon.addEventListener("click",e=>{
    if(search_input.value==""){  
    search_input.classList.toggle("active")
    let option=!active;
    if(active){
        search_input.placeholder="Search..."   
    }else{
        search_input.placeholder=""   
    }
    }else{
        search_result.type="submit";
        search_result.click();
    }
})