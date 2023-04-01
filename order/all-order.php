<body>
    <div class="list-order">
    <?php
      $id_client=explode(",",$_COOKIE["account_homedesign"])[0];
      $list_order=select_value_all("SELECT * FROM DON_DAT_HANG WHERE KH_ID=$id_client order by DDH_ID desc");
      foreach($list_order as $items){
         $sum_bill=0;
         $list_order_item_details=select_value_all("SELECT * FROM CHITIET_DDH WHERE DDH_ID=$items[0]");
          echo '     <div class="order-items">';
          echo '         <div class="date-order">';
          if($items[7]==NULL || $items[7]==1){
              echo '             <div class="status">Chờ xác nhận</div>';
          }else{
            $name_status=select_value("SELECT TT_TEN FROM DON_DAT_HANG AS A,TRANGTHAI AS B WHERE A.TT_ID=B.TT_ID AND A.TT_ID =$items[7]")["TT_TEN"];
            echo '             <div class="status confirm">'.$name_status.'</div>';
          }
          echo '            <span>'.$items[2].'</span>';
          echo '         </div>';
          foreach($list_order_item_details as $rows){
              $sum_price=$rows[3] * $rows[2];
              $sum_bill+=$sum_price;
              $img=select_value("SELECT SP_IMG_1 FROM SANPHAM WHERE SP_ID=$rows[0]")["SP_IMG_1"];
              echo '         <div class="order-items-detail">';
              echo '             <div class="img"><img src="'.$img.'" alt=""></div>';
              echo '             <div class="content">';
              echo '                 <div class="top-content">';
              echo '                     <div class="name">'.$rows[5].'</div>';
              echo '                 </div>';
              echo '                 <div class="bottom-content">';
              echo '                     <div class="wrap-price">';
              echo '                         <div class="price"><span>'.number_format($rows[3]).'</span><span>VND</span> <div class="quantity">';
              echo '                             <span>X</span>';
              echo '                             <span>'.number_format($rows[2]).'</span>';
              echo '                         </div></div>';
              echo '                         <div class="sum">';
              echo '                             <p>Thành tiền: </p>';
              echo '                             <span>'.number_format($sum_price).'</span>';
              echo '                             <span>VND</span>';
              echo '                         </div>';
              echo '                     </div>';
              echo '                 </div>';
              echo '             </div>';
              echo '         </div>';
          }
          echo '         <div class="sum-order">';
          echo '             <h4>Tổng Đơn: </h4>';
          echo '             <p>'.number_format($sum_bill).'</p>';
          echo '             <span>VND</span>';
          echo '         </div>';
          echo '     </div>';
      }
    ?>


    </div>
</body>
</html>