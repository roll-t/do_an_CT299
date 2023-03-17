<?php
include './connect.php';
$sql = "SELECT * FROM `nhom_danhmuc` where 1 ";

$result=$conn->query($sql);

$result_all=$result->fetch_all(); 
?>
<!DOCTYPE html>
<html lang="en">
    <?php include './head.php' ?>
    <link rel="stylesheet" href="./assets/css/slied-1.css">
<body>
    <div class="wrapper">
        <header id="top" class="header header-home">
            <?php include './header.php' ?>
            <div class="list-banner">
                <div  class="banner">
                    <div class="left-banner">
                        <div class="title">
                            <h3>Great Design Collection</h3>
                            <h2>Cloth Covered Accent Chair</h2>
                        </div>
                        <p class="text">
                            Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit, Sed Do Eiuiana Smod Tempor Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip.
                        </p>
                        <div class="price">
                            <span>----</span>
                            <div class="new-price"><p>$</p>299.00 </div>
                            <div class="old-price"><p>$</p>399.00 </div>
                        </div>
                        <div class="button">
                            <div class="btn add-btn"><ion-icon name="add-circle-outline"></ion-icon><p>Add cart</p></div>
                            <div class="btn see-more-btn">More info</div>
                        </div>
                    </div>
                    <div class="right-banner">
                        <div class="img-product">
                            <img src="./images/slider/slider2.png" alt="">
                        </div>
                    </div>
                </div>
                <div  class="banner">
                    <div class="left-banner">
                        <div class="title">
                            <h3>Great Design Collection</h3>
                            <h2>Cloth Covered Accent Chair</h2>
                        </div>
                        <p class="text">
                            Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit, Sed Do Eiuiana Smod Tempor Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip.
                        </p>
                        <div class="price">
                            <span>----</span>
                            <div class="new-price"><p>$</p>299.00 </div>
                            <div class="old-price"><p>$</p>399.00 </div>
                        </div>
                        <div class="button">
                            <div class="btn add-btn"><ion-icon name="add-circle-outline"></ion-icon><p>Add cart</p></div>
                            <div class="btn see-more-btn">More info</div>
                        </div>
                    </div>
                    <div class="right-banner">
                        <div class="img-product">
                            <img src="./images/slider/slider3.png" alt="">
                        </div>
                    </div>
                </div>
                <div  class="banner">
                    <div class="left-banner">
                        <div class="title">
                            <h3>Great Design Collection</h3>
                            <h2>Cloth Covered Accent Chair</h2>
                        </div>
                        <p class="text">
                            Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit, Sed Do Eiuiana Smod Tempor Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip.
                        </p>
                        <div class="price">
                            <span>----</span>
                            <div class="new-price"><p>$</p>299.00 </div>
                            <div class="old-price"><p>$</p>399.00 </div>
                        </div>
                        <div class="button">
                            <div class="btn add-btn"><ion-icon name="add-circle-outline"></ion-icon><p>Add cart</p></div>
                            <div class="btn see-more-btn">More info</div>
                        </div>
                    </div>
                    <div class="right-banner">
                        <div class="img-product">
                            <img src="./images/slider/slider1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="btn-control">
            <ion-icon class="btn_prve" name="chevron-back-outline"></ion-icon>
            <ion-icon class="btn_next" name="chevron-forward-outline"></ion-icon>
        </div>
    <div class="container">
        <div class="body-1">
            <div class="intro">
                <div class="top-intro">
                    <img src="./images/populer-products/p1.png" alt="">
                </div>
                <h3>Arm Chair</h3>
                <p>Nemo enim ipsam voluptatem quia volu ptas sit asperna aut odit aut</p>
            </div>
            <div class="intro product">
                <div class="top-intro">
                    <img src="./images/populer-products/p2.png" alt="">
                </div>
                <div class="content-product">
                    <h3>Latest Designed Stool and Chair</h3>
                    <p>Edi Ut Perspiciatis Unde Omnis Iste Natusina Error Sit Voluptatem Accusantium Doloret Mque Laudantium, Totam Rem Aperiam.</p>
                    <div class="sale"><p>Sales Start from: </p><span>$</span><p>99.00</p></div>
                    <div class="button">Discover More</div>
                </div>
            </div>
            <div class="intro">
                <div class="top-intro">
                    <img src="./images/populer-products/p3.png" alt="">
                </div>
                <h3>Hanging Lamp</h3>
                <p>Nemo enim ipsam voluptatem quia volu ptas sit asperna aut odit aut</p>
            </div>
        </div>
        <div  id="new-arrival" class="body-2">
            <h2 class="title">New Arrivals</h2>
            <ul class="list-product">
                <?php 
                for($i=1;$i<=8;$i++){
                   echo ' <li class="product-items">
                        <div class="top-product">
                            <img src="./images/list-product/102411-sofa-elegance-mau-den-da-brown-2_1-768x511.jpg" alt="">
                            <img src="./images/room/phong_khach.png" alt="" class="img-zoom">
                            <div class="add-cart">
                                <div class="left-add">
                                    <ion-icon name="cart-outline"></ion-icon>
                                    <p>Add to cart</p>
                                </div>
                                <div class="right-add">
                                    <ion-icon name="heart-outline"></ion-icon>
                                    <ion-icon name="expand-outline"></ion-icon>
                                </div>
                            </div>
                            <div class="texture"></div>
                            <div class="sale-ticker">
                                Sale
                            </div>
                        </div>
    
                        <div class="product-content">
                            <h3 class="name-product">Wooden Chair</h3>
                            <div class="product-price"><span>$</span><p>65.00</p></div>
                        </div>
                    </li>';
                }
                ?>
            </ul>
        <div class="button-see-more">
            <a href="./product.php">See more</a>
        </div>
        </div>
        <div class="body-3">
            <div class="slide-background">
                <div class="container">
                    <div id="slide">
                        <div class="item" style="background-image: url(./images/demo-body-3/img-1.png);">
                            <div class="content">
                                <div class="name">INTERIOR</div>
                                <div class="des">Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit, Sed Do Eiuiana Smod Tempor Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip.</div>
                                <button>See more</button>
                            </div>
                        </div>
                        <div class="item" style="background-image: url(./images/demo-body-3/img-2.png);">
                            <div class="content">
                                <div class="name">INTERIOR</div>
                                <div class="des">Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit, Sed Do Eiuiana Smod Tempor Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip.</div>
                                <button>See more</button>
                            </div>
                        </div>
                        <div class="item" style="background-image: url(./images/demo-body-3/img-3.png);">
                            <div class="content">
                                <div class="name">INTERIOR</div>
                                <div class="des">Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit, Sed Do Eiuiana Smod Tempor Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip.</div>
                                <button>See more</button>
                            </div>
                        </div>
                        <div class="item" style="background-image: url(./images/demo-body-3/img-4png);">
                            <div class="content">
                                <div class="name">INTERIOR</div>
                                <div class="des">Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit, Sed Do Eiuiana Smod Tempor Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip.</div>
                                <button>See more</button>
                            </div>
                        </div>
                        <div class="item" style="background-image: url(./images/demo-body-3/img-5.png);">
                            <div class="content">
                                <div class="name">INTERIOR</div>
                                <div class="des">Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit, Sed Do Eiuiana Smod Tempor Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip.</div>
                                <button>See more</button>
                            </div>
                        </div>
                        <div class="item" style="background-image: url(./images/demo-body-3/img-6.png);">
                            <div class="content">
                                <div class="name">INTERIOR</div>
                                <div class="des">Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit, Sed Do Eiuiana Smod Tempor Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip.</div>
                                <button>See more</button>
                            </div>
                        </div>
                    </div>
                    <div class="buttons">
                        <button id="prev" class="btn-prev"><ion-icon name="chevron-back-outline"></ion-icon></button>
                        <button id="next" class="btn-next"><ion-icon name="chevron-forward-outline"></ion-icon></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div id="feature" class="body-4">
            <h2 class="title">
                Featured Products
            </h2>
            <ul class="list-product">
                <div class="product-items">
                    <div class="top-product">
                        <img src="./images/features/f1.jpg" alt="">
                    </div>
                    <div class="product-content">
                        <div class="start"><ul>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </ul>
                        <p>(45 Review)</p>
                    </div>
                    <h3 class="name-product">
                        Designed Sofa
                    </h3>
                    <div class="product-price">
                        <span>$</span><span>200.00</span>
                    </div>
                    </div>
                </div>
                <div class="product-items">
                    <div class="top-product">
                        <img src="./images/features/f4.jpg" alt="">
                    </div>
                    <div class="product-content">   
                        <div class="start"><ul>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </ul>
                        <p>(45 Review)</p>
                    </div>
                    <h3 class="name-product">
                        Designed Sofa
                    </h3>
                    <div class="product-price">
                        <span>$</span><span>200.00</span>
                    </div>
                    </div>
                </div>
                <div class="product-items">
                    <div class="top-product">
                        <img src="./images/features/f2.jpg" alt="">
                    </div>
                    <div class="product-content">
                        <div class="start"><ul>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </ul>
                        <p>(45 Review)</p>
                    </div>
                    <h3 class="name-product">
                        Designed Sofa
                    </h3>
                    <div class="product-price">
                        <span>$</span><span>200.00</span>
                    </div>
                    </div>
                </div>
                <div class="product-items">
                    <div class="top-product">
                        <img src="./images/features/f3.jpg" alt="">
                    </div>
                    <div class="product-content">
                        <div class="start"><ul>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </ul>
                        <p>(45 Review)</p>
                    </div>
                    <h3 class="name-product">
                        Designed Sofa
                    </h3>
                    <div class="product-price">
                        <span>$</span><span>200.00</span>
                    </div>
                    </div>
                </div>
            </ul>
        </div>
        <div id="blog" class="body-5">
            <h2 class="title">
                Latest Blog
            </h2>
            <ul class="list-blog">
                <li class="blog-items">
                    <div class="top-blog">
                        <img src="./images/blog/b3.jpg" alt="">
                        <div class="texture"></div>
                    </div>
                    <div class="blog-content">
                        <div class="title-blog">
                            Why Brands are Looking at Local Language
                        </div>
                        <div class="date-blog">
                            By Robert Norby / 18th March 2018
                        </div>
                        <p class="text-blog">
                            Nemo Enim Ipsam Voluptatem Quia Voluptas Sit Aspernatur Aut Odit Aut Fugit, Sed Quia Consequuntur Magni Dolores Eos Qui Ratione Voluptatem Sequi Nesciunt....
                        </p>
                    </div>
                </li>
                <li class="blog-items">
                    <div class="top-blog">
                        <img src="./images/blog/b2.jpg" alt="">
                        <div class="texture"></div>
                    </div>
                    <div class="blog-content">
                        <div class="title-blog">
                            Why Brands are Looking at Local Language
                        </div>
                        <div class="date-blog">
                            By Robert Norby / 18th March 2018
                        </div>
                        <p class="text-blog">
                            Nemo Enim Ipsam Voluptatem Quia Voluptas Sit Aspernatur Aut Odit Aut Fugit, Sed Quia Consequuntur Magni Dolores Eos Qui Ratione Voluptatem Sequi Nesciunt....
                        </p>
                    </div>
                </li>
                <li class="blog-items">
                    <div class="top-blog">
                        <img src="./images/blog/b1.jpg" alt="">
                        <div class="texture"></div>
                    </div>
                    <div class="blog-content">
                        <div class="title-blog">
                            Why Brands are Looking at Local Language
                        </div>
                        <div class="date-blog">
                            By Robert Norby / 18th March 2018
                        </div>
                        <p class="text-blog">
                            Nemo Enim Ipsam Voluptatem Quia Voluptas Sit Aspernatur Aut Odit Aut Fugit, Sed Quia Consequuntur Magni Dolores Eos Qui Ratione Voluptatem Sequi Nesciunt....
                        </p>
                    </div>
                </li>
            </ul>
        </div>
        <?php include './footer.php' ?>
    </div>
</div>
<a href="#top" class="go-to-top"><ion-icon name="chevron-up-outline"></ion-icon></a>
</body>
<script src="./assets/javascript/slide-1.js"></script>
<script src="./assets/javascript/show-search.js"></script>
<script src="./assets/javascript/sticky-header.js"></script>
<script src="./assets/javascript/slide-banner.js"></script>
<script src="./assets/javascript/cr-menu-item.js"></script>
<script src="./assets/javascript/show-left-meu.js"></script>
<script src="./assets/javascript/cart.js"></script>
</html>