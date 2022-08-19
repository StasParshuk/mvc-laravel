
@extends('layouts.main')

@section('content')

    <main class="overflow-hidden ">
        <!--Start Breadcrumb Style2-->
        <div class="breadcrumb-area" style="background-image: url(assets/images/inner-pages/breadcum-bg.png);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-content pb-60 text-center wow fadeInUp animated">
                            <h2>Shop Grid</h2>
                            <div class="breadcrumb-menu">
                                <ul>
                                    <li><a href="index.html"><i class="flaticon-home pe-2"></i>Home</a></li>
                                    <li> <i class="flaticon-next"></i> </li>
                                    <li class="active">Shop Grid</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Breadcrumb Style2-->
        <!--Start Product Categories One-->
        <section class="product-categories-one pb-60">
            <div class="container">
                <div class="row wow fadeInUp animated">
                    <div class="col-xl-12">
                        <div class="product-categories-one__inner">
                            <ul>
                                <li> <a href="#0" class="img-box">
                                        <div class="inner"> <img src="assets/images/shop/product-categories-v1-img1.png" alt=""> </div>
                                    </a>
                                    <div class="title"> <a href="#0">
                                            <h6>Accessories</h6>
                                        </a> </div>
                                </li>
                                <li> <a href="#0" class="img-box">
                                        <div class="inner"> <img src="assets/images/shop/product-categories-v1-img2.png" alt=""> </div>
                                    </a>
                                    <div class="title"> <a href="#0">
                                            <h6>Furnitures</h6>
                                        </a> </div>
                                </li>
                                <li> <a href="#0" class="img-box">
                                        <div class="inner"> <img src="assets/images/shop/product-categories-v1-img3.png" alt=""> </div>
                                    </a>
                                    <div class="title"> <a href="#0">
                                            <h6>Jewellery</h6>
                                        </a> </div>
                                </li>
                                <li> <a href="#0" class="img-box">
                                        <div class="inner"> <img src="assets/images/shop/product-categories-v1-img4.png" alt=""> </div>
                                    </a>
                                    <div class="title"> <a href="#0">
                                            <h6>Shoes</h6>
                                        </a> </div>
                                </li>
                                <li> <a href="#0" class="img-box">
                                        <div class="inner"> <img src="assets/images/shop/product-categories-v1-img5.png" alt=""> </div>
                                    </a>
                                    <div class="title"> <a href="#0">
                                            <h6>Electronics</h6>
                                        </a> </div>
                                </li>
                                <li> <a href="#0" class="img-box">
                                        <div class="inner"> <img src="assets/images/shop/product-categories-v1-img6.png" alt=""> </div>
                                    </a>
                                    <div class="title"> <a href="#0">
                                            <h6>Fashion</h6>
                                        </a> </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Product Categories One-->
        <!--Start product-grid-->
        <div class="product-grid pt-60 pb-120">
            <div class="container">
                <div class="row gx-4">
                    <div class="col-xl-3 col-lg-4">
                        <div class="shop-grid-sidebar"> <button class="remove-sidebar d-lg-none d-block"> <i class="flaticon-cross"> </i> </button>
                            <div class="sidebar-holder">
                                <form action="#0" class="footer-default__subscrib-form m-0 p-0 wow fadeInUp animated">
                                    <div class="footer-input-box p-0 "> <input type="email" placeholder="Email address" name="email"> <button type="submit" class="subscribe_btn"> <i class="flaticon-magnifying-glass"></i> </button> </div>
                                </form>
                                <div class="single-sidebar-box mt-30 wow fadeInUp animated ">
                                    <h4>Select Categories</h4>
                                    <div class="checkbox-item">
                                        <form>
                                            <div class="form-group"> <input type="checkbox" id="bedroom"> <label for="bedroom">Bedroom</label> </div>
                                            <div class="form-group"> <input type="checkbox" id="decoration"> <label for="decoration">Decoration</label> </div>
                                            <div class="form-group"> <input type="checkbox" id="kitchen"> <label for="kitchen">Kitchen</label> </div>
                                            <div class="form-group"> <input type="checkbox" id="clothing"> <label for="clothing">Clothing</label> </div>
                                            <div class="form-group"> <input type="checkbox" id="office"> <label for="office">Office</label> </div>
                                            <div class="form-group m-0"> <input type="checkbox" id="lighting"> <label for="lighting">Lighting</label> </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="single-sidebar-box mt-30 wow fadeInUp animated">
                                    <h4>Color Option </h4>
                                    <ul class="color-option">
                                        <li> <a href="#0" class="color-option-single"> <span> Black</span> </a> </li>
                                        <li> <a href="#0" class="color-option-single bg2"> <span> Yellow</span> </a>
                                        </li>
                                        <li> <a href="#0" class="color-option-single bg3"> <span> Red</span> </a> </li>
                                        <li> <a href="#0" class="color-option-single bg4"> <span> Blue</span> </a> </li>
                                        <li> <a href="#0" class="color-option-single bg5"> <span> Green</span> </a>
                                        </li>
                                        <li> <a href="#0" class="color-option-single bg6"> <span> Olive</span> </a>
                                        </li>
                                        <li> <a href="#0" class="color-option-single bg7"> <span> Lime</span> </a> </li>
                                        <li> <a href="#0" class="color-option-single bg8"> <span> Pink</span> </a> </li>
                                        <li> <a href="#0" class="color-option-single bg9"> <span> Cyan</span> </a> </li>
                                        <li> <a href="#0" class="color-option-single bg10"> <span> Magenta</span> </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="single-sidebar-box mt-30 wow fadeInUp animated">
                                    <h4>Filter By Price</h4>
                                    <div class="slider-box">
                                        <div id="price-range" class="slider"></div>
                                        <div class="output-price"> <label for="priceRange">Price:</label> <input type="text" id="priceRange" readonly=""> </div> <button class="filterbtn" type="submit"> Filter </button>
                                    </div>
                                </div>
                                <div class="single-sidebar-box mt-30 wow fadeInUp animated pb-0 border-bottom-0 ">
                                    <h4>Tags </h4>
                                    <ul class="popular-tag">
                                        <li><a href="#0">Tools</a></li>
                                        <li><a href="#0">Store</a></li>
                                        <li><a href="#0">Decoration</a></li>
                                        <li><a href="#0">Online</a></li>
                                        <li><a href="#0">Furnitures</a></li>
                                        <li><a href="#0">Beauty</a></li>
                                        <li><a href="#0">Fashion</a></li>
                                        <li><a href="#0">Office</a></li>
                                        <li><a href="#0">Clothing</a></li>
                                        <li><a href="#0">Interior</a></li>
                                        <li><a href="#0">Good</a></li>
                                        <li><a href="#0">Standard</a></li>
                                        <li><a href="#0">Chair’s</a></li>
                                        <li><a href="#0">Living Room</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="shop-grid-page-top-info p-0 justify-content-md-between justify-content-center">
                                    <div class="left-box wow fadeInUp animated">
                                        <p>Showing 1–12 of 50 Results</p>
                                    </div>
                                    <div class="right-box justify-content-md-between justify-content-center wow fadeInUp animated">
                                        <div class="short-by">
                                            <div class="select-box">
                                                <select class="wide">
                                                    <option data-display="Short by latest">Featured </option>
                                                    <option value="1">Best selling </option>
                                                    <option value="2">Alphabetically, A-Z</option>
                                                    <option value="3">Alphabetically, Z-A</option>
                                                    <option value="3">Price, low to high</option>
                                                    <option value="3">Price, high to low</option>
                                                    <option value="3">Date, old to new</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="product-view-style d-flex justify-content-md-between justify-content-center">
                                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="pills-grid-tab" data-bs-toggle="pill" data-bs-target="#pills-grid" type="button" role="tab" aria-selected="true">
                                                        <i class="flaticon-grid"></i>
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-list-tab" data-bs-toggle="pill" data-bs-target="#pills-list" type="button" role="tab" aria-selected="false">
                                                        <i class="flaticon-list"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                            <button class="slidebarfilter d-lg-none d-flex"><i class="flaticon-edit"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-grid" role="tabpanel" aria-labelledby="pills-grid-tab">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-6 col-6 ">
                                                <div class="products-three-single w-100  mt-30">
                                                    <div class="products-three-single-img"> <a href="shop-details-3.html" class="d-block"> <img src="assets/images/home-three/productss2-1.jpg" class="first-img" alt=""> <img src="assets/images/home-three/productss2-hover-1.png" alt="" class="hover-img">
                                                        </a>
                                                        <div class="products-grid-one__badge-box"> <span class="bg_base badge new ">New</span>
                                                        </div> <a href="cart.html" class="addcart btn--primary style2">
                                                            Add To Cart </a>
                                                        <div class="products-grid__usefull-links">
                                                            <ul>
                                                                <li><a href="wishlist.html"> <i class="flaticon-heart">
                                                                        </i> <span>
                                                                            wishlist</span> </a> </li>
                                                                <li><a href="compare.html"> <i class="flaticon-left-and-right-arrows"></i>
                                                                        <span>
                                                                            compare</span> </a> </li>
                                                                <li><a href="#popup5" class="popup_link"> <i class="flaticon-visibility"></i>
                                                                        <span> quick view</span>
                                                                    </a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div id="popup5" class="product-gird__quick-view-popup mfp-hide">
                                                        <div class="container">
                                                            <div class="row justify-content-between align-items-center">
                                                                <div class="col-lg-6">
                                                                    <div class="quick-view__left-content">
                                                                        <div class="tabs">
                                                                            <div class="popup-product-thumb-box">
                                                                                <ul>
                                                                                    <li class="tab-nav popup-product-thumb">
                                                                                        <a href="#tabb1">
                                                                                            <img src="assets/images/shop/products-v6-img5.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tabb2">
                                                                                            <img src="assets/images/shop/products-v6-img6.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tabb3">
                                                                                            <img src="assets/images/shop/products-v6-img7.jpg" alt=""> </a> </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="popup-product-main-image-box">
                                                                                <div id="tabb1" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/products-v6-img5.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tabb2" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/products-v6-img6.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tabb3" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/products-v6-img7.jpg" alt=""> </div>
                                                                                </div> <button class="prev"> <i class="flaticon-back"></i>
                                                                                </button> <button class="next"> <i class="flaticon-next"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="popup-right-content">
                                                                        <h3>Brown Office Shoe</h3>
                                                                        <div class="ratting"> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                                            <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                                            <span>(112)</span> </div>
                                                                        <p class="text"> Hydrating Plumping Intense
                                                                            Shine Lip Colour
                                                                        </p>
                                                                        <div class="price">
                                                                            <h2> $42 USD <del> $65 USD</del></h2>
                                                                            <h6> In stuck</h6>
                                                                        </div>
                                                                        <div class="color-varient"> <a href="#0" class="color-name pink">
                                                                                <span>Pink</span> </a> <a href="#0" class="color-name red">
                                                                                <span>Red</span> </a>
                                                                            <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                                            </a> <a href="#0" class="color-name blue">
                                                                                <span>Blue</span>
                                                                            </a> <a href="#0" class="color-name black">
                                                                                <span>Black</span> </a> </div>
                                                                        <div class="add-product">
                                                                            <h6>Qty:</h6>
                                                                            <div class="button-group">
                                                                                <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i class="flaticon-minus"></i>
                                                                                    </span> <input type="number" class="qtyValue" value="1">
                                                                                    <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                                                    </span> </div>
                                                                                <button class="btn--primary "> Add to
                                                                                    Cart </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="payment-method"> <a href="#0"> <img src="assets/images/payment_method/method_1.png" alt=""> </a>
                                                                            <a href="#0"> <img src="assets/images/payment_method/method_2.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_3.png" alt=""> </a>
                                                                            <a href="#0"> <img src="assets/images/payment_method/method_4.png" alt=""> </a> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="products-three-single-content text-center"> <span>Men
                                                            Shoes</span>
                                                        <h5><a href="shop-details-3.html"> Trendy stylish shoes </a>
                                                        </h5>
                                                        <p><del>$200.00</del> $159.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-6 ">
                                                <div class="products-three-single  w-100  ">
                                                    <div class="products-three-single-img">
                                                        <a href="shop-details-3.html" class="d-block">
                                                            <img src="assets/images/home-three/productss2-hover-2.png" class="first-img" alt="">
                                                            <img src="assets/images/home-three/productss2-2.jpg" alt="" class="hover-img">
                                                        </a>
                                                        <div class="products-grid-one__badge-box"> <span class="bg_black badge discount">-70%</span> </div> <a href="cart.html" class="addcart btn--primary style2"> Add To
                                                            Cart </a>
                                                        <div class="products-grid__usefull-links">
                                                            <ul>
                                                                <li><a href="wishlist.html"> <i class="flaticon-heart">
                                                                        </i> <span>
                                                                            wishlist</span> </a> </li>
                                                                <li><a href="compare.html"> <i class="flaticon-left-and-right-arrows"></i>
                                                                        <span>
                                                                            compare</span> </a> </li>
                                                                <li><a href="#popup6" class="popup_link"> <i class="flaticon-visibility"></i>
                                                                        <span> quick view</span>
                                                                    </a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div id="popup6" class="product-gird__quick-view-popup mfp-hide">
                                                        <div class="container">
                                                            <div class="row justify-content-between align-items-center">
                                                                <div class="col-lg-6">
                                                                    <div class="quick-view__left-content">
                                                                        <div class="tabs">
                                                                            <div class="popup-product-thumb-box">
                                                                                <ul>
                                                                                    <li class="tab-nav popup-product-thumb">
                                                                                        <a href="#tabb11">
                                                                                            <img src="assets/images/shop/products-v6-img6.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tabb22">
                                                                                            <img src="assets/images/shop/products-v6-img7.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tabb33">
                                                                                            <img src="assets/images/shop/products-v6-img8.jpg" alt=""> </a> </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="popup-product-main-image-box">
                                                                                <div id="tabb11" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/products-v6-img6.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tabb22" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/products-v6-img7.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tabb33" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/products-v6-img8.jpg" alt=""> </div>
                                                                                </div> <button class="prev"> <i class="flaticon-back"></i>
                                                                                </button> <button class="next"> <i class="flaticon-next"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="popup-right-content">
                                                                        <h3>Brown Office Shoe</h3>
                                                                        <div class="ratting"> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                                            <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                                            <span>(112)</span> </div>
                                                                        <p class="text"> Hydrating Plumping Intense
                                                                            Shine Lip Colour
                                                                        </p>
                                                                        <div class="price">
                                                                            <h2> $42 USD <del> $65 USD</del></h2>
                                                                            <h6> In stuck</h6>
                                                                        </div>
                                                                        <div class="color-varient"> <a href="#0" class="color-name pink">
                                                                                <span>Pink</span> </a> <a href="#0" class="color-name red">
                                                                                <span>Red</span> </a>
                                                                            <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                                            </a> <a href="#0" class="color-name blue">
                                                                                <span>Blue</span>
                                                                            </a> <a href="#0" class="color-name black">
                                                                                <span>Black</span> </a> </div>
                                                                        <div class="add-product">
                                                                            <h6>Qty:</h6>
                                                                            <div class="button-group">
                                                                                <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i class="flaticon-minus"></i>
                                                                                    </span> <input type="number" class="qtyValue" value="1">
                                                                                    <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                                                    </span> </div>
                                                                                <button class="btn--primary "> Add to
                                                                                    Cart </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="payment-method"> <a href="#0"> <img src="assets/images/payment_method/method_1.png" alt=""> </a>
                                                                            <a href="#0"> <img src="assets/images/payment_method/method_2.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_3.png" alt=""> </a>
                                                                            <a href="#0"> <img src="assets/images/payment_method/method_4.png" alt=""> </a> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="products-three-single-content text-center"> <span>Men
                                                            Shoes</span>
                                                        <h5><a href="shop-details-3.html">Exclusive Sneakers </a></h5>
                                                        <p>$159.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-6 ">
                                                <div class="products-three-single  w-100 ">
                                                    <div class="products-three-single-img">
                                                        <a href="shop-details-3.html" class="d-block">
                                                            <img src="assets/images/home-three/productss2-3.jpg" alt="">
                                                        </a>

                                                        <a href="cart.html" class="addcart btn--primary style2">
                                                            Add To Cart
                                                        </a>
                                                        <div class="products-grid__usefull-links">
                                                            <ul>
                                                                <li><a href="wishlist.html"> <i class="flaticon-heart">
                                                                        </i> <span>
                                                                            wishlist</span> </a> </li>
                                                                <li><a href="compare.html"> <i class="flaticon-left-and-right-arrows"></i>
                                                                        <span>
                                                                            compare</span> </a> </li>
                                                                <li><a href="#popup7" class="popup_link"> <i class="flaticon-visibility"></i>
                                                                        <span> quick view</span>
                                                                    </a> </li>
                                                            </ul>
                                                        </div>
                                                        <div id="popup7" class="product-gird__quick-view-popup mfp-hide">
                                                            <div class="container">
                                                                <div class="row justify-content-between align-items-center">
                                                                    <div class="col-lg-6">
                                                                        <div class="quick-view__left-content">
                                                                            <div class="tabs">
                                                                                <div class="popup-product-thumb-box">
                                                                                    <ul>
                                                                                        <li class="tab-nav popup-product-thumb">
                                                                                            <a href="#tabb111"> <img src="assets/images/shop/products-v6-img7.jpg" alt=""> </a> </li>
                                                                                        <li class="tab-nav popup-product-thumb ">
                                                                                            <a href="#tabb222"> <img src="assets/images/shop/products-v6-img8.jpg" alt=""> </a> </li>
                                                                                        <li class="tab-nav popup-product-thumb ">
                                                                                            <a href="#tabb333"> <img src="assets/images/shop/products-v6-img9.jpg" alt=""> </a> </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="popup-product-main-image-box">
                                                                                    <div id="tabb111" class="tab-item popup-product-image">
                                                                                        <div class="popup-product-single-image">
                                                                                            <img src="assets/images/shop/products-v6-img7.jpg" alt=""> </div>
                                                                                    </div>
                                                                                    <div id="tabb222" class="tab-item popup-product-image">
                                                                                        <div class="popup-product-single-image">
                                                                                            <img src="assets/images/shop/products-v6-img8.jpg" alt=""> </div>
                                                                                    </div>
                                                                                    <div id="tabb333" class="tab-item popup-product-image">
                                                                                        <div class="popup-product-single-image">
                                                                                            <img src="assets/images/shop/products-v6-img9.jpg" alt=""> </div>
                                                                                    </div> <button class="prev"> <i class="flaticon-back"></i>
                                                                                    </button> <button class="next"> <i class="flaticon-next"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="popup-right-content">
                                                                            <h3>Brown Office Shoe</h3>
                                                                            <div class="ratting"> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                                                <span>(112)</span> </div>
                                                                            <p class="text"> Hydrating Plumping Intense
                                                                                Shine Lip Colour
                                                                            </p>
                                                                            <div class="price">
                                                                                <h2> $42 USD <del> $65 USD</del></h2>
                                                                                <h6> In stuck</h6>
                                                                            </div>
                                                                            <div class="color-varient"> <a href="#0" class="color-name pink">
                                                                                    <span>Pink</span> </a> <a href="#0" class="color-name red">
                                                                                    <span>Red</span>
                                                                                </a> <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                                                </a>
                                                                                <a href="#0" class="color-name blue">
                                                                                    <span>Blue</span>
                                                                                </a> <a href="#0" class="color-name black">
                                                                                    <span>Black</span> </a> </div>
                                                                            <div class="add-product">
                                                                                <h6>Qty:</h6>
                                                                                <div class="button-group">
                                                                                    <div class="qtySelector text-center">
                                                                                        <span class="decreaseQty"><i class="flaticon-minus"></i>
                                                                                        </span>
                                                                                        <input type="number" class="qtyValue" value="1"> <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                                                        </span>
                                                                                    </div> <button class="btn--primary "> Add to
                                                                                        Cart
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="payment-method"> <a href="#0">
                                                                                    <img src="assets/images/payment_method/method_1.png" alt="">
                                                                                </a> <a href="#0"> <img src="assets/images/payment_method/method_2.png" alt="">
                                                                                </a> <a href="#0"> <img src="assets/images/payment_method/method_3.png" alt="">
                                                                                </a> <a href="#0"> <img src="assets/images/payment_method/method_4.png" alt="">
                                                                                </a> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="products-three-single-content text-center"> <span>Men
                                                            Shoes</span>
                                                        <h5><a href="shop-details-3.html">Fashionable Sneakers </a></h5>
                                                        <p><del>$200.00</del> $159.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-6 ">
                                                <div class="products-three-single  w-100 ">
                                                    <div class="products-three-single-img"> <a href="shop-details-3.html" class="d-block"> <img src="assets/images/home-three/productss2-4.jpg" alt="">
                                                        </a>
                                                        <div class="products-grid-one__badge-box"> <span class="bg_black badge discount">-10%</span> </div> <a href="cart.html" class="addcart btn--primary style2"> Add To
                                                            Cart </a>
                                                        <div class="products-grid__usefull-links">
                                                            <ul>
                                                                <li><a href="wishlist.html"> <i class="flaticon-heart">
                                                                        </i> <span>
                                                                            wishlist</span> </a> </li>
                                                                <li><a href="compare.html"> <i class="flaticon-left-and-right-arrows"></i>
                                                                        <span>
                                                                            compare</span> </a> </li>
                                                                <li><a href="#popup8" class="popup_link"> <i class="flaticon-visibility"></i>
                                                                        <span> quick view</span>
                                                                    </a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div id="popup8" class="product-gird__quick-view-popup mfp-hide">
                                                        <div class="container">
                                                            <div class="row justify-content-between align-items-center">
                                                                <div class="col-lg-6">
                                                                    <div class="quick-view__left-content">
                                                                        <div class="tabs">
                                                                            <div class="popup-product-thumb-box">
                                                                                <ul>
                                                                                    <li class="tab-nav popup-product-thumb">
                                                                                        <a href="#tabb1111"> <img src="assets/images/shop/products-v6-img9.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tabb2222"> <img src="assets/images/shop/products-v6-img9.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tabb3333"> <img src="assets/images/shop/products-v6-img10.jpg" alt=""> </a> </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="popup-product-main-image-box">
                                                                                <div id="tabb1111" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/products-v6-img8.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tabb2222" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/products-v6-img9.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tabb3333" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/products-v6-img10.jpg" alt=""> </div>
                                                                                </div> <button class="prev"> <i class="flaticon-back"></i>
                                                                                </button> <button class="next"> <i class="flaticon-next"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="popup-right-content">
                                                                        <h3>Brown Office Shoe</h3>
                                                                        <div class="ratting"> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                                            <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                                            <span>(112)</span> </div>
                                                                        <p class="text"> Hydrating Plumping Intense
                                                                            Shine Lip Colour
                                                                        </p>
                                                                        <div class="price">
                                                                            <h2> $42 USD <del> $65 USD</del></h2>
                                                                            <h6> In stuck</h6>
                                                                        </div>
                                                                        <div class="color-varient"> <a href="#0" class="color-name pink">
                                                                                <span>Pink</span> </a> <a href="#0" class="color-name red">
                                                                                <span>Red</span> </a>
                                                                            <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                                            </a> <a href="#0" class="color-name blue">
                                                                                <span>Blue</span>
                                                                            </a> <a href="#0" class="color-name black">
                                                                                <span>Black</span> </a> </div>
                                                                        <div class="add-product">
                                                                            <h6>Qty:</h6>
                                                                            <div class="button-group">
                                                                                <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i class="flaticon-minus"></i>
                                                                                    </span> <input type="number" class="qtyValue" value="1">
                                                                                    <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                                                    </span> </div>
                                                                                <button class="btn--primary "> Add to
                                                                                    Cart </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="payment-method"> <a href="#0"> <img src="assets/images/payment_method/method_1.png" alt=""> </a>
                                                                            <a href="#0"> <img src="assets/images/payment_method/method_2.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_3.png" alt=""> </a>
                                                                            <a href="#0"> <img src="assets/images/payment_method/method_4.png" alt=""> </a> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="products-three-single-content text-center"> <span>Men
                                                            Shoes</span>
                                                        <h5><a href="shop-details-3.html">Summer Shoes</a></h5>
                                                        <p>$159.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-6 ">
                                                <div class="products-three-single  w-100  ">
                                                    <div class="products-three-single-img">
                                                        <a href="shop-details-3.html" class="d-block">
                                                            <img src="assets/images/home-three/productss2-5.jpg" class="first-img" alt="">
                                                            <img src="assets/images/home-three/productss2-hover-5.png" alt="" class="hover-img">
                                                        </a>
                                                        <a href="cart.html" class="addcart btn--primary style2"> Add To
                                                            Cart </a>
                                                        <div class="products-grid__usefull-links">
                                                            <ul>
                                                                <li><a href="wishlist.html"> <i class="flaticon-heart">
                                                                        </i> <span>
                                                                            wishlist</span> </a> </li>
                                                                <li><a href="compare.html"> <i class="flaticon-left-and-right-arrows"></i>
                                                                        <span>
                                                                            compare</span> </a> </li>
                                                                <li><a href="#popup9" class="popup_link"> <i class="flaticon-visibility"></i>
                                                                        <span> quick view</span>
                                                                    </a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div id="popup9" class="product-gird__quick-view-popup mfp-hide">
                                                        <div class="container">
                                                            <div class="row justify-content-between align-items-center">
                                                                <div class="col-lg-6">
                                                                    <div class="quick-view__left-content">
                                                                        <div class="tabs">
                                                                            <div class="popup-product-thumb-box">
                                                                                <ul>
                                                                                    <li class="tab-nav popup-product-thumb">
                                                                                        <a href="#tabc1">
                                                                                            <img src="assets/images/shop/products-v6-img9.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tabc2">
                                                                                            <img src="assets/images/shop/products-v6-img9.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tabc3">
                                                                                            <img src="assets/images/shop/products-v6-img10.jpg" alt=""> </a> </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="popup-product-main-image-box">
                                                                                <div id="tabc1" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/products-v6-img8.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tabc2" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/products-v6-img9.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tabc3" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/products-v6-img10.jpg" alt=""> </div>
                                                                                </div> <button class="prev"> <i class="flaticon-back"></i>
                                                                                </button> <button class="next"> <i class="flaticon-next"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="popup-right-content">
                                                                        <h3>Brown Office Shoe</h3>
                                                                        <div class="ratting"> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                                            <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                                            <span>(112)</span> </div>
                                                                        <p class="text"> Hydrating Plumping Intense
                                                                            Shine Lip Colour
                                                                        </p>
                                                                        <div class="price">
                                                                            <h2> $42 USD <del> $65 USD</del></h2>
                                                                            <h6> In stuck</h6>
                                                                        </div>
                                                                        <div class="color-varient"> <a href="#0" class="color-name pink">
                                                                                <span>Pink</span> </a> <a href="#0" class="color-name red">
                                                                                <span>Red</span> </a>
                                                                            <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                                            </a> <a href="#0" class="color-name blue">
                                                                                <span>Blue</span>
                                                                            </a> <a href="#0" class="color-name black">
                                                                                <span>Black</span> </a> </div>
                                                                        <div class="add-product">
                                                                            <h6>Qty:</h6>
                                                                            <div class="button-group">
                                                                                <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i class="flaticon-minus"></i>
                                                                                    </span> <input type="number" class="qtyValue" value="1">
                                                                                    <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                                                    </span> </div>
                                                                                <button class="btn--primary "> Add to
                                                                                    Cart </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="payment-method"> <a href="#0"> <img src="assets/images/payment_method/method_1.png" alt=""> </a>
                                                                            <a href="#0"> <img src="assets/images/payment_method/method_2.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_3.png" alt=""> </a>
                                                                            <a href="#0"> <img src="assets/images/payment_method/method_4.png" alt=""> </a> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="products-three-single-content text-center"> <span>Men
                                                            Shoes</span>
                                                        <h5><a href="shop-details-3.html">Outdoor Sports Shoes</a></h5>
                                                        <p><del>$200.00</del> $159.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-6 ">
                                                <div class="products-three-single   w-100 ">
                                                    <div class="products-three-single-img">
                                                        <a href="shop-details-3.html" class="d-block">
                                                            <img src="assets/images/home-three/productss3-1.jpg" class="first-img" alt="">
                                                            <img src="assets/images/home-three/productss3-hover-1.jpg" alt="" class="hover-img">
                                                        </a>
                                                        <div class="products-grid-one__badge-box"> <span class="bg_base badge new ">New</span>
                                                            <span class="bg_black badge discount">-40%</span> </div> <a href="cart.html" class="addcart btn--primary style2"> Add To
                                                            Cart </a>
                                                        <div class="products-grid__usefull-links">
                                                            <ul>
                                                                <li><a href="wishlist.html"> <i class="flaticon-heart">
                                                                        </i> <span>
                                                                            wishlist</span> </a> </li>
                                                                <li><a href="compare.html"> <i class="flaticon-left-and-right-arrows"></i>
                                                                        <span>
                                                                            compare</span> </a> </li>
                                                                <li><a href="#popup" class="popup_link"> <i class="flaticon-visibility"></i>
                                                                        <span> quick view</span>
                                                                    </a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div id="popup" class="product-gird__quick-view-popup mfp-hide">
                                                        <div class="container">
                                                            <div class="row justify-content-between align-items-center">
                                                                <div class="col-lg-6">
                                                                    <div class="quick-view__left-content">
                                                                        <div class="tabs">
                                                                            <div class="popup-product-thumb-box">
                                                                                <ul>
                                                                                    <li class="tab-nav popup-product-thumb">
                                                                                        <a href="#tab1">
                                                                                            <img src="assets/images/shop/products-v6-img1.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tab2">
                                                                                            <img src="assets/images/shop/products-v6-img2.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tab3">
                                                                                            <img src="assets/images/shop/products-v6-img3.jpg" alt=""> </a> </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="popup-product-main-image-box">
                                                                                <div id="tab1" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/products-v6-img1.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tab2" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/products-v6-img2.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tab3" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/products-v6-img3.jpg" alt=""> </div>
                                                                                </div> <button class="prev"> <i class="flaticon-back"></i>
                                                                                </button> <button class="next"> <i class="flaticon-next"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="popup-right-content">
                                                                        <h3>Sport Sneakers</h3>
                                                                        <div class="ratting"> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                                            <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                                            <span>(112)</span> </div>
                                                                        <p class="text"> Hydrating Plumping Intense
                                                                            Shine Lip Colour
                                                                        </p>
                                                                        <div class="price">
                                                                            <h2> $42 USD <del> $65 USD</del></h2>
                                                                            <h6> In stuck</h6>
                                                                        </div>
                                                                        <div class="color-varient"> <a href="#0" class="color-name pink">
                                                                                <span>Pink</span> </a> <a href="#0" class="color-name red">
                                                                                <span>Red</span> </a>
                                                                            <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                                            </a> <a href="#0" class="color-name blue">
                                                                                <span>Blue</span>
                                                                            </a> <a href="#0" class="color-name black">
                                                                                <span>Black</span> </a> </div>
                                                                        <div class="add-product">
                                                                            <h6>Qty:</h6>
                                                                            <div class="button-group">
                                                                                <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i class="flaticon-minus"></i>
                                                                                    </span> <input type="number" class="qtyValue" value="1">
                                                                                    <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                                                    </span> </div>
                                                                                <button class="btn--primary "> Add to
                                                                                    Cart </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="payment-method"> <a href="#0"> <img src="assets/images/payment_method/method_1.png" alt=""> </a>
                                                                            <a href="#0"> <img src="assets/images/payment_method/method_2.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_3.png" alt=""> </a>
                                                                            <a href="#0"> <img src="assets/images/payment_method/method_4.png" alt=""> </a> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="products-three-single-content text-center"> <span>Men
                                                            Shoes</span>
                                                        <h5><a href="shop-details-3.html">Sport Sneakers</a></h5>
                                                        <p>$159.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-6 ">
                                                <div class="products-three-single wow w-100 fadeInUp animated">
                                                    <div class="products-three-single-img"> <a href="shop-details-3.html" class="d-block"> <img src="assets/images/home-three/productss3-2.jpg" alt="">
                                                        </a> <a href="cart.html" class="addcart btn--primary style2">
                                                            Add To Cart </a>
                                                        <div class="products-grid__usefull-links">
                                                            <ul>
                                                                <li><a href="wishlist.html"> <i class="flaticon-heart">
                                                                        </i> <span>
                                                                            wishlist</span> </a> </li>
                                                                <li><a href="#0"> <i class="flaticon-left-and-right-arrows"></i>
                                                                        <span>
                                                                            compare</span> </a> </li>
                                                                <li><a href="#popup1" class="popup_link"> <i class="flaticon-visibility"></i>
                                                                        <span> quick view</span>
                                                                    </a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div id="popup1" class="product-gird__quick-view-popup mfp-hide">
                                                        <div class="container">
                                                            <div class="row justify-content-between align-items-center">
                                                                <div class="col-lg-6">
                                                                    <div class="quick-view__left-content">
                                                                        <div class="tabs">
                                                                            <div class="popup-product-thumb-box">
                                                                                <ul>
                                                                                    <li class="tab-nav popup-product-thumb">
                                                                                        <a href="#tab11">
                                                                                            <img src="assets/images/shop/products-v6-img1.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tab22">
                                                                                            <img src="assets/images/shop/products-v6-img2.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tab33">
                                                                                            <img src="assets/images/shop/products-v6-img3.jpg" alt=""> </a> </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="popup-product-main-image-box">
                                                                                <div id="tab11" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/products-v6-img1.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tab22" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/products-v6-img2.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tab33" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/products-v6-img3.jpg" alt=""> </div>
                                                                                </div> <button class="prev"> <i class="flaticon-back"></i>
                                                                                </button> <button class="next"> <i class="flaticon-next"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="popup-right-content">
                                                                        <h3>Brown Office Shoe</h3>
                                                                        <div class="ratting"> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                                            <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                                            <span>(112)</span> </div>
                                                                        <p class="text"> Hydrating Plumping Intense
                                                                            Shine Lip Colour
                                                                        </p>
                                                                        <div class="price">
                                                                            <h2> $42 USD <del> $65 USD</del></h2>
                                                                            <h6> In stuck</h6>
                                                                        </div>
                                                                        <div class="color-varient"> <a href="#0" class="color-name pink">
                                                                                <span>Pink</span> </a> <a href="#0" class="color-name red">
                                                                                <span>Red</span> </a>
                                                                            <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                                            </a> <a href="#0" class="color-name blue">
                                                                                <span>Blue</span>
                                                                            </a> <a href="#0" class="color-name black">
                                                                                <span>Black</span> </a> </div>
                                                                        <div class="add-product">
                                                                            <h6>Qty:</h6>
                                                                            <div class="button-group">
                                                                                <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i class="flaticon-minus"></i>
                                                                                    </span> <input type="number" class="qtyValue" value="1">
                                                                                    <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                                                    </span> </div>
                                                                                <button class="btn--primary "> Add to
                                                                                    Cart </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="payment-method"> <a href="#0"> <img src="assets/images/payment_method/method_1.png" alt=""> </a>
                                                                            <a href="#0"> <img src="assets/images/payment_method/method_2.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_3.png" alt=""> </a>
                                                                            <a href="#0"> <img src="assets/images/payment_method/method_4.png" alt=""> </a> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="products-three-single-content text-center"> <span>Men
                                                            Shoes</span>
                                                        <h5><a href="shop-details-3.html">Apex Sneakers </a></h5>
                                                        <p>$159.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-6 ">
                                                <div class="products-three-single  wow w-100 ">
                                                    <div class="products-three-single-img">
                                                        <a href="shop-details-3.html" class="d-block"> <img src="assets/images/home-three/productss3-3.jpg" class="first-img" alt="">
                                                            <img src="assets/images/home-three/productss3-hover-3.png" alt="" class="hover-img">
                                                        </a>
                                                        <div class="products-grid-one__badge-box"> <span class="bg_base badge new ">New</span>
                                                        </div> <a href="cart.html" class="addcart btn--primary style2">
                                                            Add To Cart </a>
                                                        <div class="products-grid__usefull-links">
                                                            <ul>
                                                                <li><a href="#0"> <i class="flaticon-heart"> </i> <span>
                                                                            wishlist</span>
                                                                    </a> </li>
                                                                <li><a href="#0"> <i class="flaticon-left-and-right-arrows"></i>
                                                                        <span>
                                                                            compare</span> </a> </li>
                                                                <li><a href="#popup2" class="popup_link"> <i class="flaticon-visibility"></i>
                                                                        <span> quick view</span>
                                                                    </a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div id="popup2" class="product-gird__quick-view-popup mfp-hide">
                                                        <div class="container">
                                                            <div class="row justify-content-between align-items-center">
                                                                <div class="col-lg-6">
                                                                    <div class="quick-view__left-content">
                                                                        <div class="tabs">
                                                                            <div class="popup-product-thumb-box">
                                                                                <ul>
                                                                                    <li class="tab-nav popup-product-thumb">
                                                                                        <a href="#tab111">
                                                                                            <img src="assets/images/shop/products-v6-img3.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tab222">
                                                                                            <img src="assets/images/shop/products-v6-img4.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tab333">
                                                                                            <img src="assets/images/shop/products-v6-img5.jpg" alt=""> </a> </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="popup-product-main-image-box">
                                                                                <div id="tab111" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/products-v6-img3.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tab222" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/products-v6-img4.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tab333" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/products-v6-img5.jpg" alt=""> </div>
                                                                                </div> <button class="prev"> <i class="flaticon-back"></i>
                                                                                </button> <button class="next"> <i class="flaticon-next"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="popup-right-content">
                                                                        <h3>Brown Office Shoe</h3>
                                                                        <div class="ratting"> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                                            <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                                            <span>(112)</span> </div>
                                                                        <p class="text"> Hydrating Plumping Intense
                                                                            Shine Lip Colour
                                                                        </p>
                                                                        <div class="price">
                                                                            <h2> $42 USD <del> $65 USD</del></h2>
                                                                            <h6> In stuck</h6>
                                                                        </div>
                                                                        <div class="color-varient"> <a href="#0" class="color-name pink">
                                                                                <span>Pink</span> </a> <a href="#0" class="color-name red">
                                                                                <span>Red</span> </a>
                                                                            <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                                            </a> <a href="#0" class="color-name blue">
                                                                                <span>Blue</span>
                                                                            </a> <a href="#0" class="color-name black">
                                                                                <span>Black</span> </a> </div>
                                                                        <div class="add-product">
                                                                            <h6>Qty:</h6>
                                                                            <div class="button-group">
                                                                                <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i class="flaticon-minus"></i>
                                                                                    </span> <input type="number" class="qtyValue" value="1">
                                                                                    <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                                                    </span> </div>
                                                                                <button class="btn--primary "> Add to
                                                                                    Cart </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="payment-method"> <a href="#0"> <img src="assets/images/payment_method/method_1.png" alt=""> </a>
                                                                            <a href="#0"> <img src="assets/images/payment_method/method_2.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_3.png" alt=""> </a>
                                                                            <a href="#0"> <img src="assets/images/payment_method/method_4.png" alt=""> </a> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="products-three-single-content text-center"> <span>Men
                                                            Shoes</span>
                                                        <h5><a href="shop-details-3.html">Fashionable Sneakers </a></h5>
                                                        <p>$159.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-6 ">
                                                <div class="products-three-single  wow w-100 ">
                                                    <div class="products-three-single-img"> <a href="shop-details-3.html" class="d-block"> <img src="assets/images/home-three/productss3-4.jpg" alt="">
                                                        </a> <a href="cart.html" class="addcart btn--primary style2">
                                                            Add To Cart </a>
                                                        <div class="products-grid__usefull-links">
                                                            <ul>
                                                                <li><a href="wishlist.html"> <i class="flaticon-heart">
                                                                        </i> <span>
                                                                            wishlist</span> </a> </li>
                                                                <li><a href="compare.html"> <i class="flaticon-left-and-right-arrows"></i>
                                                                        <span>
                                                                            compare</span> </a> </li>
                                                                <li><a href="#popup3" class="popup_link"> <i class="flaticon-visibility"></i>
                                                                        <span> quick view</span>
                                                                    </a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div id="popup3" class="product-gird__quick-view-popup mfp-hide">
                                                        <div class="container">
                                                            <div class="row justify-content-between align-items-center">
                                                                <div class="col-lg-6">
                                                                    <div class="quick-view__left-content">
                                                                        <div class="tabs">
                                                                            <div class="popup-product-thumb-box">
                                                                                <ul>
                                                                                    <li class="tab-nav popup-product-thumb">
                                                                                        <a href="#tab1111">
                                                                                            <img src="assets/images/shop/products-v6-img4.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tab2222"> <img src="assets/images/shop/products-v6-img5.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tab3333"> <img src="assets/images/shop/products-v6-img6.jpg" alt=""> </a> </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="popup-product-main-image-box">
                                                                                <div id="tab1111" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/products-v6-img4.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tab2222" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/products-v6-img5.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tab3333" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/products-v6-img6.jpg" alt=""> </div>
                                                                                </div> <button class="prev"> <i class="flaticon-back"></i>
                                                                                </button> <button class="next"> <i class="flaticon-next"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="popup-right-content">
                                                                        <h3>Brown Office Shoe</h3>
                                                                        <div class="ratting">
                                                                            <i class="flaticon-star"></i>
                                                                            <i class="flaticon-star"></i>
                                                                            <i class="flaticon-star"></i>
                                                                            <i class="flaticon-star"></i>
                                                                            <i class="flaticon-star"></i>
                                                                            <span>(112)</span>
                                                                        </div>
                                                                        <p class="text"> Hydrating Plumping Intense
                                                                            Shine Lip Colour
                                                                        </p>
                                                                        <div class="price">
                                                                            <h2> $42 USD <del> $65 USD</del></h2>
                                                                            <h6> In stuck</h6>
                                                                        </div>
                                                                        <div class="color-varient"> <a href="#0" class="color-name pink">
                                                                                <span>Pink</span> </a> <a href="#0" class="color-name red">
                                                                                <span>Red</span> </a>
                                                                            <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                                            </a> <a href="#0" class="color-name blue">
                                                                                <span>Blue</span>
                                                                            </a> <a href="#0" class="color-name black">
                                                                                <span>Black</span> </a> </div>
                                                                        <div class="add-product">
                                                                            <h6>Qty:</h6>
                                                                            <div class="button-group">
                                                                                <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i class="flaticon-minus"></i>
                                                                                    </span> <input type="number" class="qtyValue" value="1">
                                                                                    <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                                                    </span> </div>
                                                                                <button class="btn--primary "> Add to
                                                                                    Cart </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="payment-method"> <a href="#0"> <img src="assets/images/payment_method/method_1.png" alt=""> </a>
                                                                            <a href="#0"> <img src="assets/images/payment_method/method_2.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_3.png" alt=""> </a>
                                                                            <a href="#0"> <img src="assets/images/payment_method/method_4.png" alt=""> </a> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="products-three-single-content text-center"> <span>Men
                                                            Shoes</span>
                                                        <h5><a href="shop-details-3.html">Outdoor Sports Shoes </a></h5>
                                                        <p>$159.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-6 ">
                                                <div class="products-three-single  wow w-100 ">
                                                    <div class="products-three-single-img img-bg">
                                                        <a href="shop-details-3.html" class="d-block">
                                                            <img src="assets/images/home-three/productss2-1.jpg" alt="">
                                                            <div class="products-grid-one__badge-box"> <span class="bg_black badge discount">-10%</span> </div>
                                                        </a>
                                                        <a href="cart.html" class="addcart btn--primary style2"> Add
                                                            To Cart </a>
                                                        <div class="products-grid__usefull-links">
                                                            <ul>
                                                                <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                                                wishlist</span> </a> </li>
                                                                <li><a href="compare.html"> <i class="flaticon-left-and-right-arrows"></i>
                                                                        <span>
                                                                                compare</span> </a> </li>
                                                                <li><a href="#popup4" class="popup_link"> <i class="flaticon-visibility"></i> <span>
                                                                                quick
                                                                                view</span>
                                                                    </a> </li>
                                                            </ul>
                                                        </div>
                                                        <div id="popup4" class="product-gird__quick-view-popup mfp-hide">
                                                            <div class="container">
                                                                <div class="row justify-content-between align-items-center">
                                                                    <div class="col-lg-6">
                                                                        <div class="quick-view__left-content">
                                                                            <div class="tabs">
                                                                                <div class="popup-product-thumb-box">
                                                                                    <ul>
                                                                                        <li class="tab-nav popup-product-thumb">
                                                                                            <a href="#tab11111">
                                                                                                <img src="assets/images/shop/products-v6-img5.jpg" alt=""> </a>
                                                                                        </li>
                                                                                        <li class="tab-nav popup-product-thumb ">
                                                                                            <a href="#tab22222">
                                                                                                <img src="assets/images/shop/products-v6-img6.jpg" alt=""> </a>
                                                                                        </li>
                                                                                        <li class="tab-nav popup-product-thumb ">
                                                                                            <a href="#tab33333">
                                                                                                <img src="assets/images/shop/products-v6-img7.jpg" alt=""> </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="popup-product-main-image-box">
                                                                                    <div id="tab11111" class="tab-item popup-product-image">
                                                                                        <div class="popup-product-single-image">
                                                                                            <img src="assets/images/shop/products-v6-img5.jpg" alt=""> </div>
                                                                                    </div>
                                                                                    <div id="tab22222" class="tab-item popup-product-image">
                                                                                        <div class="popup-product-single-image">
                                                                                            <img src="assets/images/shop/products-v6-img6.jpg" alt=""> </div>
                                                                                    </div>
                                                                                    <div id="tab33333" class="tab-item popup-product-image">
                                                                                        <div class="popup-product-single-image">
                                                                                            <img src="assets/images/shop/products-v6-img7.jpg" alt=""> </div>
                                                                                    </div> <button class="prev"> <i class="flaticon-back"></i>
                                                                                    </button>
                                                                                    <button class="next"> <i class="flaticon-next"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="popup-right-content">
                                                                            <h3>Brown Office Shoe</h3>
                                                                            <div class="ratting"> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                                                <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                                                <span>(112)</span>
                                                                            </div>
                                                                            <p class="text"> Hydrating Plumping
                                                                                Intense Shine Lip
                                                                                Colour
                                                                            </p>
                                                                            <div class="price">
                                                                                <h2> $42 USD <del> $65 USD</del>
                                                                                </h2>
                                                                                <h6> In stuck</h6>
                                                                            </div>
                                                                            <div class="color-varient"> <a href="#0" class="color-name pink">
                                                                                    <span>Pink</span> </a>
                                                                                <a href="#0" class="color-name red">
                                                                                    <span>Red</span>
                                                                                </a> <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                                                </a>
                                                                                <a href="#0" class="color-name blue">
                                                                                    <span>Blue</span>
                                                                                </a> <a href="#0" class="color-name black">
                                                                                    <span>Black</span> </a> </div>
                                                                            <div class="add-product">
                                                                                <h6>Qty:</h6>
                                                                                <div class="button-group">
                                                                                    <div class="qtySelector text-center">
                                                                                            <span class="decreaseQty"><i class="flaticon-minus"></i>
                                                                                            </span>
                                                                                        <input type="number" class="qtyValue" value="1">
                                                                                        <span class="increaseQty">
                                                                                                <i class="flaticon-plus"></i>
                                                                                            </span>
                                                                                    </div> <button class="btn--primary "> Add
                                                                                        to
                                                                                        Cart
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="payment-method"> <a href="#0"> <img src="assets/images/payment_method/method_1.png" alt=""> </a> <a href="#0">
                                                                                    <img src="assets/images/payment_method/method_2.png" alt=""> </a> <a href="#0">
                                                                                    <img src="assets/images/payment_method/method_3.png" alt=""> </a> <a href="#0">
                                                                                    <img src="assets/images/payment_method/method_4.png" alt=""> </a> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="products-three-single-content text-center"> <span>Men
                                                            Shoes</span>
                                                        <h5><a href="shop-details-3.html">High Quality Sneakers</a></h5>
                                                        <p>$159.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-6 ">
                                                <div class="products-three-single w-100">
                                                    <div class="products-three-single-img">
                                                        <a href="shop-details-3.html" class="d-block">
                                                            <img src="assets/images/home-three/products-6.png" alt="">
                                                        </a>
                                                        <div class="products-grid-one__badge-box"> <span class="bg_base badge new ">New</span>
                                                        </div> <a href="cart.html" class="addcart btn--primary style2">
                                                            Add To Cart </a>
                                                        <div class="products-grid__usefull-links">
                                                            <ul>
                                                                <li><a href="wishlist.html"> <i class="flaticon-heart">
                                                                        </i> <span>
                                                                            wishlist</span> </a> </li>
                                                                <li><a href="compare.html"> <i class="flaticon-left-and-right-arrows"></i>
                                                                        <span>
                                                                            compare</span> </a> </li>
                                                                <li><a href="shop-details-3.html"> <i class="flaticon-visibility"></i> <span>
                                                                            quick
                                                                            view</span> </a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="products-three-single-content text-center"> <span>Men
                                                            Shoes</span>
                                                        <h5><a href="shop-details-3.html">Outdoor Sports Shoes</a></h5>
                                                        <p><del>$200.00</del> $159.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-6 ">
                                                <div class="products-three-single w-100">
                                                    <div class="products-three-single-img img-bg">
                                                        <a href="shop-details-3.html" class="d-block">
                                                            <img src="assets/images/home-three/products-5.png" alt="">
                                                        </a>
                                                        <div class="products-grid-one__badge-box"> <span class="bg_black badge discount">-10%</span> </div> <a href="cart.html" class="addcart btn--primary style2"> Add To
                                                            Cart </a>
                                                        <div class="products-grid__usefull-links">
                                                            <ul>
                                                                <li><a href="wishlist.html"> <i class="flaticon-heart">
                                                                        </i> <span>
                                                                            wishlist</span> </a> </li>
                                                                <li><a href="compare.html"> <i class="flaticon-left-and-right-arrows"></i>
                                                                        <span>
                                                                            compare</span> </a> </li>
                                                                <li><a href="shop-details-3.html"> <i class="flaticon-visibility"></i> <span>
                                                                            quick
                                                                            view</span> </a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="products-three-single-content text-center"> <span>Men
                                                            Shoes</span>
                                                        <h5><a href="shop-details-3.html">High Quality Sneakers </a>
                                                        </h5>
                                                        <p>$159.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-list" role="tabpanel" aria-labelledby="pills-list-tab">
                                        <div class="row ">
                                            <div class="col-12">
                                                <div class="product-grid-two list mt-30 ">
                                                    <div class="product-grid-two__img">
                                                        <a href="shop-details-2.html" class="d-block"> <img src="assets/images/home-three/products-1.jpg" class="first-img" alt=""> <img src="assets/images/home-three/products-hover-1.png" alt="" class="hover-img"> </a>
                                                        <div class="products-grid-one__badge-box"> <span class="badge discount">Best</span> </div>
                                                    </div>
                                                    <div id="popupb" class="product-gird__quick-view-popup mfp-hide">
                                                        <div class="container">
                                                            <div class="row justify-content-between align-items-center">
                                                                <div class="col-lg-6">
                                                                    <div class="quick-view__left-content">
                                                                        <div class="tabs">
                                                                            <div class="popup-product-thumb-box">
                                                                                <ul>
                                                                                    <li class="tab-nav popup-product-thumb">
                                                                                        <a href="#tab7111111b"> <img src="assets/images/shop/shop-grid-page-img1.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tab8111111b"> <img src="assets/images/shop/shop-grid-page-img2.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tab9111111b"> <img src="assets/images/shop/shop-grid-page-img3.jpg" alt=""> </a> </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="popup-product-main-image-box">
                                                                                <div id="tab7111111b" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img1.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tab8111111b" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img2.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tab9111111b" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img3.jpg" alt=""> </div>
                                                                                </div> <button class="prev"> <i class="flaticon-back"></i>
                                                                                </button> <button class="next"> <i class="flaticon-next"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="popup-right-content">
                                                                        <h3>Round Small Table </h3>
                                                                        <div class="ratting"> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                                            <span>(123)</span> </div>
                                                                        <p class="text"> Wooden Tables to Brighten Your
                                                                            Dining Room </p>
                                                                        <div class="price">
                                                                            <h2> $50 USD <del> $105 USD</del></h2>
                                                                            <h6> In stuck</h6>
                                                                        </div>
                                                                        <div class="color-varient"> <a href="#0" class="color-name pink">
                                                                                <span>Pink</span> </a> <a href="#0" class="color-name red"> <span>Red</span>
                                                                            </a> <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                                            </a> <a href="#0" class="color-name blue">
                                                                                <span>Blue</span> </a> <a href="#0" class="color-name black">
                                                                                <span>Black</span> </a> </div>
                                                                        <div class="add-product">
                                                                            <h6>Qty:</h6>
                                                                            <div class="button-group">
                                                                                <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i class="flaticon-minus"></i>
                                                                                    </span> <input type="number" class="qtyValue" value="1">
                                                                                    <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                                                    </span> </div> <button class="btn--primary "> Add to Cart
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="payment-method"> <a href="#0"> <img src="assets/images/payment_method/method_1.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_2.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_3.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_4.png" alt=""> </a> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-grid-two-content text-center">
                                                        <span>Modern</span>
                                                        <h5><a href="shop-details-2.html">Trendy stylish shoes </a></h5>
                                                        <p><del>$200</del> $159.00</p>
                                                        <p class="text"> Typi non habent claritatem insitam usus
                                                            legentis qui facit eorum claritatem Investigationes
                                                            demonstraverunt lectores legere mele lius quod legunt
                                                            saepius Claritas est etiam processus a capitalize on low
                                                            hanging </p>
                                                        <div class="product-grid-two__overlay-box">
                                                            <div class="title">
                                                                <h6><a href="cart.html">Add To Cart</a></h6>
                                                            </div>
                                                            <div class="icon">
                                                                <ul>
                                                                    <li><a href="#popupb" class="popup_link"><i class="flaticon-eye"></i></a> </li>
                                                                    <li><a href="wishlist.html"><i class="flaticon-heart"></i></a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="product-grid-two list mt-30">
                                                    <div class="product-grid-two__img">
                                                        <a href="shop-details-2.html" class="d-block">
                                                            <img src="assets/images/home-three/products-2.jpg" alt="">
                                                        </a> </div>
                                                    <div id="popup2z" class="product-gird__quick-view-popup mfp-hide">
                                                        <div class="container">
                                                            <div class="row justify-content-between align-items-center">
                                                                <div class="col-lg-6">
                                                                    <div class="quick-view__left-content">
                                                                        <div class="tabs">
                                                                            <div class="popup-product-thumb-box">
                                                                                <ul>
                                                                                    <li class="tab-nav popup-product-thumb">
                                                                                        <a href="#tab1z"> <img src="assets/images/shop/shop-grid-page-img2.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tab2z"> <img src="assets/images/shop/shop-grid-page-img3.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tab3z"> <img src="assets/images/shop/shop-grid-page-img4.jpg" alt=""> </a> </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="popup-product-main-image-box">
                                                                                <div id="tab1z" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img2.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tab2z" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img3.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tab3z" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img4.jpg" alt=""> </div>
                                                                                </div> <button class="prev"> <i class="flaticon-back"></i>
                                                                                </button> <button class="next"> <i class="flaticon-next"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="popup-right-content">
                                                                        <h3>Diamond Ring Coyo</h3>
                                                                        <div class="ratting"> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                                            <span>(123)</span> </div>
                                                                        <p class="text"> Wooden Tables to Brighten Your
                                                                            Dining Room </p>
                                                                        <div class="price">
                                                                            <h2> $50 USD <del> $105 USD</del></h2>
                                                                            <h6> In stuck</h6>
                                                                        </div>
                                                                        <div class="color-varient"> <a href="#0" class="color-name pink">
                                                                                <span>Pink</span> </a> <a href="#0" class="color-name red"> <span>Red</span>
                                                                            </a> <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                                            </a> <a href="#0" class="color-name blue">
                                                                                <span>Blue</span> </a> <a href="#0" class="color-name black">
                                                                                <span>Black</span> </a> </div>
                                                                        <div class="add-product">
                                                                            <h6>Qty:</h6>
                                                                            <div class="button-group">
                                                                                <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i class="flaticon-minus"></i>
                                                                                    </span> <input type="number" class="qtyValue" value="1">
                                                                                    <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                                                    </span> </div> <button class="btn--primary "> Add to Cart
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="payment-method"> <a href="#0"> <img src="assets/images/payment_method/method_1.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_2.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_3.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_4.png" alt=""> </a> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-grid-two-content text-center">
                                                        <span>Modern</span>
                                                        <h5><a href="shop-details-2.html">Exclusive Sneakers </a></h5>
                                                        <p>$159.00</p>
                                                        <p class="text"> Typi non habent claritatem insitam usus
                                                            legentis qui facit eorum claritatem Investigationes
                                                            demonstraverunt lectores legere mele lius quod legunt
                                                            saepius Claritas est etiam processus a capitalize on low
                                                            hanging </p>
                                                        <div class="product-grid-two__overlay-box">
                                                            <div class="title">
                                                                <h6><a href="cart.html">Add To Cart</a></h6>
                                                            </div>
                                                            <div class="icon">
                                                                <ul>
                                                                    <li><a href="#popup2z" class="popup_link"><i class="flaticon-eye"></i></a> </li>
                                                                    <li><a href="wishlist.html"><i class="flaticon-heart"></i></a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="product-grid-two list mt-30">
                                                    <div class="product-grid-two__img">
                                                        <a href="shop-details-2.html" class="d-block"> <img src="assets/images/home-three/products-3.jpg" alt="">
                                                        </a>
                                                        <div class="products-grid-one__badge-box"> <span class="bg_base badge new ">New</span> </div>
                                                    </div>
                                                    <div id="popup3zz" class="product-gird__quick-view-popup mfp-hide">
                                                        <div class="container">
                                                            <div class="row justify-content-between align-items-center">
                                                                <div class="col-lg-6">
                                                                    <div class="quick-view__left-content">
                                                                        <div class="tabs">
                                                                            <div class="popup-product-thumb-box">
                                                                                <ul>
                                                                                    <li class="tab-nav popup-product-thumb">
                                                                                        <a href="#tab4zz"> <img src="assets/images/shop/shop-grid-page-img3.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tab5zz"> <img src="assets/images/shop/shop-grid-page-img4.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tab6zz"> <img src="assets/images/shop/shop-grid-page-img5.jpg" alt=""> </a> </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="popup-product-main-image-box">
                                                                                <div id="tab4zz" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img3.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tab5zz" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img4.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tab6zz" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img5.jpg" alt=""> </div>
                                                                                </div> <button class="prev"> <i class="flaticon-back"></i>
                                                                                </button> <button class="next"> <i class="flaticon-next"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="popup-right-content">
                                                                        <h3>Leather Brown Shoe</h3>
                                                                        <div class="ratting"> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                                            <span>(123)</span> </div>
                                                                        <p class="text"> Wooden Tables to Brighten Your
                                                                            Dining Room </p>
                                                                        <div class="price">
                                                                            <h2> $50 USD <del> $105 USD</del></h2>
                                                                            <h6> In stuck</h6>
                                                                        </div>
                                                                        <div class="color-varient"> <a href="#0" class="color-name pink">
                                                                                <span>Pink</span> </a> <a href="#0" class="color-name red"> <span>Red</span>
                                                                            </a> <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                                            </a> <a href="#0" class="color-name blue">
                                                                                <span>Blue</span> </a> <a href="#0" class="color-name black">
                                                                                <span>Black</span> </a> </div>
                                                                        <div class="add-product">
                                                                            <h6>Qty:</h6>
                                                                            <div class="button-group">
                                                                                <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i class="flaticon-minus"></i>
                                                                                    </span> <input type="number" class="qtyValue" value="1">
                                                                                    <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                                                    </span> </div> <button class="btn--primary "> Add to Cart
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="payment-method"> <a href="#0"> <img src="assets/images/payment_method/method_1.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_2.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_3.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_4.png" alt=""> </a> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-grid-two-content text-center">
                                                        <span>Modern</span>
                                                        <h5><a href="shop-details-2.html">Fashionable Sneakers </a></h5>
                                                        <p><del>$200</del> $159.00</p>
                                                        <p class="text"> Typi non habent claritatem insitam usus
                                                            legentis qui facit eorum claritatem Investigationes
                                                            demonstraverunt lectores legere mele lius quod legunt
                                                            saepius Claritas est etiam processus a capitalize on low
                                                            hanging </p>
                                                        <div class="product-grid-two__overlay-box">
                                                            <div class="title">
                                                                <h6><a href="cart.html">Add To Cart</a></h6>
                                                            </div>
                                                            <div class="icon">
                                                                <ul>
                                                                    <li><a href="#popup3zz" class="popup_link"><i class="flaticon-eye"></i></a> </li>
                                                                    <li><a href="wishlist.html"><i class="flaticon-heart"></i></a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="product-grid-two list mt-30">
                                                    <div class="product-grid-two__img"> <a href="shop-details-2.html" class="d-block">
                                                            <img src="assets/images/home-three/products-4.jpg" alt="">
                                                        </a>
                                                        <div class="products-grid-one__badge-box"> <span class="badge discount">-30%</span> </div>
                                                    </div>
                                                    <div id="popup4cc" class="product-gird__quick-view-popup mfp-hide">
                                                        <div class="container">
                                                            <div class="row justify-content-between align-items-center">
                                                                <div class="col-lg-6">
                                                                    <div class="quick-view__left-content">
                                                                        <div class="tabs">
                                                                            <div class="popup-product-thumb-box">
                                                                                <ul>
                                                                                    <li class="tab-nav popup-product-thumb">
                                                                                        <a href="#tab44cc"> <img src="assets/images/home-two/products-v5-img4.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tab55cc"> <img src="assets/images/home-two/products-v5-img5.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tab66cc"> <img src="assets/images/home-two/products-v5-img6.jpg" alt=""> </a> </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="popup-product-main-image-box">
                                                                                <div id="tab44cc" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/home-two/products-v5-img4.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tab55cc" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/home-two/products-v5-img5.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tab66cc" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/home-two/products-v5-img6.jpg" alt=""> </div>
                                                                                </div> <button class="prev"> <i class="flaticon-back"></i>
                                                                                </button> <button class="next"> <i class="flaticon-next"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="popup-right-content">
                                                                        <h3>Comfort Cool Sofa </h3>
                                                                        <div class="ratting"> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                                            <span>(123)</span> </div>
                                                                        <p class="text"> Wooden Tables to Brighten Your
                                                                            Dining Room </p>
                                                                        <div class="price">
                                                                            <h2> $50 USD <del> $105 USD</del></h2>
                                                                            <h6> In stuck</h6>
                                                                        </div>
                                                                        <div class="color-varient"> <a href="#0" class="color-name pink">
                                                                                <span>Pink</span> </a> <a href="#0" class="color-name red"> <span>Red</span>
                                                                            </a> <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                                            </a> <a href="#0" class="color-name blue">
                                                                                <span>Blue</span> </a> <a href="#0" class="color-name black">
                                                                                <span>Black</span> </a> </div>
                                                                        <div class="add-product">
                                                                            <h6>Qty:</h6>
                                                                            <div class="button-group">
                                                                                <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i class="flaticon-minus"></i>
                                                                                    </span> <input type="number" class="qtyValue" value="1">
                                                                                    <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                                                    </span> </div> <button class="btn--primary "> Add to Cart
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="payment-method"> <a href="#0"> <img src="assets/images/payment_method/method_1.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_2.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_3.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_4.png" alt=""> </a> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-grid-two-content text-center">
                                                        <span>Modern</span>
                                                        <h5><a href="shop-details-2.html">Summer Shoes </a></h5>
                                                        <p><del>$200</del> $159.00</p>
                                                        <p class="text"> Typi non habent claritatem insitam usus
                                                            legentis qui facit eorum claritatem Investigationes
                                                            demonstraverunt lectores legere mele lius quod legunt
                                                            saepius Claritas est etiam processus a capitalize on low
                                                            hanging </p>
                                                        <div class="product-grid-two__overlay-box">
                                                            <div class="title">
                                                                <h6><a href="cart.html">Add To Cart</a></h6>
                                                            </div>
                                                            <div class="icon">
                                                                <ul>
                                                                    <li><a href="#popup4cc" class="popup_link"><i class="flaticon-eye"></i></a> </li>
                                                                    <li><a href="wishlist.html"><i class="flaticon-heart"></i></a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="product-grid-two list mt-30">
                                                    <div class="product-grid-two__img"> <a href="shop-details-2.html" class="d-block"> <img src="assets/images/home-three/products-5.png" alt="">
                                                        </a>
                                                        <div class="products-grid-one__badge-box"> <span class="badge bg_base new">Hot</span> </div>
                                                    </div>
                                                    <div id="popup5vv" class="product-gird__quick-view-popup mfp-hide">
                                                        <div class="container">
                                                            <div class="row justify-content-between align-items-center">
                                                                <div class="col-lg-6">
                                                                    <div class="quick-view__left-content">
                                                                        <div class="tabs">
                                                                            <div class="popup-product-thumb-box">
                                                                                <ul>
                                                                                    <li class="tab-nav popup-product-thumb">
                                                                                        <a href="#tab444vv"> <img src="assets/images/shop/shop-grid-page-img5.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tab555vv"> <img src="assets/images/shop/shop-grid-page-img6.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tab666vv"> <img src="assets/images/shop/shop-grid-page-img7.jpg" alt=""> </a> </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="popup-product-main-image-box">
                                                                                <div id="tab444vv" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img5.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tab555vv" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img6.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tab666vv" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img7.jpg" alt=""> </div>
                                                                                </div> <button class="prev"> <i class="flaticon-back"></i>
                                                                                </button> <button class="next"> <i class="flaticon-next"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="popup-right-content">
                                                                        <h3>Gold Hand Ring </h3>
                                                                        <div class="ratting"> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                                            <span>(123)</span> </div>
                                                                        <p class="text"> Wooden Tables to Brighten Your
                                                                            Dining Room </p>
                                                                        <div class="price">
                                                                            <h2> $40 USD <del> $99 USD</del></h2>
                                                                            <h6> In stuck</h6>
                                                                        </div>
                                                                        <div class="color-varient"> <a href="#0" class="color-name pink">
                                                                                <span>Pink</span> </a> <a href="#0" class="color-name red"> <span>Red</span>
                                                                            </a> <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                                            </a> <a href="#0" class="color-name blue">
                                                                                <span>Blue</span> </a> <a href="#0" class="color-name black">
                                                                                <span>Black</span> </a> </div>
                                                                        <div class="add-product">
                                                                            <h6>Qty:</h6>
                                                                            <div class="button-group">
                                                                                <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i class="flaticon-minus"></i>
                                                                                    </span> <input type="number" class="qtyValue" value="1">
                                                                                    <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                                                    </span> </div> <button class="btn--primary "> Add to Cart
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="payment-method"> <a href="#0"> <img src="assets/images/payment_method/method_1.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_2.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_3.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_4.png" alt=""> </a> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-grid-two-content text-center">
                                                        <span>Modern</span>
                                                        <h5><a href="shop-details-2.html">Outdoor Sports Shoes</a></h5>
                                                        <p><del>$200</del> $159.00</p>
                                                        <p class="text"> Typi non habent claritatem insitam usus
                                                            legentis qui facit eorum claritatem Investigationes
                                                            demonstraverunt lectores legere mele lius quod legunt
                                                            saepius Claritas est etiam processus a capitalize on low
                                                            hanging </p>
                                                        <div class="product-grid-two__overlay-box">
                                                            <div class="title">
                                                                <h6><a href="cart.html">Add To Cart</a></h6>
                                                            </div>
                                                            <div class="icon">
                                                                <ul>
                                                                    <li><a href="#popup5vv" class="popup_link"><i class="flaticon-eye"></i></a> </li>
                                                                    <li><a href="wishlist.html"><i class="flaticon-heart"></i></a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="product-grid-two list mt-30">
                                                    <div class="product-grid-two__img"> <a href="shop-details-2.html" class="d-block"> <img src="assets/images/home-three/products-6.png" alt="">
                                                        </a> </div>
                                                    <div id="popup6bb" class="product-gird__quick-view-popup mfp-hide">
                                                        <div class="container">
                                                            <div class="row justify-content-between align-items-center">
                                                                <div class="col-lg-6">
                                                                    <div class="quick-view__left-content">
                                                                        <div class="tabs">
                                                                            <div class="popup-product-thumb-box">
                                                                                <ul>
                                                                                    <li class="tab-nav popup-product-thumb">
                                                                                        <a href="#tab12bb"> <img src="assets/images/shop/shop-grid-page-img6.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tab13bb"> <img src="assets/images/shop/shop-grid-page-img7.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tab14bb"> <img src="assets/images/shop/shop-grid-page-img8.jpg" alt=""> </a> </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="popup-product-main-image-box">
                                                                                <div id="tab12bb" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img6.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tab13bb" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img7.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tab14bb" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img8.jpg" alt=""> </div>
                                                                                </div> <button class="prev"> <i class="flaticon-back"></i>
                                                                                </button> <button class="next"> <i class="flaticon-next"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="popup-right-content">
                                                                        <h3>New Cotton Sofa </h3>
                                                                        <div class="ratting"> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                                            <span>(123)</span> </div>
                                                                        <p class="text"> Wooden Tables to Brighten Your
                                                                            Dining Room </p>
                                                                        <div class="price">
                                                                            <h2> $40 USD <del> $99 USD</del></h2>
                                                                            <h6> In stuck</h6>
                                                                        </div>
                                                                        <div class="color-varient"> <a href="#0" class="color-name pink">
                                                                                <span>Pink</span> </a> <a href="#0" class="color-name red"> <span>Red</span>
                                                                            </a> <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                                            </a> <a href="#0" class="color-name blue">
                                                                                <span>Blue</span> </a> <a href="#0" class="color-name black">
                                                                                <span>Black</span> </a> </div>
                                                                        <div class="add-product">
                                                                            <h6>Qty:</h6>
                                                                            <div class="button-group">
                                                                                <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i class="flaticon-minus"></i>
                                                                                    </span> <input type="number" class="qtyValue" value="1">
                                                                                    <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                                                    </span> </div> <button class="btn--primary "> Add to Cart
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="payment-method"> <a href="#0"> <img src="assets/images/payment_method/method_1.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_2.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_3.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_4.png" alt=""> </a> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-grid-two-content text-center">
                                                        <span>Modern</span>
                                                        <h5><a href="shop-details-2.html">Sport Sneakers</a></h5>
                                                        <p><del>$200</del> $159.00</p>
                                                        <p class="text"> Typi non habent claritatem insitam usus
                                                            legentis qui facit eorum claritatem Investigationes
                                                            demonstraverunt lectores legere mele lius quod legunt
                                                            saepius Claritas est etiam processus a capitalize on low
                                                            hanging </p>
                                                        <div class="product-grid-two__overlay-box">
                                                            <div class="title">
                                                                <h6><a href="cart.html">Add To Cart</a></h6>
                                                            </div>
                                                            <div class="icon">
                                                                <ul>
                                                                    <li><a href="#popup6bb" class="popup_link"><i class="flaticon-eye"></i></a> </li>
                                                                    <li><a href="wishlist.html"><i class="flaticon-heart"></i></a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="product-grid-two list mt-30">
                                                    <div class="product-grid-two__img"> <a href="shop-details-2.html" class="d-block"> <img src="assets/images/home-three/productss2-1.jpg" class="first-img" alt=""> <img src="assets/images/home-three/productss2-hover-1.png" alt="" class="hover-img"> </a>
                                                        <div class="products-grid-one__badge-box"> <span class="badge discount">-50%</span> </div>
                                                    </div>
                                                    <div id="popup8nn" class="product-gird__quick-view-popup mfp-hide">
                                                        <div class="container">
                                                            <div class="row justify-content-between align-items-center">
                                                                <div class="col-lg-6">
                                                                    <div class="quick-view__left-content">
                                                                        <div class="tabs">
                                                                            <div class="popup-product-thumb-box">
                                                                                <ul>
                                                                                    <li class="tab-nav popup-product-thumb">
                                                                                        <a href="#tab15nn"> <img src="assets/images/shop/shop-grid-page-img7.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tab16nn"> <img src="assets/images/shop/shop-grid-page-img8.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tab17nn"> <img src="assets/images/shop/shop-grid-page-img9.jpg" alt=""> </a> </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="popup-product-main-image-box">
                                                                                <div id="tab15nn" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img7.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tab16nn" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img8.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tab17nn" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img9.jpg" alt=""> </div>
                                                                                </div> <button class="prev"> <i class="flaticon-back"></i>
                                                                                </button> <button class="next"> <i class="flaticon-next"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="popup-right-content">
                                                                        <h3>Pure Gold Earring </h3>
                                                                        <div class="ratting"> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                                            <span>(123)</span> </div>
                                                                        <p class="text"> Wooden Tables to Brighten Your
                                                                            Dining Room </p>
                                                                        <div class="price">
                                                                            <h2> $40 USD <del> $99 USD</del></h2>
                                                                            <h6> In stuck</h6>
                                                                        </div>
                                                                        <div class="color-varient"> <a href="#0" class="color-name pink">
                                                                                <span>Pink</span> </a> <a href="#0" class="color-name red"> <span>Red</span>
                                                                            </a> <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                                            </a> <a href="#0" class="color-name blue">
                                                                                <span>Blue</span> </a> <a href="#0" class="color-name black">
                                                                                <span>Black</span> </a> </div>
                                                                        <div class="add-product">
                                                                            <h6>Qty:</h6>
                                                                            <div class="button-group">
                                                                                <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i class="flaticon-minus"></i>
                                                                                    </span> <input type="number" class="qtyValue" value="1">
                                                                                    <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                                                    </span> </div> <button class="btn--primary "> Add to Cart
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="payment-method"> <a href="#0"> <img src="assets/images/payment_method/method_1.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_2.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_3.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_4.png" alt=""> </a> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-grid-two-content text-center">
                                                        <span>Modern</span>
                                                        <h5><a href="shop-details-2.html">Apex Sneakers</a></h5>
                                                        <p><del>$200</del> $159.00</p>
                                                        <p class="text"> Typi non habent claritatem insitam usus
                                                            legentis qui facit eorum claritatem Investigationes
                                                            demonstraverunt lectores legere mele lius quod legunt
                                                            saepius Claritas est etiam processus a capitalize on low
                                                            hanging </p>
                                                        <div class="product-grid-two__overlay-box">
                                                            <div class="title">
                                                                <h6><a href="cart.html">Add To Cart</a></h6>
                                                            </div>
                                                            <div class="icon">
                                                                <ul>
                                                                    <li><a href="#popup8nn" class="popup_link"><i class="flaticon-eye"></i></a> </li>
                                                                    <li><a href="wishlist.html"><i class="flaticon-heart"></i></a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="product-grid-two list mt-30">
                                                    <div class="product-grid-two__img"> <a href="shop-details-2.html" class="d-block"> <img src="assets/images/home-three/productss2-2.jpg" class="first-img" alt=""> <img src="assets/images/home-three/productss2-hover-2.png" alt="" class="hover-img"> </a> </div>
                                                    <div id="popup9mm" class="product-gird__quick-view-popup mfp-hide">
                                                        <div class="container">
                                                            <div class="row justify-content-between align-items-center">
                                                                <div class="col-lg-6">
                                                                    <div class="quick-view__left-content">
                                                                        <div class="tabs">
                                                                            <div class="popup-product-thumb-box">
                                                                                <ul>
                                                                                    <li class="tab-nav popup-product-thumb">
                                                                                        <a href="#tabk1mm"> <img src="assets/images/home-two/products-v5-img8.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tabk2mm"> <img src="assets/images/home-two/products-v5-img4.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tabk3mm"> <img src="assets/images/home-two/products-v5-img1.jpg" alt=""> </a> </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="popup-product-main-image-box">
                                                                                <div id="tabk1mm" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/home-two/products-v5-img8.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tabk2mm" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/home-two/products-v5-img4.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tabk3mm" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/home-two/products-v5-img1.jpg" alt=""> </div>
                                                                                </div> <button class="prev"> <i class="flaticon-back"></i>
                                                                                </button> <button class="next"> <i class="flaticon-next"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="popup-right-content">
                                                                        <h3>Wooden TV Table </h3>
                                                                        <div class="ratting"> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                                            <span>(123)</span> </div>
                                                                        <p class="text"> Wooden Tables to Brighten Your
                                                                            Dining Room </p>
                                                                        <div class="price">
                                                                            <h2> $40 USD <del> $99 USD</del></h2>
                                                                            <h6> In stuck</h6>
                                                                        </div>
                                                                        <div class="color-varient"> <a href="#0" class="color-name pink">
                                                                                <span>Pink</span> </a> <a href="#0" class="color-name red"> <span>Red</span>
                                                                            </a> <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                                            </a> <a href="#0" class="color-name blue">
                                                                                <span>Blue</span> </a> <a href="#0" class="color-name black">
                                                                                <span>Black</span> </a> </div>
                                                                        <div class="add-product">
                                                                            <h6>Qty:</h6>
                                                                            <div class="button-group">
                                                                                <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i class="flaticon-minus"></i>
                                                                                    </span> <input type="number" class="qtyValue" value="1">
                                                                                    <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                                                    </span> </div> <button class="btn--primary"> Add to Cart
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="payment-method"> <a href="#0"> <img src="assets/images/payment_method/method_1.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_2.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_3.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_4.png" alt=""> </a> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-grid-two-content text-center">
                                                        <span>Modern</span>
                                                        <h5><a href="shop-details-2.html">Fashionable Sneakers</a></h5>
                                                        <p>$159.00</p>
                                                        <p class="text"> Typi non habent claritatem insitam usus
                                                            legentis qui facit eorum claritatem Investigationes
                                                            demonstraverunt lectores legere mele lius quod legunt
                                                            saepius Claritas est etiam processus a capitalize on low
                                                            hanging </p>
                                                        <div class="product-grid-two__overlay-box">
                                                            <div class="title">
                                                                <h6><a href="cart.html">Add To Cart</a></h6>
                                                            </div>
                                                            <div class="icon">
                                                                <ul>
                                                                    <li><a href="#popup9mm" class="popup_link"><i class="flaticon-eye"></i></a> </li>
                                                                    <li><a href="wishlist.html"><i class="flaticon-heart"></i></a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="product-grid-two list mt-30">
                                                    <div class="product-grid-two__img">
                                                        <a href="shop-details-2.html" class="d-block">
                                                            <img src="assets/images/home-three/productss2-3.jpg" alt=""> </a>
                                                    </div>
                                                    <div id="popupr1jj" class="product-gird__quick-view-popup mfp-hide">
                                                        <div class="container">
                                                            <div class="row justify-content-between align-items-center">
                                                                <div class="col-lg-6">
                                                                    <div class="quick-view__left-content">
                                                                        <div class="tabs">
                                                                            <div class="popup-product-thumb-box">
                                                                                <ul>
                                                                                    <li class="tab-nav popup-product-thumb">
                                                                                        <a href="#tabr1jj"> <img src="assets/images/shop/shop-grid-page-img9.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tabr2jj"> <img src="assets/images/shop/shop-grid-page-img10.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tabr3jj"> <img src="assets/images/shop/shop-grid-page-img11.jpg" alt=""> </a> </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="popup-product-main-image-box">
                                                                                <div id="tabr1jj" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img9.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tabr2jj" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img10.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tabr3jj" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img11.jpg" alt=""> </div>
                                                                                </div> <button class="prev"> <i class="flaticon-back"></i>
                                                                                </button> <button class="next"> <i class="flaticon-next"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="popup-right-content">
                                                                        <h3>Brown Lather Chair </h3>
                                                                        <div class="ratting"> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                                            <span>(123)</span> </div>
                                                                        <p class="text"> Wooden Tables to Brighten Your
                                                                            Dining Room </p>
                                                                        <div class="price">
                                                                            <h2> $40 USD <del> $99 USD</del></h2>
                                                                            <h6> In stuck</h6>
                                                                        </div>
                                                                        <div class="color-varient"> <a href="#0" class="color-name pink">
                                                                                <span>Pink</span> </a> <a href="#0" class="color-name red"> <span>Red</span>
                                                                            </a> <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                                            </a> <a href="#0" class="color-name blue">
                                                                                <span>Blue</span> </a> <a href="#0" class="color-name black">
                                                                                <span>Black</span> </a> </div>
                                                                        <div class="add-product">
                                                                            <h6>Qty:</h6>
                                                                            <div class="button-group">
                                                                                <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i class="flaticon-minus"></i>
                                                                                    </span> <input type="number" class="qtyValue" value="1">
                                                                                    <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                                                    </span> </div> <button class="btn--primary "> Add to Cart
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="payment-method"> <a href="#0"> <img src="assets/images/payment_method/method_1.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_2.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_3.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_4.png" alt=""> </a> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-grid-two-content text-center">
                                                        <span>Modern</span>
                                                        <h5><a href="shop-details-2.html">Summer Shoes </a></h5>
                                                        <p>$159.00</p>
                                                        <p class="text"> Typi non habent claritatem insitam usus
                                                            legentis qui facit eorum claritatem Investigationes
                                                            demonstraverunt lectores legere mele lius quod legunt
                                                            saepius Claritas est etiam processus a capitalize on low
                                                            hanging </p>
                                                        <div class="product-grid-two__overlay-box">
                                                            <div class="title">
                                                                <h6><a href="cart.html">Add To Cart</a></h6>
                                                            </div>
                                                            <div class="icon">
                                                                <ul>
                                                                    <li><a href="#popupr1jj" class="popup_link"><i class="flaticon-eye"></i></a> </li>
                                                                    <li><a href="wishlist.html"><i class="flaticon-heart"></i></a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="product-grid-two list mt-30">
                                                    <div class="product-grid-two__img"> <a href="shop-details-2.html" class="d-block">
                                                            <img src="assets/images/home-three/productss2-4.jpg" alt=""> </a> </div>
                                                    <div id="popupr11hh" class="product-gird__quick-view-popup mfp-hide">
                                                        <div class="container">
                                                            <div class="row justify-content-between align-items-center">
                                                                <div class="col-lg-6">
                                                                    <div class="quick-view__left-content">
                                                                        <div class="tabs">
                                                                            <div class="popup-product-thumb-box">
                                                                                <ul>
                                                                                    <li class="tab-nav popup-product-thumb">
                                                                                        <a href="#tabr11hh"> <img src="assets/images/shop/shop-grid-page-img10.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tabr22hh"> <img src="assets/images/shop/shop-grid-page-img11.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tabr33hh"> <img src="assets/images/shop/shop-grid-page-img9.jpg" alt=""> </a> </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="popup-product-main-image-box">
                                                                                <div id="tabr11hh" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img10.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tabr22hh" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img11.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tabr33hh" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img9.jpg" alt=""> </div>
                                                                                </div> <button class="prev"> <i class="flaticon-back"></i>
                                                                                </button> <button class="next"> <i class="flaticon-next"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="popup-right-content">
                                                                        <h3>Blacked Necklace Set </h3>
                                                                        <div class="ratting"> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                                            <span>(123)</span> </div>
                                                                        <p class="text"> Wooden Tables to Brighten Your
                                                                            Dining Room </p>
                                                                        <div class="price">
                                                                            <h2> $40 USD <del> $99 USD</del></h2>
                                                                            <h6> In stuck</h6>
                                                                        </div>
                                                                        <div class="color-varient"> <a href="#0" class="color-name pink">
                                                                                <span>Pink</span> </a> <a href="#0" class="color-name red"> <span>Red</span>
                                                                            </a> <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                                            </a> <a href="#0" class="color-name blue">
                                                                                <span>Blue</span> </a> <a href="#0" class="color-name black">
                                                                                <span>Black</span> </a> </div>
                                                                        <div class="add-product">
                                                                            <h6>Qty:</h6>
                                                                            <div class="button-group">
                                                                                <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i class="flaticon-minus"></i>
                                                                                    </span> <input type="number" class="qtyValue" value="1">
                                                                                    <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                                                    </span> </div> <button class="btn--primary "> Add to Cart
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="payment-method"> <a href="#0"> <img src="assets/images/payment_method/method_1.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_2.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_3.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_4.png" alt=""> </a> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-grid-two-content text-center">
                                                        <span>Modern</span>
                                                        <h5><a href="shop-details-2.html">High Quality Sneakers</a></h5>
                                                        <p>$159.00</p>
                                                        <p class="text"> Typi non habent claritatem insitam usus
                                                            legentis qui facit eorum claritatem Investigationes
                                                            demonstraverunt lectores legere mele lius quod legunt
                                                            saepius Claritas est etiam processus a capitalize on low
                                                            hanging </p>
                                                        <div class="product-grid-two__overlay-box">
                                                            <div class="title">
                                                                <h6><a href="cart.html">Add To Cart</a></h6>
                                                            </div>
                                                            <div class="icon">
                                                                <ul>
                                                                    <li><a href="#popupr11hh" class="popup_link"><i class="flaticon-eye"></i></a> </li>
                                                                    <li><a href="wishlist.html"><i class="flaticon-heart"></i></a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="product-grid-two list mt-30">
                                                    <div class="product-grid-two__img"> <a href="shop-details-2.html" class="d-block"> <img src="assets/images/home-three/productss3-1.jpg" alt=""> </a> </div>
                                                    <div id="popupr111g" class="product-gird__quick-view-popup mfp-hide">
                                                        <div class="container">
                                                            <div class="row justify-content-between align-items-center">
                                                                <div class="col-lg-6">
                                                                    <div class="quick-view__left-content">
                                                                        <div class="tabs">
                                                                            <div class="popup-product-thumb-box">
                                                                                <ul>
                                                                                    <li class="tab-nav popup-product-thumb">
                                                                                        <a href="#tabr111g"> <img src="assets/images/shop/shop-grid-page-img11.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tabr222g"> <img src="assets/images/shop/shop-grid-page-img10.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tabr333g"> <img src="assets/images/shop/shop-grid-page-img9.jpg" alt=""> </a> </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="popup-product-main-image-box">
                                                                                <div id="tabr111g" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img11.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tabr222g" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img9.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tabr333g" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img10.jpg" alt=""> </div>
                                                                                </div> <button class="prev"> <i class="flaticon-back"></i>
                                                                                </button> <button class="next"> <i class="flaticon-next"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="popup-right-content">
                                                                        <h3>Diamond Bracelet </h3>
                                                                        <div class="ratting"> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                                            <span>(123)</span> </div>
                                                                        <p class="text"> Wooden Tables to Brighten Your
                                                                            Dining Room </p>
                                                                        <div class="price">
                                                                            <h2> $40 USD <del> $99 USD</del></h2>
                                                                            <h6> In stuck</h6>
                                                                        </div>
                                                                        <div class="color-varient"> <a href="#0" class="color-name pink">
                                                                                <span>Pink</span> </a> <a href="#0" class="color-name red"> <span>Red</span>
                                                                            </a> <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                                            </a> <a href="#0" class="color-name blue">
                                                                                <span>Blue</span> </a> <a href="#0" class="color-name black">
                                                                                <span>Black</span> </a> </div>
                                                                        <div class="add-product">
                                                                            <h6>Qty:</h6>
                                                                            <div class="button-group">
                                                                                <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i class="flaticon-minus"></i>
                                                                                    </span> <input type="number" class="qtyValue" value="1">
                                                                                    <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                                                    </span> </div> <button class="btn--primary "> Add to Cart
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="payment-method"> <a href="#0"> <img src="assets/images/payment_method/method_1.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_2.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_3.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_4.png" alt=""> </a> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-grid-two-content text-center">
                                                        <span>Modern</span>
                                                        <h5><a href="shop-details-2.html">Outdoor Sports Shoes </a></h5>
                                                        <p>$159.00</p>
                                                        <p class="text"> Typi non habent claritatem insitam usus
                                                            legentis qui facit eorum claritatem Investigationes
                                                            demonstraverunt lectores legere mele lius quod legunt
                                                            saepius Claritas est etiam processus a capitalize on low
                                                            hanging </p>
                                                        <div class="product-grid-two__overlay-box">
                                                            <div class="title">
                                                                <h6><a href="cart.html">Add To Cart</a></h6>
                                                            </div>
                                                            <div class="icon">
                                                                <ul>
                                                                    <li><a href="#popupr111g" class="popup_link"><i class="flaticon-eye"></i></a> </li>
                                                                    <li><a href="wishlist.html"><i class="flaticon-heart"></i></a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="product-grid-two list mt-30">
                                                    <div class="product-grid-two__img"> <a href="shop-details-2.html" class="d-block"> <img src="assets/images/home-three/productss3-2.jpg" alt=""> </a> </div>
                                                    <div id="popupr1111gg" class="product-gird__quick-view-popup mfp-hide">
                                                        <div class="container">
                                                            <div class="row justify-content-between align-items-center">
                                                                <div class="col-lg-6">
                                                                    <div class="quick-view__left-content">
                                                                        <div class="tabs">
                                                                            <div class="popup-product-thumb-box">
                                                                                <ul>
                                                                                    <li class="tab-nav popup-product-thumb">
                                                                                        <a href="#tabr1111gg"> <img src="assets/images/shop/shop-grid-page-img9.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tabr2222gg"> <img src="assets/images/shop/shop-grid-page-img8.jpg" alt=""> </a> </li>
                                                                                    <li class="tab-nav popup-product-thumb ">
                                                                                        <a href="#tabr3333gg"> <img src="assets/images/shop/shop-grid-page-img8.jpg" alt=""> </a> </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="popup-product-main-image-box">
                                                                                <div id="tabr1111" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img9.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tabr2222" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img8.jpg" alt=""> </div>
                                                                                </div>
                                                                                <div id="tabr3333" class="tab-item popup-product-image">
                                                                                    <div class="popup-product-single-image">
                                                                                        <img src="assets/images/shop/shop-grid-page-img7.jpg" alt=""> </div>
                                                                                </div> <button class="prev"> <i class="flaticon-back"></i>
                                                                                </button> <button class="next"> <i class="flaticon-next"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="popup-right-content">
                                                                        <h3>Comfort Office Chair </h3>
                                                                        <div class="ratting"> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                                            <span>(123)</span> </div>
                                                                        <p class="text"> Wooden Tables to Brighten Your
                                                                            Dining Room </p>
                                                                        <div class="price">
                                                                            <h2> $40 USD <del> $99 USD</del></h2>
                                                                            <h6> In stuck</h6>
                                                                        </div>
                                                                        <div class="color-varient"> <a href="#0" class="color-name pink">
                                                                                <span>Pink</span> </a> <a href="#0" class="color-name red"> <span>Red</span>
                                                                            </a> <a href="#0" class="color-name yellow"><span>Yellow</span>
                                                                            </a> <a href="#0" class="color-name blue">
                                                                                <span>Blue</span> </a> <a href="#0" class="color-name black">
                                                                                <span>Black</span> </a> </div>
                                                                        <div class="add-product">
                                                                            <h6>Qty:</h6>
                                                                            <div class="button-group">
                                                                                <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i class="flaticon-minus"></i>
                                                                                    </span> <input type="number" class="qtyValue" value="1">
                                                                                    <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                                                    </span> </div> <button class="btn--primary "> Add to Cart
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="payment-method"> <a href="#0"> <img src="assets/images/payment_method/method_1.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_2.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_3.png" alt=""> </a> <a href="#0"> <img src="assets/images/payment_method/method_4.png" alt=""> </a> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-grid-two-content text-center">
                                                        <span>Modern</span>
                                                        <h5><a href="shop-details-2.html"> High Quality Sneakers </a>
                                                        </h5>
                                                        <p>$159.00</p>
                                                        <p class="text"> Typi non habent claritatem insitam usus
                                                            legentis qui facit eorum claritatem Investigationes
                                                            demonstraverunt lectores legere mele lius quod legunt
                                                            saepius Claritas est etiam processus a capitalize on low
                                                            hanging </p>
                                                        <div class="product-grid-two__overlay-box">
                                                            <div class="title">
                                                                <h6><a href="cart.html">Add To Cart</a></h6>
                                                            </div>
                                                            <div class="icon">
                                                                <ul>
                                                                    <li><a href="#popupr1111gg" class="popup_link"><i class="flaticon-eye"></i></a> </li>
                                                                    <li><a href="wishlist.html"><i class="flaticon-heart"></i></a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center wow fadeInUp animated">
                                <ul class="pagination text-center">
                                    <li class="next"><a href="#0"><i class="flaticon-left-arrows" aria-hidden="true"></i> </a></li>
                                    <li><a href="#0">1</a></li>
                                    <li><a href="#0" class="active">2</a></li>
                                    <li><a href="#0">3</a></li>
                                    <li><a href="#0">...</a></li>
                                    <li><a href="#0">10</a></li>
                                    <li class="next"><a href="#0"><i class="flaticon-next-1" aria-hidden="true"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End product-grid-->
    </main>

@endsection
