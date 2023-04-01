const select_tag=document.querySelector(".body-kiemtra select")
let id=1;
select_tag.addEventListener("change",e=>{
    id=select_tag.value;
})

$(".btn_kiemtra").click(function(){
    this.href=`./revenue/monthly-revenue.php?moth=${id}`;
    let url =this.href;
    $(".list-ketqua .tong p").load(url);
    return false;
})