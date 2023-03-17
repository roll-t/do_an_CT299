
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
                onclick="return confirm('Bạn có chắc chắn muốn xóa chuyên ngành này?')"

                const btn_confirm=document.querySelectorAll(".confirm-detele")
                btn_confirm.addEventListener("click",e=>{
                   return confirm("Bạn có muốn xóa sản phẩm ?");
                   
                })
                console.log(btn_confirm)