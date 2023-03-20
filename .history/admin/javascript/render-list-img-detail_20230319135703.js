const btn_add_img=document.querySelector(".wrap-list-img .add-img")
const list_img=document.querySelector(".wrap-list-img .list-img-des")
let index_img=0
btn_add_img.addEventListener("click",e=>{
    const count_img=5
    if(index_img>=count_img){
        alert(`Được Thêm tối đa ${count_img}`)
    }else{
        index_img++;
        add_img(index_img);
    }
})

function add_img(index){
    const wrap=document.createElement("div")
    wrap.className="img-items";
    const content=`<label for="img-des">ẢNH ${index}</label>
                    <input name="img-des_${index}" type="file">`
    wrap.innerHTML=content;
    list_img.append(wrap);
}
