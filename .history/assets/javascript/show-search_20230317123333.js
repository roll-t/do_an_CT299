

const search_icon=document.querySelector(".search .btn-search")
const search_input=document.querySelector(".search input")
const form_search=document.querySelector(".form-search");

search_icon.addEventListener("click",e=>{
    if(search_input.value==""){ 
        form_search.addEventListener("submit",e=>{
            return false;
        })
    search_input.classList.toggle("active")
    }else{
        form_search.method="get"
        form_search.action="product.php"
        SubmitEvent=true;
    }
})