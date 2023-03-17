
                $(".change").click(function(){
                    let url=this.href;
                    $(".body-detele-product .product-detele").load(url)
                    return false;
                })
                $(".update_detail").click(function(){
                    slide=true;
                    let url=this.href;
                    $(".body-detele-product .product-detele").load(url)
                    return false;
                })


                $(".page").click(function(){
                    let url=this.href;
                    $(".body-detele-product .list-product-select").load(url)
                    return false;
                })


                const btn_confirm=document.querySelector(".confirm-detele")
                btn_confirm.addEventListener("click",e=>{
                    onfirm("Bạn có muốn xóa sản phẩm ?");
                    if(confirm){
                        document.querySelector(".delete-now").click();
                    }
                })
                console.log(btn_confirm)