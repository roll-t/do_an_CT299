

const search_icon=document.querySelector(".search .btn-search")
const search_input=document.querySelector(".search input")
let show=true;
search_icon.addEventListener("click",e=>{
    search_input.classList.toggle("active")
})