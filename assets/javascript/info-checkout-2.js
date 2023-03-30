const btn_tinh_2=document.querySelector(".select-input.tinh select")
const link_tinh_2=document.querySelector(".link_tinh_checkout")

$(".link_tinh_checkout").click(function(){
    let url=this.href
    $(".select-input.huyen select").load(url)
    return false;
})
btn_tinh_2 &&
btn_tinh_2.addEventListener("change",e=>{
    btn_tinh_2.value
    link_tinh_2.href=`./checkout/address-checkout.php?id_tinh=${btn_tinh_2.value}`
    link_tinh_2.click();
})