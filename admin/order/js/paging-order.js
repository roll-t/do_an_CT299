let index=1;

let list_items=document.querySelectorAll(".render_list_order tr").length
console.log(list_items)
$(".list-btn-paging .next").click(function(e){
    let list_items_2=document.querySelectorAll(".render_list_order tr")
    list_items=list_items_2.length;
    if(list_items>=20){
        index++;
        this.href=`./order/paging-order.php?page_order=${index}`;
    }else{
        e.preventDefault()
    }
    let url=this.href;
    $(".render_list_order .main_body_order_list").load(url);
    return false;
})
$(".list-btn-paging .prev").click(function(e){
    if(index<=1){
        e.preventDefault()
    }else{
        index--;
        this.href=`./order/paging-order.php?page_order=${index}`;
    }
    let url=this.href;
    $(".render_list_order .main_body_order_list").load(url);
    return false;
})