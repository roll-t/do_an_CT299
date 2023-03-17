
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



                
