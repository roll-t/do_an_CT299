<?php 
include '../connect.php';
include '../query.php';
                $count_index=20;
                $index=isset($_GET["page_order"])?$_GET["page_order"]:1;
                $start_from = ($index - 1) * $count_index;
                $list_order=select_value_all("SELECT * FROM DON_DAT_HANG order by DDH_ID desc LIMIT $start_from, $count_index");
                foreach($list_order as $items){
                    $sum_order=0;
                    echo '<tr>';
                    echo '    <td>'.$items[2].'</td>';
                    echo '    <td>'.$items[6].'</td>';
                    echo '    <td>'.$items[4].'</td>';
                    echo '    <td>';
                    echo '        <div class="list-product-order">';
                    $list_order_details=select_value_all("SELECT * FROM CHITIET_DDH WHERE DDH_ID=$items[0]");
                    foreach($list_order_details as $rows){
                        $sum_order+=($rows[3]*$rows[2]);
                        echo '            <div class="product-order-items">';
                        echo '                <div class="name-product">'.$rows[5].'</div>';
                        echo '                <div class="quantity-product"><span>X</span><span>'.$rows[2].'</span></div> ';    
                        echo '            </div>';
                    }
                    echo '        </div>';
                    echo '    </td>';
                    echo '    <td>'.number_format($sum_order).'<span style="margin-left:5px">VND</span></td>';
                    if($items[7]==NULL){
                        echo '    <td class="wait-confirm"><span>Chờ Xác Nhận</span></td>';
                        echo '    <td><a href="./order/confirm-order.php?order_id='.$items[0].'" class="btn btn_confirm_order">Xác nhận</a></td>';
                    }else{
                        $status_name=select_value("SELECT TT_TEN FROM TRANGTHAI WHERE TT_ID=$items[7]")["TT_TEN"];
                        echo '    <td class="wait-confirm"><span class="confirm true">'.$status_name.'</span></td>';
                        echo '    <td><a href="#" class="btn btn_confirm_order confirm">Xác nhận</a></td>';
                    }
                    echo '</tr>';
                }
                ?>