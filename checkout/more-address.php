<?php
    include './connect.php';
    include '../query.php';
     function add_address(){
        $id_client=explode(",",$_COOKIE["account_homedesign"])[0];
        $info_clinet=select_value("SELECT KH_EMAIL,KH_SDT from khachhang where KH_ID=$id_client");
        $phone_number=$info_clinet["KH_SDT"];
        $mail=$info_clinet["KH_EMAIL"];
        echo'  <form class="form-input main_form_input main_form_input_2" action="#">
               <div class="input-group input_name">
                   <span>Họ Và Tên</span>
                    
                   <input type="text" placeholder="Nhập Họ Và Tên">
               </div>
               <div class="input-group input_phone">
                   <span>Số Điện Thoại</span>
                   <input type="text" placeholder="Nhập Số Điện Thoại" value="'.$phone_number.'">
               </div>
               <div class="input-group input_mail">
                   <span>Địa Chỉ Email</span>
                   <input type="email" placeholder="Nhập Địa Chỉ Email" value="'.$mail.'">
               </div>
               <div class="input-group select-input tinh input_tinh">
                   <span>Tỉnh / Thành Phố</span>
                   <select name="" id="">
                       <option value="" selected disabled>Chọn Tỉnh</option>';
                       $arr_tinh=select_value_all("SELECT * FROM TINH");
                       foreach($arr_tinh as $items){
                           echo '<option value="'.$items[0].'" >'.$items[1].'</option>';
                       }
                       echo ' </select>';
                       echo '<a href="./checkout/address-checkout.php?id_tinh=1" class="link_tinh_checkout" style="position:absolute;"></a>';
        echo'     </div>
               <div class="input-group select-input huyen input_huyen">
                   <span>Quận / Huyện</span>
                   <select name="" id="">
                       <option value="" selected disabled>Chọn Huyện</option>
                   </select>
               </div>
               <div class="input-group input_address">
                   <span>Địa Chỉ</span>
                   <input type="text" placeholder="Nhập Địa Chỉ">
               </div>
               <a class="add_address" href=""></a>
           </form>';
           echo '<div class="result_add"></div>
           <script src="./assets/javascript/info-checkout-2.js"></script>
           ';
           echo '<script src="./checkout/js/validate-checkout-2.js"></script>';
           }    
    add_address()   
?>
