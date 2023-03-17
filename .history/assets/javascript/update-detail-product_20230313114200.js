
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

                const btn_confirm=$(".delete-confirm")
                btn_confirm.forEach(items=>{     
                    items.addEventListener("click",e=>{
                        const confirm=confirm_1()
                        if(confirm){
                            const detele=items.querySelector(".delete-now")
                            detele.href="./add-product.php?id_delete='.$items[0].'"
                        }
                    })
                })  
                function confirm_1(){
                    return confirm("Bạn có muốn xóa sản phẩm ?");
                }