

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website_banhang";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

session_start();
$sql = "SELECT * FROM `catalog_list` where 1 ";

$sql_2 = "SELECT * FROM `product_categories` where 1 ";

$result_2=$conn->query($sql_2);
$result=$conn->query($sql);

$result_all=$result->fetch_all();

$result_all_2=$result_2->fetch_all();

?>   


<script>
    localStorage.setItem('email', '<?php echo $_SESSION['email'];?>');  
    localStorage.setItem('password', '<?php echo $_SESSION['password'];?>');
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="./assets/css/admin.css">
    <link rel="stylesheet" href="./assets/css/app.css">
</head>
<body>
    <header>Admin</header>
    <div class="warp">
        <div class="left-side">
        <div class="top"><ion-icon name="grid-outline"></ion-icon><h3 class="title-menu">Danh muc san pham</h3></div>
        <ul class="menu">
            <li class="menu-items menu-category">
                <p>Danh Mục</p>
                <div class="category">
                    <div class="category-items">Thêm danh sách danh mục</div>
                    <div class="category-items">Xóa danh sách danh mục</div>
                    <div class="category-items">sửa danh sách danh mục</div>
                    <div class="category-items">Thêm danh mục</div>
                    <div class="category-items">xóa danh mục</div>
                    <div class="category-items">sửa danh mục</div>
                </div>
            </li> 
            <li class="menu-items menu-room">
                <p>Phòng</p>
                <div class="category">
                    <div class="category-items">Thêm phòng</div>
                    <div class="category-items">Xóa phòng</div>
                    <div class="category-items">Sửa phòng</div>
                </div>
            </li> 
            <li class="menu-items menu-product">
                <p>Sản phẩm</p>
                <div class="category">
                    <div class="category-items">Thêm sản phẩm</div>
                    <div class="category-items">Xóa sản phẩm</div>
                    <div class="category-items">Sửa sản phẩm</div>
                </div>
            </li> 
        </ul>
        </div>
        <div class="right-side">
            <div class="body-add-category">
              <form action="./add_category.php" method="post" class="group-input">
                    <span>Nhập Tên Danh Sách Danh Mục</span>
                    <div class="wrap-input">
                        <input name="name_catalog_list" class="input" type="text" placeholder="Nhập tên danh mục ...">
                        <input name="add_catalog_list" class="btn" type="submit" value="Xác Nhận">
                    </div>
                </form>
            </div>
            <div class="body-add-category">
              <form action="./add_category.php" method="post" class="group-input">
                    <span>Chọn Tên Danh Sách Danh mục muốn xóa</span>
                    <?php 
                    
                    echo '<div class="wrap-input">';
                    echo '<select name="value_select" class="detele-catalog-list">';
                        foreach($result_all as $row){
                            echo "<option value=".$row[0].">".$row[1]."</option>";
                        }
                        ?>
                    </select>
                        <input name="detele_catalog_list" class="btn" type="submit" value="Xác Nhận Xóa">
                    </div>
                </form>
            </div>
            <div class="body-add-category">
              <form action="./add_category.php" method="post" class="group-input">
                    <span>Chọn Tên Danh Sách Danh mục muốn sửa</span>
                    <div class="wrap-input">
                    <select name="value_select" class="detele-catalog-list">
                        <?php 
                        foreach($result_all as $row){
                            echo "<option value=".$row[0].">".$row[1]."</option>";
                        }
                        ?>
                    </select>
                    </div>
                    <div class="wrap-input">
                        <input name="name_catalog_list" class="input" type="text" placeholder="Nhap vào tên mới ....">
                        <input name="change_catalog_list" class="btn" type="submit" value="Thay đổi">
                    </div>
                </form>
            </div>
            <div class="body-add-category">
                <form action="./add_category.php" method="post" class="group-input">
                   <div class="wrap-input">
                    <span>Chọn danh sách danh mục: </span>
                    <select name="value_select" class="select_catalog_list">
                        <?php 
                        foreach($result_all as $row){
                            echo "<option value=".$row[0].">".$row[1]."</option>";
                        }
                        ?>
                    </select>
                   </div>
                    <span>Nhập Tên danh mục</span>
                    <div class="wrap-input">
                        <input name="name_category" class="input" type="text" placeholder="Nhập tên danh mục ...">
                        <input name="add_category" class="btn" type="submit" value="Xác Nhận">
                    </div>
                </form>
            </div>
            <div class="body-add-category">
                <form action="./add_category.php" method="post" class="group-input">
                    <div class="wrap-input">
                       <span>Chọn danh sách danh mục:</span>
                       <?php 
                        echo '<select name="value_select" class="select_catalog_list select-none-parent">';
                        foreach($result_all as $row){
                            echo "<option value=".$row[0].">".$row[1]."</option>";
                        }
                        ?>
                    </select>
                    <?php echo '<a href="#" class="btn-filter">Chọn</a>'; ?>
                       </div>

                    <span>Chọn Tên Danh mục muốn xóa</span>
                    <div class="wrap-input">   
                       <select name="category_id" class="detele-catalog-list select-none-chilrent">

                       </select>
                        <input name="detele_category" class="btn" type="submit" value="Xác Nhận Xóa">
                    </div>
                </form>
            </div>
            <div class="body-add-category">
                <form action="./add_category.php" method="post" class="group-input">
                    <div class="wrap-input">
                       <span>Chọn danh sách danh mục: </span>
                       <select name="value_select" class="select_catalog_list select-none-parent">
                       <?php 
                        foreach($result_all as $row){
                            echo "<option value=".$row[0].">".$row[1]."</option>";
                        }
                        ?>
                        </select>
                       </div>
                    <span>Chọn Tên Danh mục muốn sửa</span>
                    <div class="wrap-input">
                       <select name="category_id" class="detele-catalog-list select-none-chilrent">
                       <?php
                         foreach($result_all_2 as $row){
                            echo "<option value=".$row[0].">".$row[1]."</option>";
                        }
                        ?>
                       </select>
                    </div>
                    <div class="wrap-input">
                        <input name="name_category" type="text" class="input" placeholder="Nhập vào tên mới ..">
                        <input name="change_category" class="btn" type="submit" value="Thay Đổi">
                    </div>
                </form>
            </div>
            <div class="body-add-category body-add-room">
                <form action="./add_category.php" method="post" class="group-input">
                    <span>Nhập Tên Phòng</span>
                    <div class="wrap-input">
                        <input name="name_catalog_list" class="input" type="text" placeholder="Nhập tên phòng ...">
                        <input name="add_catalog_list" class="btn" type="submit" value="Xác Nhận">
                    </div>
                </form>
            </div>
            <div class="body-add-category body-add-room">
                <form action="./add_category.php" method="post" class="group-input">
                    <span>Chọn Tên Phòng muốn xóa</span>
                    <div class="wrap-input">
                       <select name="select_value" class="detele-catalog-list">
                        <option value="">chon 1</option>
                        <option value="">chon 1</option>
                        <option value="">chon 1</option>
                       </select>
                        <input name="add_catalog_list" class="btn" type="submit" value="Xác Nhận Xóa">
                    </div>
                </form>
            </div>
            <div class="body-add-category body-add-room">
                <form action="./add_category.php" method="post" class="group-input">
                    <span>Chọn Tên Phòng muốn sửa</span>
                    <div class="wrap-input">
                       <select name="select_value" class="detele-catalog-list">
                        <option value="">chon 1</option>
                        <option value="">chon 1</option>
                        <option value="">chon 1</option>
                       </select>
                    </div>
                    <div class="wrap-input">
                        <input name="change_catalog_list" class="input" type="text" placeholder="Nhap vào tên mới ....">
                        <input name="add_catalog_list" class="btn" type="submit" value="Thay đổi">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="./assets/javascript/admin.js"></script>
</html>