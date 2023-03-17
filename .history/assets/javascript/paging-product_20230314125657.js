
$(".body-2.body-2-product .padding .page-items").click(function(){
    let url=this.href;
    $(".body-2.body-2-product .list-product.main-list-product").load(url);
    return false;
})

function next_paging(){
    const btn =document.querySelector(".body-2.body-2-product .padding .page-next")
    const list_page=document.querySelectorAll(".body-2.body-2-product .padding .page-index")
    const btn_per=document.querySelector(" .body-2.body-2-product .padding .page-per")
    const quantity_page=document.querySelector(".quantity-page").value
    let index_start=0;
    let idx=2;
    let index_end=0;
  
        btn.addEventListener("click",e=>{
            console.log(idx)
            if(index_end==Number(quantity_page)){
                btn.classList.add("active")
            }
            btn_per.classList.add("active")
            btn_per.href=`./paging/paging-product.php?page=${index_start==0?1:index_start}`
            if(Number(quantity_page)+1>index_end){
                btn.href=`./paging/paging-product.php?page=${index_end<4?5:index_end+1}`
                let count=idx;
                idx<Number(quantity_page)-2?idx+=1:idx=Number(quantity_page)-2;
                list_page.forEach(items=>{
                    items.href=`./paging/paging-product.php?page=${count}`;
                    items.innerHTML=count++;
                    index_end=count;
                    index_start=count-3;
                })
            }
        })
        btn_per.addEventListener("click",e=>{
            btn.classList.remove("active");
            btn.href=`./paging/paging-product.php?page=${index_end-1}`
            let count=idx-2;
            list_page.forEach(items=>{
                items.href=`./paging/paging-product.php?page=${count}`;
                items.innerHTML=count++;
                index_end=count;
                
            })
            idx>3 ?idx-=1:idx=3;
            if(idx===3){
                texture_1.classList.remove("active")
            }
        })
}
// next_paging();   

function paging(){
    const btn_next=document.querySelector(".body-2.body-2-product .padding .page-next")
    const btn_per=document.querySelector(".body-2.body-2-product .padding .page-per")
    const list_page=document.querySelectorAll(".body-2.body-2-product .padding .page-index")
    const quantity_page=document.querySelector(".quantity-page").value
    const count_page=Number(quantity_page);
    let start_index=0;
    let end_index=0;
    let count=2;

    btn_next.addEventListener("click",e=>{
        let index=count++;
        btn_per.classList.add("active");
        if(count==count_page-1){
            btn_next.classList.add("active")
        }
        btn_next.href=`./paging/paging-product.php?page=${count+2}`;
        console.log(count)
        list_page.forEach((items)=>{
            items.innerHTML=index;
            items.href=`./paging/paging-product.php?page=${index}`;
            index++;
        })
    })

    btn_per.addEventListener("click",e=>{
        btn_next.classList.remove("active");
        btn_next.href=`./paging/paging-product.php?page=${count+1}`;
        
        if(count==3){
            btn_per.classList.remove("active");
        }
        let index=count--;
        console.log(count)
        list_page.forEach(items=>{
            items.innerHTML=index-2;
            items.href=`./paging/paging-product.php?page=${index-2}`
            index++;
        })
    })
}

paging()