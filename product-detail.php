<?php include 'inc/app.php'; ?>
<!-- css file -->
<link rel="stylesheet" href="css/product-details.css">
<!-- css file -->
<!-- Inner banner section  -->


<!-- <section class="inner-banner-sec">
    <div class="inner-banner-img">
        <img class="img-fluid" src="img/cart.webp" alt="">
    </div>
    <div class="inner-stuff-all">
        <div class="inner-banner-head">
            <h2>Products</h2>
            <div class="inner-anchor">
                <a href="#">Home <span>></span> </a> <a href="#">Our products <span>></span></a> <a href="#">Products
                    detail page</a>
            </div>
        </div>
    </div>
    </div>
</section> -->
<!-- End of Inner banner section  -->
<!-- product detailed section starts here -->
<section class="product-details">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">

                <div id="aniimated-thumbnials" class="slider-for">


                    <a href="img/product1.jpg">
                        <img src="img/product1.jpg" />
                    </a>
                    <a href="img/product2.webp">
                        <img src="img/product2.webp" />
                    </a>
                    <a href="img/product3.webp">
                        <img src="img/product3.webp" />
                    </a>
                    <a href="img/product4.webp">
                        <img src="img/product4.webp" />
                    </a>

                </div>
                <div class="slider-nav">
                    <div class="item-slick">
                        <img src="img/product1.jpg" alt="Alt">
                    </div>
                    <div class="item-slick">
                        <img src="img/product2.webp" alt="Alt">
                    </div>
                    <div class="item-slick">
                        <img src="img/product3.webp" alt="Alt">
                    </div>
                    <div class="item-slick">
                        <img src="img/product4.webp" alt="Alt">
                    </div>
                </div>

            </div>
            <!-- <div class="col-lg-6">
                <div class="prodetail-wrapper">
                    <img src="img/blogpage1.webp" class="img-fluid" alt="">
                </div>
            </div> -->
            <div class="col-lg-6">
                <div class="pro-detail-content-wrapper">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, nostrum!</h2>
                    <div class="amazon-link-and-icons">
                        <ul>
                            <li>
                                <a href="#"><img src="img/facebook.svg" alt="" class="img-fluid"></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/twitter.svg" alt="" class="img-fluid"></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/plus.svg" alt="" class="img-fluid"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="details-wrap">
                        <div class="price">
                            <h2 class="sales-price">£132.00</h2>
                            <h4 class="regular-price"><strike>$45.99</strike></h4>
                        </div>

                        <div class="stock-wrapper">
                            <h5 class="stock-heading">Stock :</h5>
                            <h6 class="total-stock">10+ in stock</h6>
                        </div>
                        <div class="time-remaning">
                            <h5 class="time-heading">Time Remaining :</h5>
                            <h6 class="remainder-time">31 Days 16 Hours 29 mins</h6>
                        </div>
                        <div class="ratings-wrapper">
                            <h5 class="rating-heading">Ratings :</h5>
                            <ul>
                                <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </li>
                                <li>
                                    <span class="total-rating">4.5</span>
                                </li>
                            </ul>
                        </div>
                        <div class="quality-wrapper">
                            <h5 class="quality-heading">Quantity</h5>
                            <div class="number">
                                <span class="plus">+</span>
                                <input type="text" value="01" />
                                <span class="minus">-</span>
                            </div>
                        </div>
                        <div class="seller-detail">
                            <h5>Products Description</h5>
                            <h6 class="seller-name">dress Lorem ipsum dolor. </h6>
                        </div>
                    </div>
                    <div class="button-wrapper mt-4">
                        <button class="Add-to-Cart form-control">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product detailed section ends here -->
<!-- product description wrapper -->
<section class="product-description">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="content-wrapper">
                    <h4 class="des">Products Description</h4>
                    <p class="description-content">
                        40% discount
                    </p>
                    <ul>
                        <li>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                        </li>
                        <li>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                        </li>
                        <li>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                        </li>
                        <li>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product description wrapper -->
<!-- opinio section starts here -->
<section class="opinio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="content-wrapper">
                    <h2>What's Your Opinion About this Product</h2>
                    <form action="" method="post">
                        <input type="hidden" name="_token" value="uvLCJX7DM9sxoSAGNoN4Odq7TVLSv92uw8qVRE2S">     
                        <input type="hidden" name="product_id" value="76">
                        <div class="from-group">
                            <textarea name="comment" required class="form-control" placeholder="Product Review" id="" cols="30"
                                      rows="6"></textarea>
                        </div>
                        <div class="from-group row">
                            <div class="col-md-6">
                                <div class="dv-for-input">
                                    <input placeholder="Rating" type="text" value="Excellent" id="ratingTxt" readonly="read" class="form-control">
                                
                                <input type="hidden" value="5" name="rating" id="ratingField">
                                <div class="dv-stars starReview" id="rating">
                                    <ul class="ratingW">
                                        <li class="on"><a href="javascript:void(0);"><div class="star"></div></a></li>
                                        <li class="on"><a href="javascript:void(0);"><div class="star"></div></a></li>
                                        <li class="on"><a href="javascript:void(0);"><div class="star"></div></a></li>
                                        <li class="on"><a href="javascript:void(0);"><div class="star"></div></a></li>
                                        <li class="on"><a href="javascript:void(0);"><div class="star"></div></a></li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- opinio section end here -->


<?php include 'inc/footer.php'; ?>