

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

// $sql = "SELECT * FROM student";

$sql = "SELECT 'name_catalog_list' FROM `catalog_list` where 1 ";

$result=$conn->query($sql);
var_dump($result)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="./assets/css/admin.css">
    <link rel="stylesheet" href="./assets/css/app.css">
</head>
<body>
    <header>Admin</header>
    <div class="warp">
        <div class="left-side">
        <div class="top"><ion-icon name="grid-outline"></ion-icon><h3 class="title-menu">Danh muc san pham</h3></div>
        <ul class="menu">
            <li class="menu-items">
                <p>Danh Mục</p>
                <div class="category">
                    <div class="category-items">Thêm danh sách danh mục</div>
                    <div class="category-items">Thêm danh mục</div>
                </div>
            </li> 
            <li class="menu-items">
                <p>Phòng</p>
                <div class="category">
                    <div class="category-items">Thêm phòng</div>
                </div>
            </li> 
            <li class="menu-items">
                <p>Sản phẩm</p>
                <div class="category">
                    <div class="category-items">Thêm sản phẩm</div>
                </div>
            </li> 
        </ul>
        <div class="menu add-category">

        </div>
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
                    <select name="value_select" id="">
                        <option value=""></option>
                    </select>
                    <span>Nhập Tên danh mục</span>
                    <div class="wrap-input">
                        <input name="name_category" class="input" type="text" placeholder="Nhập tên danh mục ...">
                        <input name="add_category" class="btn" type="submit" value="Xác Nhận">
                    </div>
                </form>
            </div>
            <div class="body-add-category">
                <form action="#" class="group-input">
                    <span>Nhập tên phòng</span>
                    <div class="wrap-input">
                        <input class="input" type="text" placeholder="Nhập tên danh mục ...">
                        <input class="btn" type="submit" value="Xác Nhận">
                    </div>
                </form>
            </div>
            <div class="body-add-category">
                <form action="#" class="group-input">
                    <span>Nhập Thông tin sản phẩm</span>
                    <div class="wrap-input">
                        <input class="input" type="text" placeholder="Nhập tên danh mục ...">
                        <input class="btn" type="submit" value="Xác Nhận">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="./assets/javascript/admin.js"></script>
</html>