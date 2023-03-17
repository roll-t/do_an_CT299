            
                const btn_confirm=document.querySelectorAll(".delete-confirm")
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