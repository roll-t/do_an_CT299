
const btn_tinh=document.querySelector(".select-input.tinh select")
const link_tinh=document.querySelector(".link_tinh_checkout")

$(".link_tinh_checkout").click(function(){
    let url=this.href
    $(".select-input.huyen select").load(url)
    return false;
})
btn_tinh &&
btn_tinh.addEventListener("change",e=>{
    btn_tinh.value
    link_tinh.href=`./checkout/address-checkout.php?id_tinh=${btn_tinh.value}`
    link_tinh.click();
})