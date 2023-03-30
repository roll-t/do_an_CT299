function validate_form_checkout(){
const input={
    user:document.querySelector(".input_name input"),
    phone:document.querySelector(".input_phone input"),
    mail:document.querySelector(".input_mail input"),
    tinh:document.querySelector(".input_tinh select"),
    huyen:document.querySelector(".input_huyen select"),
    address:document.querySelector(".input_address input")
}

const content={
    input_name:"Họ Và Tên",
    input_phone:"Số điện thoại",
    input_mail:"Địa chỉ mail",
    input_tinh:"TỈnh / Thành Phố",
    input_huyen:"Quận / Huyện",
    input_address:"Địa Chỉ"
}

function show_result_check(input,test,text,text_default){
    const error=input.parentElement.querySelector("span")
    if(test){
        error.innerHTML=text_default;
        error.style.color="black";
    }else{
        error.innerHTML=text;
        error.style.color="red";
    }

}
function check_fill(input,min,max,text_default){
    let test=true;
    let text="";
    if(input.value==""){
        test=false;
        text=`Không được bỏ trống `;
    }else if(input.value.length<min){
        test=false;
        text=`Phải có ít nhất ${min} ký tự`;
    }else if(input.value.length>max){
        test=false;
        text=`Tối đa ${max} ký tự`;
    }
    show_result_check(input,test,text,text_default);
    return test;
}

function check_mail(input,text_default){
    let test=true;
    let text="";
    var emailReg = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if(!emailReg.test(input.value)){
        test=false;
        text="Sai định dạng mail"
    }
    show_result_check(input,test,text,text_default)
    return test;
}
function check_phone(input,text_default){
    let test =true;
    let text;
    let regex_phone=/(84|0[3|5|7|8|9])+([0-9]{8})\b/g;
    if(!regex_phone.test(input.value)){
        test=false;
        text="sai định dạng số điện thoại"
    }
    show_result_check(input,test,text,text_default)
    return test;
}
const btn_confirm=document.querySelector(".confirm_checkout");
const list_bill_items=document.querySelectorAll(".list-product-bill .items-bill")
const total_sum=document.querySelector(".body-bill .total_bill span").innerHTML
const order=[];
list_bill_items.forEach(items=>{
    const name_product=items.querySelector(".name-product").innerHTML
    const quantity=items.querySelector(".bill_items_quantity p").innerHTML
    const price=items.querySelector(".bill_items_price").innerHTML
    order.push([name_product,quantity,price])
})
localStorage.setItem("order",JSON.stringify(order))
localStorage.setItem("sum_order",JSON.stringify(total_sum))

const save_address=document.querySelector(".create-account input")

btn_confirm.addEventListener("click",e=>{
    let checkout_sucess=false;
    let user=check_fill(input.user,5,30,content.input_name) 
    let adr=check_fill(input.address,10,50,content.input_address)
    let mail=check_mail(input.mail,content.input_mail)
    let t=check_fill(input.tinh,0,1000,content.input_tinh)
    let p=check_phone(input.phone,content.input_phone)
    let h=check_fill(input.huyen,0,1000,content.input_huyen)
    user && adr && mail && t && p && h && (checkout_sucess=true)
    if(checkout_sucess && save_address.checked==true){
       add_address_client(input.user.value,input.tinh.value,input.huyen.value,input.address.value)
    }
   !checkout_sucess && e.preventDefault()
})
function add_address_client(name_client,tinh,huyen,des){
    $(".add_address").click(function(){
        this.href=`./checkout/add-address.php?name=${name_client}&tinh=${tinh}&huyen=${huyen}&des=${des}`
        let url=this.href
        $(".result_add").load(url)
        return false;
    })
    $(".add_address").click();
}
}

const hidden_form=document.querySelector(".main_form_input")

hidden_form && validate_form_checkout();
$(".more_address").click(function(){
    let url =this.href;
    $(".body_address_more").load(url)
    return false;
})

const list_id_address=document.querySelectorAll(".id_address")
var id_value=0;
if(list_id_address.length>0){
    id_value=list_id_address[list_id_address.length-1].value;
}
function address_checkout(){
    let error=false;
    let length_items=0;
    function get_address_select(){
        const select_items=document.querySelectorAll(".select-info-address")
        select_items.forEach((items,index)=>{
            if(items.checked==true){
                error=true;
            }
        })
        length_items=select_items.length;
    }

    const list_select_items=document.querySelectorAll(".select-info-address")
    list_select_items.forEach(value=>{
        value.addEventListener("click",e=>{
            get_address_select()
        })
    })
    

        function get_info_order(){
            const input={
                user:document.querySelector(".input_name input"),
                phone:document.querySelector(".input_phone input"),
                mail:document.querySelector(".input_mail input"),
                tinh:document.querySelector(".input_tinh select"),
                huyen:document.querySelector(".input_huyen select"),
                address:document.querySelector(".input_address input")
            }
            return JSON.stringify([input.user.value,input.address.value,input.tinh.value,input.huyen.value,input.phone.value])
        }

        const btn_checkout=document.querySelector(".confirm_checkout")
        btn_checkout.addEventListener("click",e=>{
            get_address_select()
            const list_bill_items=document.querySelectorAll(".list-product-bill .items-bill")
            const total_sum=document.querySelector(".body-bill .total_bill span").innerHTML
            const order=[];
            list_bill_items.forEach(items=>{
                const name_product=items.querySelector(".name-product").innerHTML
                const quantity=items.querySelector(".bill_items_quantity p").innerHTML
                let price=items.querySelector(".bill_items_price").innerHTML
                let id_product=items.querySelector(".id_product_bill").value
                price=price.split(",").join("")
                order.push([name_product,quantity,price,id_product])
            })
            if(length_items>0){
                btn_checkout.href=`checkout.php?order=${id_value}&list_product=${JSON.stringify(order)}`;
            }else{
                btn_checkout.href=`checkout.php?order=${get_info_order()}&list_product=${JSON.stringify(order)}`;
            }
            localStorage.setItem("order",JSON.stringify(order))
            localStorage.setItem("sum_order",JSON.stringify(total_sum))
            if(!error && length_items>0){
                e.preventDefault();
            }
        })
}

address_checkout();
