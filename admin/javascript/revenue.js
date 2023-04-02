const select_tag=document.querySelector(".body-kiemtra select")
const link_selling_month=document.querySelector(".month_selling")
let id=1;
select_tag.addEventListener("change",e=>{
    id=select_tag.value;
    link_selling_month.href=`./revenue/selling-product.php?month=${id}`;
})

$(".btn_kiemtra").click(function(){
    this.href=`./revenue/monthly-revenue.php?moth=${id}`;
    let url =this.href;
    $(".list-ketqua .tong p").load(url);
    link_selling_month.click();
    return false;
})
$(".month_selling").click(function(){
    let url= this.href;
    $(".selling_revenue").load(url)
    return false;
})


