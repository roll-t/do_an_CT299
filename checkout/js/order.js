function render_order_list(){
    const arr_product=JSON.parse(localStorage.getItem("order"))
    const body_list=document.querySelector(".body-order-success .list-order")
    const total_sum=JSON.parse(localStorage.getItem("sum_order"))
    arr_product.forEach(items=>{
        const wrap=document.createElement("div")
        wrap.className="body-list"
        const a= new Date();
        const content=` 
                            <div class="item">
                            <div class="time">${a.getHours()}:${a.getMinutes()}</div>
                            <div class="date">${a.getDate()}/${a.getMonth()+1}/${a.getFullYear()}</div>
                            </div>
                            <div class="item">
                            ${items[0]}
                            </div>
                            <div class="item">
                            ${items[1]}
                            </div>
                            <div class="item">
                            <p>${Number(items[2]).toLocaleString('zh-CN')}</p><span style="padding-left:5px;"> VND</span>`
       wrap.innerHTML=content;                     
       body_list.appendChild(wrap);
    })
    const wrap_sumprice=document.createElement("div")
    wrap_sumprice.className="body-list"
    const sum_price= ` 
                    <div class="item">
                    Tổng Tiền: 
                    </div>
                    <div class="item">
                   
                    </div>
                    <div class="item">
                    
                    </div>
                    <div class="item">
                    <p>${total_sum}</p><span style="padding-left:5px;">VND</span>`
    wrap_sumprice.innerHTML=sum_price;
    body_list.appendChild(wrap_sumprice)
}
render_order_list();
