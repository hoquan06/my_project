@extends('home_page.master')

@section('content')

<div class="breadcrumb-area mt-30">
    <div class="container">
        <div class="breadcrumb">
            <ul class="d-flex align-items-center">
                <li><a href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li class="active"><a href="product.html">Products</a></li>
            </ul>
        </div>
    </div>
    <!-- Container End -->
</div>

<div class="main-product-thumbnail ptb-100 ptb-sm-60">
    <div class="container">
        <div class="thumb-bg">
            <div class="row">
                <!-- Main Thumbnail Image Start -->
                <div class="col-lg-5 mb-all-40">
                    <!-- Thumbnail Large Image start -->
                    <div class="tab-content">
                        <div id="thumb1" class="tab-pane fade show active">
                            <a data-fancybox="images" href="{{ $sanPham->anh_dai_dien }}"><img src="{{ $sanPham->anh_dai_dien }}" alt="product-view"></a>
                        </div>
                        <div id="thumb2" class="tab-pane fade">
                            <a data-fancybox="images" href="{{ $sanPham->anh_dai_dien }}"><img src="{{ $sanPham->anh_dai_dien }}" alt="product-view"></a>
                        </div>
                        <div id="thumb3" class="tab-pane fade">
                            <a data-fancybox="images" href="{{ $sanPham->anh_dai_dien }}"><img src="{{ $sanPham->anh_dai_dien }}" alt="product-view"></a>
                        </div>
                        <div id="thumb4" class="tab-pane fade">
                            <a data-fancybox="images" href="/assets_homepage/{{ $sanPham->anh_dai_dien }}"><img src="/assets_homepage/{{ $sanPham->anh_dai_dien }}" alt="product-view"></a>
                        </div>
                        <div id="thumb5" class="tab-pane fade">
                            <a data-fancybox="images" href="/assets_homepage/{{ $sanPham->anh_dai_dien }}"><img src="/assets_homepage/{{ $sanPham->anh_dai_dien }}" alt="product-view"></a>
                        </div>
                    </div>
                    <!-- Thumbnail Large Image End -->
                    <!-- Thumbnail Image End -->
                    <div class="product-thumbnail mt-15">
                        <div class="thumb-menu owl-carousel nav tabs-area owl-loaded owl-drag" role="tablist">
                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 780px;"><div class="owl-item active" style="width: 140.833px; margin-right: 15px;"><a class="active" data-toggle="tab" href="#thumb1"><img src="{{ $sanPham->anh_dai_dien }}" alt="product-thumbnail"></a></div><div class="owl-item active" style="width: 140.833px; margin-right: 15px;"><a data-toggle="tab" href="#thumb2"><img src="{{ $sanPham->anh_dai_dien }}" alt="product-thumbnail"></a></div><div class="owl-item active" style="width: 140.833px; margin-right: 15px;"><a data-toggle="tab" href="#thumb3"><img src="{{ $sanPham->anh_dai_dien }}" alt="product-thumbnail"></a></div><div class="owl-item active" style="width: 140.833px; margin-right: 15px;"><a data-toggle="tab" href="#thumb4"><img src="/assets_homepage/{{ $sanPham->anh_dai_dien }}" alt="product-thumbnail"></a></div><div class="owl-item" style="width: 140.833px; margin-right: 15px;"><a data-toggle="tab" href="#thumb5"><img src="/assets_homepage/{{ $sanPham->anh_dai_dien }}" alt="product-thumbnail"></a></div></div></div><div class="owl-nav"><div class="owl-prev disabled"><i class="lnr lnr-arrow-left"></i></div><div class="owl-next"><i class="lnr lnr-arrow-right"></i></div></div><div class="owl-dots disabled"></div></div>
                    </div>
                    <!-- Thumbnail image end -->
                </div>
                <!-- Main Thumbnail Image End -->
                <!-- Thumbnail Description Start -->
                <div class="col-lg-7">
                    <div class="thubnail-desc fix">
                        <h3 class="product-header">{{ $sanPham->ten_san_pham }}</h3>
                        <div class="rating-summary fix mtb-10">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="rating-feedback">
                                <a href="#">(1 review)</a>
                                <a href="#">add to your review</a>
                            </div>
                        </div>
                        <div class="pro-price mtb-30">
                            <p class="d-flex align-items-center"><span class="prev-price">16.51</span><span class="price">$15.19</span><span class="saving-price">save 8%</span></p>
                        </div>
                        <p class="mb-20 pro-desc-details">Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                        <div class="product-size mb-20 clearfix">
                            <label>Size</label>
                            <select class="" style="display: none;">
                              <option>S</option>
                              <option>M</option>
                              <option>L</option>
                            </select><div class="nice-select" tabindex="0"><span class="current">S</span><ul class="list"><li data-value="S" class="option selected">S</li><li data-value="M" class="option">M</li><li data-value="L" class="option">L</li></ul></div>
                        </div>
                        <div class="color clearfix mb-20">
                            <label>color</label>
                            <ul class="color-list">
                                <li>
                                    <a class="orange active" href="#"></a>
                                </li>
                                <li>
                                    <a class="paste" href="#"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="box-quantity d-flex hot-product2">
                            <form action="#">
                                <input class="quantity mr-15" type="number" min="1" value="1">
                            </form>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="cart.html" title="" data-original-title="Add to Cart"> + Add To Cart</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="compare.html" title="" data-original-title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                    <a href="wishlist.html" title="" data-original-title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="pro-ref mt-20">
                            <p><span class="in-stock"><i class="ion-checkmark-round"></i> IN STOCK</span></p>
                        </div>
                        <div class="socila-sharing mt-25">
                            <ul class="d-flex">
                                <li>share</li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-official" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Thumbnail Description End -->
            </div>
            <!-- Row End -->
        </div>
    </div>
    <!-- Container End -->
</div>

<div class="thumnail-desc pb-100 pb-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ul class="main-thumb-desc nav tabs-area" role="tablist">
                    <li><a class="active" data-toggle="tab" href="#dtail">Product Details</a></li>
                    <li><a data-toggle="tab" href="#review">Reviews 1</a></li>
                </ul>
                <!-- Product Thumbnail Tab Content Start -->
                <div class="tab-content thumb-content border-default">
                    <div id="dtail" class="tab-pane fade show active">
                        <p>
                            {{ $sanPham->mo_ta_chi_tiet }}
                        </p>
                    </div>
                    <div id="review" class="tab-pane fade">
                        <!-- Reviews Start -->
                        <div class="review border-default universal-padding">
                            <div class="group-title">
                                <h2>customer review</h2>
                            </div>
                            <h4 class="review-mini-title">Truemart</h4>
                            <ul class="review-list">
                                <!-- Single Review List Start -->
                                <li>
                                    <span>Quality</span>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <label>Truemart</label>
                                </li>
                                <!-- Single Review List End -->
                                <!-- Single Review List Start -->
                                <li>
                                    <span>price</span>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <label>Review by <a href="https://themeforest.net/user/hastech">Truemart</a></label>
                                </li>
                                <!-- Single Review List End -->
                                <!-- Single Review List Start -->
                                <li>
                                    <span>value</span>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <label>Posted on 7/20/18</label>
                                </li>
                                <!-- Single Review List End -->
                            </ul>
                        </div>
                        <!-- Reviews End -->
                        <!-- Reviews Start -->
                        <div class="review border-default universal-padding mt-30">
                            <h2 class="review-title mb-30">You're reviewing: <br><span>Faded Short Sleeves T-shirt</span></h2>
                            <p class="review-mini-title">your rating</p>
                            <ul class="review-list">
                                <!-- Single Review List Start -->
                                <li>
                                    <span>Quality</span>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </li>
                                <!-- Single Review List End -->
                                <!-- Single Review List Start -->
                                <li>
                                    <span>price</span>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </li>
                                <!-- Single Review List End -->
                                <!-- Single Review List Start -->
                                <li>
                                    <span>value</span>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </li>
                                <!-- Single Review List End -->
                            </ul>
                            <!-- Reviews Field Start -->
                            <div class="riview-field mt-40">
                                <form autocomplete="off" action="#">
                                    <div class="form-group">
                                        <label class="req" for="sure-name">Nickname</label>
                                        <input type="text" class="form-control" id="sure-name" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label class="req" for="subject">Summary</label>
                                        <input type="text" class="form-control" id="subject" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label class="req" for="comments">Review</label>
                                        <textarea class="form-control" rows="5" id="comments" required="required"></textarea>
                                    </div>
                                    <button type="submit" class="customer-btn">Submit Review</button>
                                </form>
                            </div>
                            <!-- Reviews Field Start -->
                        </div>
                        <!-- Reviews End -->
                    </div>
                </div>
                <!-- Product Thumbnail Tab Content End -->
            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>

<div class="hot-deal-products off-white-bg pt-100 pb-90 pt-sm-60 pb-sm-50">
    <div class="container">
       <!-- Product Title Start -->
       <div class="post-title pb-30">
           <h2>Realted Products</h2>
       </div>
       <!-- Product Title End -->
        <!-- Hot Deal Product Activation Start -->
        <div class="hot-deal-active owl-carousel">
            <!-- Single Product Start -->
            <div class="single-product">
                <!-- Product Image Start -->
                <div class="pro-img">
                    <a href="product.html">
                        <img class="primary-img" src="{{ $sanPham->anh_dai_dien }}" alt="single-product">
                        <img class="secondary-img" src="{{ $sanPham->anh_dai_dien }}" alt="single-product">
                    </a>
                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                </div>
                <!-- Product Image End -->
                <!-- Product Content Start -->
                <div class="pro-content">
                    <div class="pro-info">
                        <h4><a href="product.html">Eames and Vortex Side</a></h4>
                        <p><span class="price">$160.45</span></p>
                    </div>
                    <div class="pro-actions">
                        <div class="actions-primary">
                            <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                        </div>
                        <div class="actions-secondary">
                            <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                            <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                        </div>
                    </div>
                </div>
                <!-- Product Content End -->
                <span class="sticker-new">new</span>
            </div>
            <!-- Single Product End -->
            <!-- Single Product Start -->
            <div class="single-product">
                <!-- Product Image Start -->
                <div class="pro-img">
                    <a href="product.html">
                        <img class="primary-img" src="{{ $sanPham->anh_dai_dien }}" alt="single-product">
                        <img class="secondary-img" src="{{ $sanPham->anh_dai_dien }}" alt="single-product">
                    </a>
                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                </div>
                <!-- Product Image End -->
                <!-- Product Content Start -->
                <div class="pro-content">
                    <div class="pro-info">
                        <h4><a href="product.html">Work Lamp Silver Proin</a></h4>
                        <p><span class="price">$320.45</span> <del class="prev-price">$330.50</del></p>
                        <div class="label-product l_sale">15<span class="symbol-percent">%</span></div>
                    </div>
                    <div class="pro-actions">
                        <div class="actions-primary">
                            <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                        </div>
                        <div class="actions-secondary">
                            <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                            <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                        </div>
                    </div>
                </div>
                <!-- Product Content End -->
            </div>
            <!-- Single Product End -->
             <!-- Single Product Start -->
            <div class="single-product">
                <!-- Product Image Start -->
                <div class="pro-img">
                    <a href="product.html">
                        <img class="primary-img" src="{{ $sanPham->anh_dai_dien }}" alt="single-product">
                        <img class="secondary-img" src="{{ $sanPham->anh_dai_dien }}" alt="single-product">
                    </a>
                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                </div>
                <!-- Product Image End -->
                <!-- Product Content Start -->
                <div class="pro-content">
                    <div class="pro-info">
                        <h4><a href="product.html">Gpoly and Bark Eames Style</a></h4>
                        <p><span class="price">$150.30</span> <del class="prev-price">$105.50</del></p>
                        <div class="label-product l_sale">22<span class="symbol-percent">%</span></div>
                    </div>
                    <div class="pro-actions">
                        <div class="actions-primary">
                            <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                        </div>
                        <div class="actions-secondary">
                            <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                            <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                        </div>
                    </div>
                </div>
                <!-- Product Content End -->
            </div>
            <!-- Single Product End -->
            <!-- Single Product Start -->
            <div class="single-product">
                <!-- Product Image Start -->
                <div class="pro-img">
                    <a href="product.html">
                        <img class="primary-img" src="{{ $sanPham->anh_dai_dien }}" alt="single-product">
                        <img class="secondary-img" src="{{ $sanPham->anh_dai_dien }}" alt="single-product">
                    </a>
                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                </div>
                <!-- Product Image End -->
                <!-- Product Content Start -->
                <div class="pro-content">
                    <div class="pro-info">
                        <h4><a href="product.html">Poly and Bark Vortex Side</a></h4>
                        <p><span class="price">$90.45</span></p>
                    </div>
                    <div class="pro-actions">
                        <div class="actions-primary">
                            <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                        </div>
                        <div class="actions-secondary">
                            <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                            <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                        </div>
                    </div>
                </div>
                <!-- Product Content End -->
                <span class="sticker-new">new</span>
            </div>
        </div>
    </div>
</div>

@endsection
