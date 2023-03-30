
<div class="body-checkout">
            <div class="left-checkout">
            <h3  class="title">ĐỊA CHỈ GIAO HÀNG</h3>
            <div class="body_address_more">
                <?php
                if(isset($_COOKIE["account_homedesign"])){
                    $id_client=explode(",",$_COOKIE["account_homedesign"])[0];
                    $address=select_value_all("SELECT * FROM diachi where KH_ID=$id_client");
                    if(count($address)>0){
                        foreach($address as $items){
                            $id_address=$items[0];
                            $name=$items[5];
                            $tinh=select_value("SELECT T_TEN FROM TINH WHERE T_ID=$items[2]")["T_TEN"];
                            $huyen=select_value("SELECT H_TEN FROM HUYEN WHERE H_ID=$items[4]")["H_TEN"];
                            $des=$items[3];
                            echo '
                            <input class="id_address" type="hidden" value="'.$id_address.'"/>
                            <div class="wrap-info-address">
                            <p style="margin-block:10px 3px;">'.$name.'</p>
                            <span>'.$des.'/</span>
                            <span>'.$tinh.'/</span>
                            <span>'.$huyen.'</span>
                            <input type="checkbox" class="select-info-address" />
                            </div>
                            ';  
                        }
                        echo '<a style="display:block;margin-top:10px;" href="checkout/more-address.php" class="more_address">Địa chỉ khác</a>';
                      

                    }else{
                        add_address();
                    }
                }
                
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
                    <a style="position:absolute" class="add_address" href=""></a>
                </form>
                <div position:absolute class="result_add"></div>
                ';
                }
                ?>
            </div>
                <div class="more-info">
                    <div class="create-account">
                    <input type="checkbox">
                    <p>Lưu địa chỉ</p>
                    </div>
                    <h3 class="title">THÔNG TIN THÊM</h3>
                    <h4 class="note">Lưu ý cho đơn hàng (tuỳ chọn)</h4>
                    <textarea class="comment" name="" id="" cols="30" rows="10" placeholder="Viết các lưu ý cho đơn hàng của bạn: vd....."></textarea>
                </div>
                <div class="pay">
                    <h3 class="title">PHƯƠNG THỨC THANH TOÁN</h3>
                    <ul class="list-pay">
                        <li class="items-pay">
                            <ion-icon name="cash-outline"></ion-icon>
                            <p>Thanh Toán Khi Nhận Hàng</p>
                        </li>
                        <li class="items-pay">
                            <ion-icon name="journal-outline"></ion-icon>
                            <p>Chuyển Khoản Ngân Hàng</p>
                        </li>
                    </ul>
                </div>
            
            </div>
            
            <div class="right-checkout">
                <h3 class="title">Tóm Tắt Đơn Hàng</h3>
           
                <div class="product-bill">
                    <h3 class="title">Sản Phẩm</h3>
                    <?php
                    if(isset($_GET["id_product"])){
                        $quantity_product=$_GET["quantity_product"];
                        $id_product=$_GET["id_product"];
                        $value_product=select_value("SELECT * FROM SANPHAM WHERE SP_ID=$id_product");
                        $name_product=$value_product["SP_TEN"];
                        $price_product=$value_product["SP_GIA"];
                        $img_product=$value_product["SP_IMG_1"];
                        $total_price=$price_product * $quantity_product;
                    echo
                    '<div class="body-bill">
                    <li class="bill-items total_bill">
                    <p>Thành Tiền</p><span>'.number_format($total_price).'</span><p>đ</p>
                    </li>
                    <li class="bill-items">
                    <p>Vận Chuyển</p><span>Liên hệ phí vận chuyển sau</span>
                    </li>
                    <li class="bill-items">
                    <p>Tổng Cộng</p><span>'.number_format($total_price).'</span><p>đ</p>
                    </li>
                    </div>';
                    echo '
                    <div class="list-product-bill">
                    <li class="items-bill">
                    <input type="hidden" class="id_product_bill" value="'.$id_product.'"/>
                        <div class="left">
                            <img src="'.$img_product.'" alt="">
                        </div>
                        <div class="center">
                            <div class="name-product">'.$name_product.'</div>
                            <span class="bill_items_quantity" style="display:flex;">X<p>'.$quantity_product.'</p></span>
                        </div>
                        <div class="right">
                            <span class="bill_items_price">'.number_format($price_product).'</span><p>đ</p>
                        </div>
                    </li>';
                    }
                    if(isset($_GET["value_product"])){
                        $arr_value=json_decode($_GET["value_product"]);
                        $total_price=0;
                        foreach($arr_value as $items){
                            $value_product=select_value("SELECT * FROM SANPHAM WHERE SP_ID=$items[0]");
                            $price_product=$value_product["SP_GIA"];
                            $total_price+=($price_product * $items[1]);
                        }
                        echo
                        '<div class="body-bill">
                        <li class="bill-items total_bill">
                            <p>Thành Tiền</p><span>'.number_format($total_price).'</span><p>đ</p>
                        </li>
                        <li class="bill-items">
                            <p>Vận Chuyển</p><span>Liên hệ phí vận chuyển sau</span>
                        </li>
                        <li class="bill-items">
                            <p>Tổng Cộng</p><span>'.number_format($total_price).'</span><p>đ</p>
                        </li>
                        </div>
                        <div class="list-product-bill">
                        ';
                        foreach($arr_value as $items){
                            $value_product=select_value("SELECT * FROM SANPHAM WHERE SP_ID=$items[0]");
                            $name_product=$value_product["SP_TEN"];
                            $price_product=$value_product["SP_GIA"];
                            $img_product=$value_product["SP_IMG_1"];
                            $total_price+=($price_product * $items[1]);
                            echo '
                                <li class="items-bill">
                                <input type="hidden" class="id_product_bill" value="'.$items[0].'"/>
                                <div class="left">
                                    <img src="'.$img_product.'" alt=""> 
                                </div>
                                <div class="center">
                                    <div class="name-product">'.$name_product.'</div>
                                    <span class="bill_items_quantity" style="display:flex">X<p>'.$items[1].'</p></span>
                                </div>
                                <div class="right">
                                    <span class="bill_items_price">'.number_format($price_product).'</span><p>đ</p>
                                </div>
                            </li>';
                        }
                    }
                    ?> 
                    </div>
                    <div class="baohanh">
                        <h3 class="title">Chính Sách Bảo Hành</h3>
                        <div class="text">

                        </div>
                    </div>
                    <div class="confirm-baohanh">
                        
                        <p><input type="checkbox">Tôi đã đọc và đồng ý điều kiện đổi trả hàng, giao hàng, chính sách bảo mật, điều khoản dịch vụ mua hàng online * </p>
                    </div>
                    <?php
                   echo ' <a style="padding:10px 20px;margin:20px auto;display:block;" href="checkout.php?order" class="btn-confirm confirm_checkout">ĐẶT MUA</a>';
                    ?>
                </div>
            </div>
        </div>