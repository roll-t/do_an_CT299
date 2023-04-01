<?php
echo '   <div class="thuocdo">';
echo '<div class="item">
<div class="sodo">0</div>
<div class="mucdo">
</div>';
echo '</div>';
for($i=1;$i<=10;$i++){
    echo '<div class="item">
        <div class="sodo">'.($i*10).' <span sytle="margin-left:1px">%</span></div>
        <div class="mucdo">
        </div>
    </div>';
}

echo '</div>';
 
?>