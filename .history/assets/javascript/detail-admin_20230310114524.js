
function change_img(){
    const btn_next=document.querySelector(".left-detail .control ion-icon:nth-child(1)")
    const btn_prve=document.querySelector(".left-detail .control ion-icon:nth-child(2)")
    const lists=document.querySelectorAll(".left-detail .list-img .img-items img")

    lists.forEach(items=>{
        items.addEventListener("click",e=>{
            const body_img =document.querySelector(".center-detail .main-img-detail img")
            body_img.src=items.src
        })
    })
    btn_next.addEventListener("click",e=>{
        const list_img=document.querySelectorAll(".left-detail .list-img .img-items")
        document.querySelector(".left-detail .list-img ").appendChild(list_img[0]);

        const body_img =document.querySelector(".center-detail .main-img-detail img")
        const show_product_img=document.querySelectorAll(".left-detail .list-img .img-items img")[0]
        body_img.src=show_product_img.src
    })
    btn_prve.addEventListener("click",e=>{
        const list_img=document.querySelectorAll(".left-detail .list-img .img-items")
        document.querySelector(".left-detail .list-img ").prepend(list_img[list_img.length-1]);
        
        const body_img =document.querySelector(".center-detail .main-img-detail img")
        const show_product_img=document.querySelectorAll(".left-detail .list-img .img-items img")[0]
        body_img.src=show_product_img.src
    })
}

change_img()

function preview(){
    const btn_preview=document.querySelector(".body-detail.body-detail-admin .preview")
    const img_1=document.querySelectorAll(".left-side-add .wrap-input.img input")[0]
    const img_2=document.querySelectorAll(".left-side-add .wrap-input.img input")[1]
    const img_3=document.querySelectorAll(".left-side-add .wrap-input.img input")[2]
    const img_4=document.querySelectorAll(".left-side-add .wrap-input.img input")[3]
    let link_2;
    let link_3;
    let link_4;
    let link_1;

        img_1.addEventListener("change",e=>{
            const file=e.target.files[0];
            link_1= URL.createObjectURL(file)
        })
        img_2.addEventListener("change",e=>{
            const file=e.target.files[0];
            link_2= URL.createObjectURL(file)
        })
        img_3.addEventListener("change",e=>{
            const file=e.target.files[0];
            link_3= URL.createObjectURL(file)
        })
        img_4.addEventListener("change",e=>{
            const file=e.target.files[0];
            link_4= URL.createObjectURL(file)
        })

    btn_preview.addEventListener("click",e=>{
        const body_right=document.querySelector(".body-detail-admin.body-right")
    })
}
preview()

    const content=`

                             <div class="body-right">
                            <div class="left-detail">
                                <div class="control">
                                    <ion-icon name="chevron-up-outline"></ion-icon>
                                    <ion-icon name="chevron-down-outline"></ion-icon>
                                </div>
                                <ul class="list-img">
                                    <li class="img-items">
                                        <img src="./images/collection/arrivals4.png" alt="">
                                    </li>
                                    <li class="img-items">
                                        <img src="./images/collection/arrivals5.png" alt="">
                                    </li>
                                    <li class="img-items">
                                        <img src="./images/collection/arrivals6.png" alt="">
                                    </li>
                                    <li class="img-items">
                                        <img src="./images/collection/arrivals7.png" alt="">
                                    </li>
                                    <li class="img-items">
                                        <img src="./images/collection/arrivals8.png" alt="">
                                    </li>
                                </ul>
                            </div>
                            <div class="center-detail">
                                <div class="main-img-detail">
                                    <img src="./images/collection/arrivals3.png" alt="">
                                </div>
                            </div>
                             <div class="preview">Xem Thử</div>
                              </div>
                              `