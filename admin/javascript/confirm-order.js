$(".btn_confirm_order").click(function(){
    let url =this.href;
    $(".wait-confirm").load(url)
    return false;
})