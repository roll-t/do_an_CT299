

const search_icon=document.querySelector(".search .btn-search")
const search_input=document.querySelector(".search input")

search_icon.addEventListener("click",e=>{
    search_input.classList.toggle("active")
    search_input.ariaPlaceholder="search.....";
})