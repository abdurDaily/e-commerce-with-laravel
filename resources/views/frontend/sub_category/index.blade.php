@extends('frontend_layout')
@section('front_end_contains')


<div id="wrapper">

    <section class="flat-spacing-2 pt-0">
        <div class="container">
            <div class="tf-shop-control">
                <div class="tf-group-filter">
                    <a href="shop-sub-collection.html#filterShop" data-bs-toggle="offcanvas" aria-controls="filterShop" class="tf-btn-filter">
                        <span class="icon icon-filter"></span><span class="text">Filter</span></a>
                    <div class="tf-dropdown-sort" data-bs-toggle="dropdown">
                        <div class="btn-select">
                            <span class="text-sort-value">Best selling</span>
                            <span class="icon icon-arr-down"></span>
                        </div>
                        <div class="dropdown-menu">
                            <div class="select-item active" data-sort-value="best-selling">
                                <span class="text-value-item">Best selling</span>
                            </div>
                            <div class="select-item" data-sort-value="a-z">
                                <span class="text-value-item">Alphabetically, A-Z</span>
                            </div>
                            <div class="select-item" data-sort-value="z-a">
                                <span class="text-value-item">Alphabetically, Z-A</span>
                            </div>
                            <div class="select-item" data-sort-value="price-low-high">
                                <span class="text-value-item">Price, low to high</span>
                            </div>
                            <div class="select-item" data-sort-value="price-high-low">
                                <span class="text-value-item">Price, high to low</span>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="tf-control-layout">
                    <li class="tf-view-layout-switch sw-layout-list list-layout" data-value-layout="list">
                        <div class="item icon-list">
                            <span></span>
                            <span></span>
                        </div>
                    </li>
                    <li class="tf-view-layout-switch sw-layout-2" data-value-layout="tf-col-2">
                        <div class="item icon-grid-2">
                            <span></span>
                            <span></span>
                        </div>
                    </li>
                    <li class="tf-view-layout-switch sw-layout-3" data-value-layout="tf-col-3">
                        <div class="item icon-grid-3">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </li>
                    <li class="tf-view-layout-switch sw-layout-4 active" data-value-layout="tf-col-4">
                        <div class="item icon-grid-4">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </li>

                </ul>
            </div>
            <div class="wrapper-control-shop gridLayout-wrapper">
                <div class="meta-filter-shop" style="display: none;">
                    <div id="product-count-grid" class="count-text"><span class="count">16</span> Products found</div>
                    <div id="product-count-list" class="count-text"><span class="count">5</span> Products found</div>
                    <div id="applied-filters"></div>
                    <button id="remove-all" class="remove-all-filters" style="display: none;"><i class="icon icon-close"></i> Clear all filter</button>
                </div>
                <div class="tf-list-layout wrapper-shop" id="listLayout" style="display: none;">
                    <!-- Card Product 1 -->
                    <div class="card-product style-list" data-availability="In stock" data-brand="Vineta">
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="img-product lazyload" data-src="images/products/fashion/product-16.jpg" src="images/products/fashion/product-16.jpg" alt="image-product">
                                <img class="img-hover lazyload" data-src="images/products/fashion/product-9.jpg" src="images/products/fashion/product-9.jpg" alt="image-product">
                            </a>
                            <div class="on-sale-wrap"><span class="on-sale-item">20% Off</span></div>
                        </div>
                        <div class="card-product-info">
                            <div class="info-list">
                                <a href="product-detail.html" class="name-product link fw-medium text-md">Graphic
                                    Printed Pure Cotton T-shirt</a>
                                <p class="price-wrap fw-medium text-md">
                                    <span class="price-new text-primary">$50.00</span>
                                    <span class="price-old">$70.00</span>
                                </p>
                                <p class="desc text-sm text-main text-line-clamp-2">
                                    Product Specifications Care for fiber: 30% more recycled polyester. We label
                                    garments
                                    manufactured using environmentally friendly technologies and raw materials with
                                    the
                                    Join
                                    Life label.
                                </p>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch hover-tooltip active">
                                        <span class="tooltip color-filter">Yellow</span>
                                        <span class="swatch-value bg-light-orange-2"></span>
                                        <img class="lazyload" data-src="images/products/fashion/product-16.jpg" src="images/products/fashion/product-16.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch hover-tooltip">
                                        <span class="tooltip color-filter">Black</span>
                                        <span class="swatch-value bg-dark"></span>
                                        <img class=" lazyload" data-src="images/products/fashion/product-9.jpg" src="images/products/fashion/product-9.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch hover-tooltip">
                                        <span class="tooltip color-filter">Grey</span>
                                        <span class="swatch-value bg-grey-4"></span>
                                        <img class=" lazyload" data-src="images/products/fashion/product-4.jpg" src="images/products/fashion/product-7.jpg" alt="image-product">
                                    </li>
                                </ul>
                                <ul class="size-box">
                                    <li class="size-item text-xs">S</li>
                                    <li class="size-item text-xs">M</li>
                                    <li class="size-item text-xs">L</li>
                                    <li class="size-item text-xs">XL</li>
                                </ul>
                            </div>
                            <div class="list-product-btn">
                                <a href="shop-sub-collection.html#shoppingCart" data-bs-toggle="offcanvas" class="tf-btn btn-main-product add-to-cart animate-btn">Add
                                    To
                                    cart</a>
                                <a href="javascript:void(0);" class="box-icon wishlist hover-tooltip">
                                    <span class="icon icon-heart2"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                </a>
                                <a href="shop-sub-collection.html#quickView" data-bs-toggle="modal" class="box-icon hover-tooltip quickview">
                                    <span class="icon icon-view"></span>
                                    <span class="tooltip">Quick View</span>
                                </a>
                                <a href="shop-sub-collection.html#compare" data-bs-toggle="modal" aria-controls="compare" class="box-icon compare hover-tooltip">
                                    <span class="icon icon-compare"></span>
                                    <span class="tooltip">Add to Compare</span>
                                </a>
                            </div>

                        </div>
                    </div>
                    <!-- Card Product 2 -->
                    <div class="card-product style-list" data-availability="In stock" data-brand="Vineta">
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="img-product lazyload" data-src="images/products/fashion/product-17.jpg" src="images/products/fashion/product-17.jpg" alt="image-product">
                                <img class="img-hover lazyload" data-src="images/products/fashion/product-19.jpg" src="images/products/fashion/product-19.jpg" alt="image-product">
                            </a>
                        </div>
                        <div class="card-product-info">
                            <div class="info-list">
                                <a href="product-detail.html" class="name-product link fw-medium text-md">Graphic
                                    Printed Drop Shoulder Sleeves</a>
                                <p class="price-wrap fw-medium text-md">
                                    <span class="price-new">$80.00</span>
                                </p>
                                <p class="desc text-sm text-main text-line-clamp-2">
                                    Product Specifications Care for fiber: 30% more recycled polyester. We label
                                    garments
                                    manufactured using environmentally friendly technologies and raw materials with
                                    the
                                    Join
                                    Life label.
                                </p>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch hover-tooltip line active">
                                        <span class="tooltip color-filter">White</span>
                                        <span class="swatch-value bg-white"></span>
                                        <img class="lazyload" data-src="images/products/fashion/product-17.jpg" src="images/products/fashion/product-17.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch hover-tooltip">
                                        <span class="tooltip color-filter">Dark Green</span>
                                        <span class="swatch-value bg-dark-green"></span>
                                        <img class=" lazyload" data-src="images/products/fashion/product-21.jpg" src="images/products/fashion/product-21.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch hover-tooltip">
                                        <span class="tooltip color-filter">Grey</span>
                                        <span class="swatch-value bg-grey-4"></span>
                                        <img class="lazyload" data-src="images/products/fashion/product-19.jpg" src="images/products/fashion/product-19.jpg" alt="image-product">
                                    </li>
                                </ul>
                                <ul class="size-box">
                                    <li class="size-item text-xs">S</li>
                                    <li class="size-item text-xs">M</li>
                                    <li class="size-item text-xs">L</li>
                                    <li class="size-item text-xs">XL</li>
                                </ul>
                            </div>
                            <div class="list-product-btn">
                                <a href="shop-sub-collection.html#shoppingCart" data-bs-toggle="offcanvas" class="tf-btn btn-main-product add-to-cart animate-btn">Add
                                    To
                                    cart</a>
                                <a href="javascript:void(0);" class="box-icon wishlist hover-tooltip">
                                    <span class="icon icon-heart2"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                </a>
                                <a href="shop-sub-collection.html#quickView" data-bs-toggle="modal" class="box-icon hover-tooltip quickview">
                                    <span class="icon icon-view"></span>
                                    <span class="tooltip">Quick View</span>
                                </a>
                                <a href="shop-sub-collection.html#compare" data-bs-toggle="modal" aria-controls="compare" class="box-icon compare hover-tooltip">
                                    <span class="icon icon-compare"></span>
                                    <span class="tooltip">Add to Compare</span>
                                </a>
                            </div>

                        </div>
                    </div>
                    <!-- Card Product 3 -->
                    <div class="card-product style-list" data-availability="In stock" data-brand="Vineta">
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="img-product lazyload" data-src="images/products/fashion/women-grey-2.jpg" src="images/products/fashion/women-grey-2.jpg" alt="image-product">
                                <img class="img-hover lazyload" data-src="images/products/fashion/women-grey-1.jpg" src="images/products/fashion/women-grey-1.jpg" alt="image-product">
                            </a>
                            <div class="on-sale-wrap"><span class="on-sale-item">10% Off</span></div>
                        </div>
                        <div class="card-product-info">
                            <div class="info-list">
                                <a href="product-detail.html" class="name-product link fw-medium text-md">Women
                                    Solid Scoop Neck Slim Fit T-shirt</a>
                                <p class="price-wrap fw-medium text-md">
                                    <span class="price-new text-primary">$80.00</span>
                                    <span class="price-old">$90.00</span>
                                </p>
                                <p class="desc text-sm text-main text-line-clamp-2">
                                    Product Specifications Care for fiber: 30% more recycled polyester. We label
                                    garments
                                    manufactured using environmentally friendly technologies and raw materials with
                                    the
                                    Join
                                    Life label.
                                </p>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch hover-tooltip active">
                                        <span class="tooltip color-filter">Grey</span>
                                        <span class="swatch-value bg-grey-4"></span>
                                        <img class="lazyload" data-src="images/products/fashion/women-grey-2.jpg" src="images/products/fashion/women-grey-2.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch hover-tooltip">
                                        <span class="tooltip color-filter">Yellow</span>
                                        <span class="swatch-value bg-yellow"></span>
                                        <img class="lazyload" data-src="images/products/fashion/women-yellow-2.jpg" src="images/products/fashion/women-yellow-2.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch hover-tooltip">
                                        <span class="tooltip color-filter">Light Grey</span>
                                        <span class="swatch-value bg-light-blue-2"></span>
                                        <img class="lazyload" data-src="images/products/fashion/women-light-blue-1.jpg" src="images/products/fashion/women-light-blue-1.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                            <div class="list-product-btn">
                                <a href="shop-sub-collection.html#shoppingCart" data-bs-toggle="offcanvas" class="tf-btn btn-main-product add-to-cart animate-btn">Add
                                    To
                                    cart</a>
                                <a href="javascript:void(0);" class="box-icon wishlist hover-tooltip">
                                    <span class="icon icon-heart2"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                </a>
                                <a href="shop-sub-collection.html#quickView" data-bs-toggle="modal" class="box-icon hover-tooltip quickview">
                                    <span class="icon icon-view"></span>
                                    <span class="tooltip">Quick View</span>
                                </a>
                                <a href="shop-sub-collection.html#compare" data-bs-toggle="modal" aria-controls="compare" class="box-icon compare hover-tooltip">
                                    <span class="icon icon-compare"></span>
                                    <span class="tooltip">Add to Compare</span>
                                </a>
                            </div>

                        </div>
                    </div>
                    <!-- Card Product 4 -->
                    <div class="card-product style-list" data-availability="Out of stock" data-brand="Zotac">
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="img-product lazyload" data-src="images/products/fashion/product-18.jpg" src="images/products/fashion/product-18.jpg" alt="image-product">
                                <img class="img-hover lazyload" data-src="images/products/fashion/product-12.jpg" src="images/products/fashion/product-12.jpg" alt="image-product">
                            </a>
                        </div>
                        <div class="card-product-info">
                            <div class="info-list">
                                <a href="product-detail.html" class="name-product link fw-medium text-md">Asymmetric
                                    Neck Tank Top</a>
                                <p class="price-wrap fw-medium text-md">
                                    <span class="price-new">$85.00</span>
                                </p>
                                <p class="desc text-sm text-main text-line-clamp-2">
                                    Product Specifications Care for fiber: 30% more recycled polyester. We label
                                    garments
                                    manufactured using environmentally friendly technologies and raw materials with
                                    the
                                    Join
                                    Life label.
                                </p>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch hover-tooltip active">
                                        <span class="tooltip color-filter">Light Orange</span>
                                        <span class="swatch-value bg-light-orange"></span>
                                        <img class="lazyload" data-src="images/products/fashion/product-18.jpg" src="images/products/fashion/product-18.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch hover-tooltip">
                                        <span class="tooltip color-filter">Black</span>
                                        <span class="swatch-value bg-dark"></span>
                                        <img class="lazyload" data-src="images/products/fashion/women-black-6.jpg" src="images/products/fashion/women-black-6.jpg" alt="image-product">
                                    </li>

                                </ul>
                                <ul class="size-box">
                                    <li class="size-item text-xs">S</li>
                                    <li class="size-item text-xs">M</li>
                                    <li class="size-item text-xs">L</li>
                                    <li class="size-item text-xs">XL</li>
                                </ul>
                            </div>
                            <div class="list-product-btn">
                                <a href="shop-sub-collection.html#shoppingCart" data-bs-toggle="offcanvas" class="tf-btn btn-main-product animate-btn add-to-cart">Add
                                    To
                                    cart</a>
                                <a href="javascript:void(0);" class="box-icon wishlist hover-tooltip">
                                    <span class="icon icon-heart2"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                </a>
                                <a href="shop-sub-collection.html#quickView" data-bs-toggle="modal" class="box-icon hover-tooltip quickview">
                                    <span class="icon icon-view"></span>
                                    <span class="tooltip">Quick View</span>
                                </a>
                                <a href="shop-sub-collection.html#compare" data-bs-toggle="modal" aria-controls="compare" class="box-icon compare hover-tooltip">
                                    <span class="icon icon-compare"></span>
                                    <span class="tooltip">Add to Compare</span>
                                </a>
                            </div>

                        </div>
                    </div>
                    <!-- Card Product 5 -->
                    <div class="card-product style-list" data-availability="Out of stock" data-brand="Zotac">
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="img-product lazyload" data-src="images/products/fashion/product-15.jpg" src="images/products/fashion/product-15.jpg" alt="image-product">
                                <img class="img-hover lazyload" data-src="images/products/fashion/product-1.jpg" src="images/products/fashion/product-1.jpg" alt="image-product">
                            </a>
                        </div>
                        <div class="card-product-info">
                            <div class="info-list">
                                <a href="product-detail.html" class="name-product link fw-medium text-md">Short
                                    Sleeve Sweat</a>
                                <p class="price-wrap fw-medium text-md">
                                    <span class="price-new">$55.00</span>
                                </p>
                                <p class="desc text-sm text-main text-line-clamp-2">
                                    Product Specifications Care for fiber: 30% more recycled polyester. We label
                                    garments
                                    manufactured using environmentally friendly technologies and raw materials with
                                    the
                                    Join
                                    Life label.
                                </p>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch hover-tooltip active">
                                        <span class="tooltip color-filter">Light Pink</span>
                                        <span class="swatch-value bg-light-pink-4"></span>
                                        <img class="lazyload" data-src="images/products/fashion/product-15.jpg" src="images/products/fashion/product-15.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch hover-tooltip line">
                                        <span class="tooltip color-filter">White</span>
                                        <span class="swatch-value bg-white"></span>
                                        <img class="lazyload" data-src="images/products/fashion/product-1.jpg" src="images/products/fashion/product-1.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch hover-tooltip">
                                        <span class="tooltip color-filter">Light Grey</span>
                                        <span class="swatch-value bg-grey-4"></span>
                                        <img class="lazyload" data-src="images/products/fashion/product-19.jpg" src="images/products/fashion/product-19.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                            <div class="list-product-btn">
                                <a href="shop-sub-collection.html#shoppingCart" data-bs-toggle="offcanvas" class="tf-btn btn-main-product add-to-cart animate-btn">Add
                                    To
                                    cart</a>
                                <a href="javascript:void(0);" class="box-icon wishlist hover-tooltip">
                                    <span class="icon icon-heart2"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                </a>
                                <a href="shop-sub-collection.html#quickView" data-bs-toggle="modal" class="box-icon hover-tooltip quickview">
                                    <span class="icon icon-view"></span>
                                    <span class="tooltip">Quick View</span>
                                </a>
                                <a href="shop-sub-collection.html#compare" data-bs-toggle="modal" aria-controls="compare" class="box-icon compare hover-tooltip">
                                    <span class="icon icon-compare"></span>
                                    <span class="tooltip">Add to Compare</span>
                                </a>
                            </div>

                        </div>
                    </div>
                    <!-- Pagination -->
                    <ul class="wg-pagination">
                        <li class="active">
                            <div class="pagination-item">1</div>
                        </li>
                        <li>
                            <a href="shop-sub-collection.html#" class="pagination-item">2</a>
                        </li>
                        <li>
                            <a href="shop-sub-collection.html#" class="pagination-item">3</a>
                        </li>
                        <li>
                            <a href="shop-sub-collection.html#" class="pagination-item"><i class="icon-arr-right2"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="wrapper-shop tf-grid-layout tf-col-4" id="gridLayout">
                    <!-- Card Product 1 -->
                    <div class="card-product grid style-1 card-product-size" data-availability="In stock" data-brand="Vineta">
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="img-product ls-is-cached lazyloaded" data-src="images/products/fashion/product-19.jpg" src="images/products/fashion/product-19.jpg" alt="image-product">
                                <img class="img-hover ls-is-cached lazyloaded" data-src="images/products/fashion/women-grey-2.jpg" src="images/products/fashion/women-grey-2.jpg" alt="image-product">
                            </a>
                            <div class="on-sale-wrap"><span class="on-sale-item">20% Off</span></div>
                            <ul class="list-product-btn">
                                <li>
                                    <a href="shop-sub-collection.html#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-cart2"></span>
                                        <span class="tooltip">Add to Cart</span>
                                    </a>
                                </li>
                                <li class="wishlist">
                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-heart2"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-sub-collection.html#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon quickview">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li class="compare">
                                    <a href="shop-sub-collection.html#compare" data-bs-toggle="modal" aria-controls="compare" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="size-box">
                                <li class="size-item text-xs text-white">XS</li>
                                <li class="size-item text-xs text-white">S</li>
                                <li class="size-item text-xs text-white">M</li>
                                <li class="size-item text-xs text-white">L</li>
                                <li class="size-item text-xs text-white">XL</li>
                                <li class="size-item text-xs text-white">2XL</li>
                            </ul>

                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.html" class="name-product link fw-medium text-md">Loose Fit
                                Tee</a>
                            <p class="price-wrap fw-medium">
                                <span class="price-new text-primary">$120.00</span>
                                <span class="price-old">$150.00</span>
                            </p>
                            <ul class="list-color-product">
                                <li class="list-color-item hover-tooltip tooltip-bot color-swatch active">
                                    <span class="tooltip color-filter">Grey</span>
                                    <span class="swatch-value bg-grey-4"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/product-19.jpg" src="images/products/fashion/product-19.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                    <span class="tooltip color-filter">Black</span>
                                    <span class="swatch-value bg-dark"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/product-9.jpg" src="images/products/fashion/product-9.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot line">
                                    <span class="tooltip color-filter">White</span>
                                    <span class="swatch-value bg-white"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/product-4.jpg" src="images/products/fashion/product-4.jpg" alt="image-product">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card Product 2 -->
                    <div class="card-product grid style-1 out-of-stock" data-availability="Out of stock" data-brand="Zotac">
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="img-product ls-is-cached lazyloaded" data-src="images/products/fashion/product-2.jpg" src="images/products/fashion/product-2.jpg" alt="image-product">
                                <img class="img-hover ls-is-cached lazyloaded" data-src="images/products/fashion/product-2.jpg" src="images/products/fashion/product-2.jpg" alt="image-product">
                            </a>
                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.html" class="name-product link fw-medium text-md">Regular Fit
                                Pima Cotton Polo Shirt</a>
                            <p class="price-wrap fw-medium">
                                <span class="price-new">$130.00</span>
                            </p>

                        </div>
                    </div>
                    <!-- Card Product 3 -->
                    <div class="card-product grid style-1 card-product-size" data-availability="In stock" data-brand="Vineta">
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="img-product ls-is-cached lazyloaded" data-src="images/products/fashion/product-3.jpg" src="images/products/fashion/product-3.jpg" alt="image-product">
                                <img class="img-hover ls-is-cached lazyloaded" data-src="images/products/fashion/product-4.jpg" src="images/products/fashion/product-4.jpg" alt="image-product">
                            </a>
                            <ul class="list-product-btn">
                                <li>
                                    <a href="shop-sub-collection.html#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-cart2"></span>
                                        <span class="tooltip">Add to Cart</span>
                                    </a>
                                </li>
                                <li class="wishlist">
                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-heart2"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-sub-collection.html#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon quickview">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li class="compare">
                                    <a href="shop-sub-collection.html#compare" data-bs-toggle="modal" aria-controls="compare" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="countdown-box">
                                <div class="js-countdown" data-timer="1007500" data-labels="D  :,H  :,M  :,S"><div aria-hidden="true" class="countdown__timer"><span class="countdown__item"><span class="countdown__value countdown__value--0 js-countdown__value--0">11</span><span class="countdown__label">D  :</span></span><span class="countdown__item"><span class="countdown__value countdown__value--1 js-countdown__value--1">15</span><span class="countdown__label">H  :</span></span><span class="countdown__item"><span class="countdown__value countdown__value--2 js-countdown__value--2">2</span><span class="countdown__label">M  :</span></span><span class="countdown__item"><span class="countdown__value countdown__value--3 js-countdown__value--3">35</span><span class="countdown__label">S</span></span></div></div>
                            </div>
                            <ul class="size-box">
                                <li class="size-item text-xs text-white">S</li>
                                <li class="size-item text-xs text-white">M</li>
                                <li class="size-item text-xs text-white">L</li>
                                <li class="size-item text-xs text-white">XL</li>
                            </ul>

                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.html" class="name-product link fw-medium text-md">Long Regular
                                Fit Tee</a>
                            <p class="price-wrap fw-medium">
                                <span class="price-new text-primary">$60.00</span>
                                <span class="price-old">$70.00</span>
                            </p>
                            <ul class="list-color-product">
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                    <span class="tooltip color-filter">Yellow</span>
                                    <span class="swatch-value bg-yellow"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/product-3.jpg" src="images/products/fashion/product-3.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                    <span class="tooltip color-filter">Grey</span>
                                    <span class="swatch-value bg-grey-4"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/product-6.jpg" src="images/products/fashion/product-6.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot line">
                                    <span class="tooltip color-filter">White</span>
                                    <span class="swatch-value bg-white"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/product-4.jpg" src="images/products/fashion/product-4.jpg" alt="image-product">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card Product 4 -->
                    <div class="card-product grid style-1 card-product-size" data-availability="In stock" data-brand="Vineta">
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="img-product ls-is-cached lazyloaded" data-src="images/products/fashion/product-17.jpg" src="images/products/fashion/product-17.jpg" alt="image-product">
                                <img class="img-hover ls-is-cached lazyloaded" data-src="images/products/fashion/product-1.jpg" src="images/products/fashion/product-1.jpg" alt="image-product">
                            </a>
                            <ul class="list-product-btn">
                                <li>
                                    <a href="shop-sub-collection.html#shoppingCart" data-bs-toggle="offcanvas" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-cart2"></span>
                                        <span class="tooltip">Add to Cart</span>
                                    </a>
                                </li>
                                <li class="wishlist">
                                    <a href="javascript:void(0);" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-heart2"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-sub-collection.html#quickView" data-bs-toggle="modal" class="box-icon quickview hover-tooltip tooltip-left">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li class="compare">
                                    <a href="shop-sub-collection.html#compare" data-bs-toggle="modal" aria-controls="compare" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="size-box">
                                <li class="size-item text-xs text-white">S</li>
                                <li class="size-item text-xs text-white">M</li>
                                <li class="size-item text-xs text-white">L</li>
                            </ul>

                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.html" class="name-product link fw-medium text-md">Regular Fit
                                Pima Cotton Polo Shirt</a>
                            <p class="price-wrap fw-medium">
                                <span class="price-new text-primary">$80.00</span>
                                <span class=" price-old">$100.00</span>
                            </p>
                            <ul class="list-color-product">
                                <li class="list-color-item color-swatch active hover-tooltip tooltip-bot line">
                                    <span class="tooltip color-filter">White</span>
                                    <span class="swatch-value bg-white"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/product-17.jpg" src="images/products/fashion/product-17.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                    <span class="tooltip color-filter">Light Orange</span>
                                    <span class="swatch-value bg-light-orange"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/product-16.jpg" src="images/products/fashion/product-16.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                    <span class="tooltip color-filter">Light Grey</span>
                                    <span class="swatch-value bg-grey-4"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/product-5.jpg" src="images/products/fashion/product-5.jpg" alt="image-product">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card Product 5 -->
                    <div class="card-product grid style-1 card-product-size" data-availability="In stock" data-brand="Vineta">
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="img-product ls-is-cached lazyloaded" data-src="images/products/fashion/product-25.jpg" src="images/products/fashion/product-25.jpg" alt="image-product">
                                <img class="img-hover ls-is-cached lazyloaded" data-src="images/products/fashion/product-24.jpg" src="images/products/fashion/product-24.jpg" alt="image-product">
                            </a>
                            <ul class="list-product-btn">
                                <li>
                                    <a href="shop-sub-collection.html#shoppingCart" data-bs-toggle="offcanvas" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-cart2"></span>
                                        <span class="tooltip">Add to Cart</span>
                                    </a>
                                </li>
                                <li class="wishlist">
                                    <a href="javascript:void(0);" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-heart2"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-sub-collection.html#quickView" data-bs-toggle="modal" class="box-icon quickview hover-tooltip tooltip-left">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li class="compare">
                                    <a href="shop-sub-collection.html#compare" data-bs-toggle="modal" aria-controls="compare" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="size-box">
                                <li class="size-item text-xs text-white">XS</li>
                                <li class="size-item text-xs text-white">M</li>
                                <li class="size-item text-xs text-white">XL</li>
                            </ul>

                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.html" class="name-product link fw-medium text-md">Midi Knit
                                Dress</a>
                            <p class="price-wrap fw-medium">
                                <span class="price-new text-primary">$40.00</span>
                                <span class=" price-old">$60.00</span>
                            </p>
                            <ul class="list-color-product">
                                <li class="list-color-item color-swatch active hover-tooltip tooltip-bot">
                                    <span class="tooltip color-filter">Beige</span>
                                    <span class="swatch-value bg-beige"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/product-25.jpg" src="images/products/fashion/product-25.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                    <span class="tooltip color-filter">Black</span>
                                    <span class="swatch-value bg-dark"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/product-22.jpg" src="images/products/fashion/product-22.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                    <span class="tooltip color-filter">Grey</span>
                                    <span class="swatch-value bg-grey-4"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/women-grey-2.jpg" src="images/products/fashion/women-grey-2.jpg" alt="image-product">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card Product 6 -->
                    <div class="card-product grid style-1 card-product-size" data-availability="In stock" data-brand="Vineta">
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="img-product ls-is-cached lazyloaded" data-src="images/products/fashion/product-6.jpg" src="images/products/fashion/product-6.jpg" alt="image-product">
                                <img class="img-hover ls-is-cached lazyloaded" data-src="images/products/fashion/product-21.jpg" src="images/products/fashion/product-21.jpg" alt="image-product">
                            </a>
                            <ul class="list-product-btn">
                                <li>
                                    <a href="shop-sub-collection.html#shoppingCart" data-bs-toggle="offcanvas" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-cart2"></span>
                                        <span class="tooltip">Add to Cart</span>
                                    </a>
                                </li>
                                <li class="wishlist">
                                    <a href="javascript:void(0);" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-heart2"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-sub-collection.html#quickView" data-bs-toggle="modal" class="box-icon quickview hover-tooltip tooltip-left">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li class="compare">
                                    <a href="shop-sub-collection.html#compare" data-bs-toggle="modal" aria-controls="compare" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="size-box">
                                <li class="size-item text-xs text-white">XS</li>
                                <li class="size-item text-xs text-white">S</li>
                                <li class="size-item text-xs text-white">M</li>
                                <li class="size-item text-xs text-white">L</li>
                            </ul>

                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.html" class="name-product link fw-medium text-md">Oversized Fit
                                Tee</a>
                            <p class="price-wrap fw-medium">
                                <span class="price-new text-primary">$60.00</span>
                                <span class="price-old">$180.00</span>
                            </p>
                            <ul class="list-color-product">
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot line active">
                                    <span class="tooltip color-filter">White</span>
                                    <span class="swatch-value bg-white"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/product-6.jpg" src="images/products/fashion/product-6.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                    <span class="tooltip color-filter">Dark Green</span>
                                    <span class="swatch-value bg-dark-green"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/product-21.jpg" src="images/products/fashion/product-21.jpg" alt="image-product">
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- Card Product 7 -->
                    <div class="card-product grid style-1" data-availability="In stock" data-brand="Zotac">
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="img-product ls-is-cached lazyloaded" data-src="images/products/fashion/women-yellow-2.jpg" src="images/products/fashion/women-yellow-2.jpg" alt="image-product">
                                <img class="img-hover ls-is-cached lazyloaded" data-src="images/products/fashion/product-28.jpg" src="images/products/fashion/product-28.jpg" alt="image-product">
                            </a>
                            <ul class="list-product-btn">
                                <li>
                                    <a href="shop-sub-collection.html#shoppingCart" data-bs-toggle="offcanvas" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-cart2"></span>
                                        <span class="tooltip">Add to Cart</span>
                                    </a>
                                </li>
                                <li class="wishlist">
                                    <a href="javascript:void(0);" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-heart2"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-sub-collection.html#quickView" data-bs-toggle="modal" class="box-icon quickview hover-tooltip tooltip-left">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li class="compare">
                                    <a href="shop-sub-collection.html#compare" data-bs-toggle="modal" aria-controls="compare" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.html" class="name-product link fw-medium text-md">Puff Sleeve
                                Shirred Blouse</a>
                            <p class="price-wrap fw-medium">
                                <span class="price-new text-primary">$57.00</span>
                                <span class=" price-old">$60.00</span>
                            </p>
                            <ul class="list-color-product">
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                    <span class="tooltip color-filter">Yellow</span>
                                    <span class="swatch-value bg-yellow-2"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/women-yellow-2.jpg" src="images/products/fashion/women-yellow-2.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                    <span class="tooltip color-filter">Light Orange</span>
                                    <span class="swatch-value bg-light-orange-2"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/product-28.jpg" src="images/products/fashion/product-28.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                    <span class="tooltip color-filter">Beige</span>
                                    <span class="swatch-value bg-beige"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/product-7.jpg" src="images/products/fashion/product-7.jpg" alt="image-product">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card Product 8 -->
                    <div class="card-product grid style-1 card-product-size" data-availability="In stock" data-brand="Zotac">
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="img-product ls-is-cached lazyloaded" data-src="images/products/fashion/product-26.jpg" src="images/products/fashion/product-26.jpg" alt="image-product">
                                <img class="img-hover ls-is-cached lazyloaded" data-src="images/products/fashion/product-26.jpg" src="images/products/fashion/product-26.jpg" alt="image-product">
                            </a>
                            <ul class="list-product-btn">
                                <li>
                                    <a href="shop-sub-collection.html#shoppingCart" data-bs-toggle="offcanvas" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-cart2"></span>
                                        <span class="tooltip">Add to Cart</span>
                                    </a>
                                </li>
                                <li class="wishlist">
                                    <a href="javascript:void(0);" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-heart2"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-sub-collection.html#quickView" data-bs-toggle="modal" class="box-icon quickview hover-tooltip tooltip-left">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li class="compare">
                                    <a href="shop-sub-collection.html#compare" data-bs-toggle="modal" aria-controls="compare" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="size-box">
                                <li class="size-item text-xs text-white">S</li>
                                <li class="size-item text-xs text-white">M</li>
                                <li class="size-item text-xs text-white">L</li>
                            </ul>

                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.html" class="name-product link fw-medium text-md">Printed
                                T-shirt</a>
                            <p class="price-wrap fw-medium">
                                <span class="price-new text-primary">$120.00</span>
                                <span class=" price-old">$140.00</span>
                            </p>
                            <ul class="list-color-product">
                                <li class="list-color-item color-swatch line hover-tooltip tooltip-bot active">
                                    <span class="tooltip color-filter">White</span>
                                    <span class="swatch-value bg-white"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/product-26.jpg" src="images/products/fashion/product-26.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                    <span class="tooltip color-filter">Grey</span>
                                    <span class="swatch-value bg-grey-4"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/women-grey-1.jpg" src="images/products/fashion/women-grey-1.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                    <span class="tooltip color-filter">Black</span>
                                    <span class="swatch-value bg-dark"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/women-black-6.jpg" src="images/products/fashion/women-black-6.jpg" alt="image-product">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card Product 9 -->
                    <div class="card-product grid style-1 card-product-size" data-availability="In stock" data-brand="Zotac">
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="img-product ls-is-cached lazyloaded" data-src="images/products/fashion/product-27.jpg" src="images/products/fashion/product-27.jpg" alt="image-product">
                                <img class="img-hover ls-is-cached lazyloaded" data-src="images/products/fashion/product-23.jpg" src="images/products/fashion/product-23.jpg" alt="image-product">
                            </a>
                            <ul class="list-product-btn">
                                <li>
                                    <a href="shop-sub-collection.html#shoppingCart" data-bs-toggle="offcanvas" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-cart2"></span>
                                        <span class="tooltip">Add to Cart</span>
                                    </a>
                                </li>
                                <li class="wishlist">
                                    <a href="javascript:void(0);" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-heart2"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-sub-collection.html#quickView" data-bs-toggle="modal" class="box-icon quickview hover-tooltip tooltip-left">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li class="compare">
                                    <a href="shop-sub-collection.html#compare" data-bs-toggle="modal" aria-controls="compare" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="size-box">
                                <li class="size-item text-xs text-white">M</li>
                                <li class="size-item text-xs text-white">L</li>
                                <li class="size-item text-xs text-white">XL</li>
                            </ul>

                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.html" class="name-product link fw-medium text-md">Basic Sports
                                T-Shirt Crew Neck Ribbed</a>
                            <p class="price-wrap fw-medium">
                                <span class="price-new text-primary">80.00</span>
                                <span class="price-old">$100.00</span>
                            </p>
                            <ul class="list-color-product">
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                    <span class="tooltip color-filter">Light Purple</span>
                                    <span class="swatch-value bg-light-purple-3"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/product-27.jpg" src="images/products/fashion/product-27.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                    <span class="tooltip color-filter">Light Grey</span>
                                    <span class="swatch-value bg-grey-4"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/product-11.jpg" src="images/products/fashion/product-11.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                    <span class="tooltip color-filter">Light Orange</span>
                                    <span class="swatch-value bg-light-orange"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/product-12.jpg" src="images/products/fashion/product-12.jpg" alt="image-product">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card Product 10 -->
                    <div class="card-product grid style-1" data-availability="In stock" data-brand="Zotac">
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="img-product ls-is-cached lazyloaded" data-src="images/products/fashion/product-10.jpg" src="images/products/fashion/product-10.jpg" alt="image-product">
                                <img class="img-hover ls-is-cached lazyloaded" data-src="images/products/fashion/product-20.jpg" src="images/products/fashion/product-20.jpg" alt="image-product">
                            </a>
                            <ul class="list-product-btn">
                                <li>
                                    <a href="shop-sub-collection.html#shoppingCart" data-bs-toggle="offcanvas" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-cart2"></span>
                                        <span class="tooltip">Add to Cart</span>
                                    </a>
                                </li>
                                <li class="wishlist">
                                    <a href="javascript:void(0);" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-heart2"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-sub-collection.html#quickView" data-bs-toggle="modal" class="box-icon quickview hover-tooltip tooltip-left">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li class="compare">
                                    <a href="shop-sub-collection.html#compare" data-bs-toggle="modal" aria-controls="compare" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.html" class="name-product link fw-medium text-md">Regular Fit
                                Fine Knit Polo Shirt</a>
                            <p class="price-wrap fw-medium">
                                <span class="price-new text-primary">$130.00</span>
                                <span class=" price-old">$130.00</span>
                            </p>
                            <ul class="list-color-product">
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                    <span class="tooltip color-filter">Light Blue</span>
                                    <span class="swatch-value bg-light-blue-2"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/product-10.jpg" src="images/products/fashion/product-10.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                    <span class="tooltip color-filter">Black</span>
                                    <span class="swatch-value bg-dark"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/product-13.jpg" src="images/products/fashion/product-13.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                    <span class="tooltip color-filter">Purple</span>
                                    <span class="swatch-value bg-light-purple"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/product-14.jpg" src="images/products/fashion/product-14.jpg" alt="image-product">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card Product 11 -->
                    <div class="card-product grid style-1" data-availability="In stock" data-brand="Vineta">
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="img-product ls-is-cached lazyloaded" data-src="images/products/fashion/product-21.jpg" src="images/products/fashion/product-21.jpg" alt="image-product">
                                <img class="img-hover ls-is-cached lazyloaded" data-src="images/products/fashion/women-black-3.jpg" src="images/products/fashion/women-black-3.jpg" alt="image-product">
                            </a>
                            <ul class="list-product-btn">
                                <li>
                                    <a href="shop-sub-collection.html#shoppingCart" data-bs-toggle="offcanvas" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-cart2"></span>
                                        <span class="tooltip">Add to Cart</span>
                                    </a>
                                </li>
                                <li class="wishlist">
                                    <a href="javascript:void(0);" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-heart2"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-sub-collection.html#quickView" data-bs-toggle="modal" class="box-icon quickview hover-tooltip tooltip-left">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li class="compare">
                                    <a href="shop-sub-collection.html#compare" data-bs-toggle="modal" aria-controls="compare" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.html" class="name-product link fw-medium text-md">Crop College
                                T-Shirt</a>
                            <p class="price-wrap fw-medium">
                                <span class="price-new text-primary">$80.00</span>
                                <span class=" price-old">$100.00</span>
                            </p>
                            <ul class="list-color-product">
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                    <span class="tooltip color-filter">Dark Green</span>
                                    <span class="swatch-value bg-dark-green"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/product-21.jpg" src="images/products/fashion/product-21.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                    <span class="tooltip color-filter">Black</span>
                                    <span class="swatch-value bg-dark"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/women-black-3.jpg" src="images/products/fashion/women-black-3.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                    <span class="tooltip color-filter">Light Purple</span>
                                    <span class="swatch-value bg-light-purple-3"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/product-23.jpg" src="images/products/fashion/product-23.jpg" alt="image-product">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card Product 12 -->
                    <div class="card-product grid style-1 card-product-size" data-availability="In stock" data-brand="Vineta">
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="img-product ls-is-cached lazyloaded" data-src="images/products/fashion/product-22.jpg" src="images/products/fashion/product-22.jpg" alt="image-product">
                                <img class="img-hover ls-is-cached lazyloaded" data-src="images/products/fashion/product-5.jpg" src="images/products/fashion/product-5.jpg" alt="image-product">
                            </a>
                            <ul class="list-product-btn">
                                <li>
                                    <a href="shop-sub-collection.html#shoppingCart" data-bs-toggle="offcanvas" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-cart2"></span>
                                        <span class="tooltip">Add to Cart</span>
                                    </a>
                                </li>
                                <li class="wishlist">
                                    <a href="javascript:void(0);" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-heart2"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-sub-collection.html#quickView" data-bs-toggle="modal" class="box-icon quickview hover-tooltip tooltip-left">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li class="compare">
                                    <a href="shop-sub-collection.html#compare" data-bs-toggle="modal" aria-controls="compare" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="size-box">
                                <li class="size-item text-xs text-white">XS</li>
                                <li class="size-item text-xs text-white">S</li>
                                <li class="size-item text-xs text-white">M</li>
                                <li class="size-item text-xs text-white">L</li>
                                <li class="size-item text-xs text-white">XL</li>
                                <li class="size-item text-xs text-white">2XL</li>
                            </ul>

                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.html" class="name-product link fw-medium text-md">Bow-Tie
                                T-Shirt</a>
                            <p class="price-wrap fw-medium">
                                <span class="price-new text-primary">$120.00</span>
                                <span class=" price-old">$140.00</span>
                            </p>
                            <ul class="list-color-product">
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                    <span class="tooltip color-filter">Black</span>
                                    <span class="swatch-value bg-dark"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/product-22.jpg" src="images/products/fashion/product-22.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                    <span class="tooltip color-filter">Beige</span>
                                    <span class="swatch-value bg-beige"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/product-5.jpg" src="images/products/fashion/product-5.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch hover-tooltip line tooltip-bot">
                                    <span class="tooltip color-filter">White</span>
                                    <span class="swatch-value bg-white"></span>
                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/fashion/product-1.jpg" src="images/products/fashion/product-1.jpg" alt="image-product">
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- Card Product 13 -->
                    <div class="card-product grid style-1 card-product-size" data-availability="In stock" data-brand="Vineta">
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="img-product ls-is-cached lazyloaded" data-src="images/products/fashion/product-13.jpg" src="images/products/fashion/product-13.jpg" alt="image-product">
                                <img class="img-hover ls-is-cached lazyloaded" data-src="images/products/fashion/product-14.jpg" src="images/products/fashion/product-14.jpg" alt="image-product">
                            </a>
                            <ul class="list-product-btn">
                                <li>
                                    <a href="shop-sub-collection.html#shoppingCart" data-bs-toggle="offcanvas" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-cart2"></span>
                                        <span class="tooltip">Add to Cart</span>
                                    </a>
                                </li>
                                <li class="wishlist">
                                    <a href="javascript:void(0);" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-heart2"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-sub-collection.html#quickView" data-bs-toggle="modal" class="box-icon quickview hover-tooltip tooltip-left">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li class="compare">
                                    <a href="shop-sub-collection.html#compare" data-bs-toggle="modal" aria-controls="compare" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="size-box">
                                <li class="size-item text-xs text-white">L</li>
                                <li class="size-item text-xs text-white">XL</li>
                                <li class="size-item text-xs text-white">2XL</li>
                            </ul>

                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.html" class="name-product link fw-medium text-md">COOLMAX® Loose
                                Fit Tee</a>
                            <p class="price-wrap fw-medium">
                                <span class="price-new text-primary">$60.00</span>
                                <span class=" price-old">$80.00</span>
                            </p>
                            <ul class="list-color-product">
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                    <span class="tooltip color-filter">Black</span>
                                    <span class="swatch-value bg-dark"></span>
                                    <img class=" lazyload" data-src="images/products/fashion/product-13.jpg" src="images/products/fashion/product-13.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                    <span class="tooltip color-filter">Light Purple</span>
                                    <span class="swatch-value bg-purple-3"></span>
                                    <img class="lazyload" data-src="images/products/fashion/product-14.jpg" src="images/products/fashion/product-14.jpg" alt="image-product">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card Product 14 -->
                    <div class="card-product grid style-1 card-product-size" data-availability="In stock" data-brand="Vineta">
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="img-product ls-is-cached lazyloaded" data-src="images/products/fashion/product-20.jpg" src="images/products/fashion/product-20.jpg" alt="image-product">
                                <img class="img-hover ls-is-cached lazyloaded" data-src="images/products/fashion/product-9.jpg" src="images/products/fashion/product-9.jpg" alt="image-product">
                            </a>
                            <ul class="list-product-btn">
                                <li>
                                    <a href="shop-sub-collection.html#shoppingCart" data-bs-toggle="offcanvas" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-cart2"></span>
                                        <span class="tooltip">Add to Cart</span>
                                    </a>
                                </li>
                                <li class="wishlist">
                                    <a href="javascript:void(0);" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-heart2"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-sub-collection.html#quickView" data-bs-toggle="modal" class="box-icon quickview hover-tooltip tooltip-left">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li class="compare">
                                    <a href="shop-sub-collection.html#compare" data-bs-toggle="modal" aria-controls="compare" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="size-box">
                                <li class="size-item text-xs text-white">XS</li>
                                <li class="size-item text-xs text-white">S</li>
                                <li class="size-item text-xs text-white">M</li>
                                <li class="size-item text-xs text-white">L</li>
                                <li class="size-item text-xs text-white">XL</li>
                                <li class="size-item text-xs text-white">2XL</li>
                            </ul>

                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.html" class="name-product link fw-medium text-md">Long Sleeve
                                T-Shirt</a>
                            <p class="price-wrap fw-medium">
                                <span class="price-new text-primary">$100.00</span>
                                <span class=" price-old">$120.00</span>
                            </p>
                            <ul class="list-color-product">
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                    <span class="tooltip color-filter">Black</span>
                                    <span class="swatch-value bg-dark"></span>
                                    <img class=" lazyload" data-src="images/products/fashion/product-20.jpg" src="images/products/fashion/product-20.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                    <span class="tooltip color-filter">Light Orange</span>
                                    <span class="swatch-value bg-light-orange"></span>
                                    <img class=" lazyload" data-src="images/products/fashion/product-16.jpg" src="images/products/fashion/product-16.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch line hover-tooltip tooltip-bot">
                                    <span class="tooltip color-filter">White</span>
                                    <span class="swatch-value bg-white"></span>
                                    <img class=" lazyload" data-src="images/products/fashion/product-1.jpg" src="images/products/fashion/product-1.jpg" alt="image-product">
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- Card Product 15 -->
                    <div class="card-product grid style-1 card-product-size" data-availability="Out of stock" data-brand="Zotac">
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="img-product ls-is-cached lazyloaded" data-src="images/products/fashion/product-7.jpg" src="images/products/fashion/product-7.jpg" alt="image-product">
                                <img class="img-hover ls-is-cached lazyloaded" data-src="images/products/fashion/product-11.jpg" src="images/products/fashion/product-11.jpg" alt="image-product">
                            </a>
                            <ul class="list-product-btn">
                                <li>
                                    <a href="shop-sub-collection.html#shoppingCart" data-bs-toggle="offcanvas" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-cart2"></span>
                                        <span class="tooltip">Add to Cart</span>
                                    </a>
                                </li>
                                <li class="wishlist">
                                    <a href="javascript:void(0);" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-heart2"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-sub-collection.html#quickView" data-bs-toggle="modal" class="box-icon quickview hover-tooltip tooltip-left">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li class="compare">
                                    <a href="shop-sub-collection.html#compare" data-bs-toggle="modal" aria-controls="compare" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="size-box">
                                <li class="size-item text-xs text-white">S</li>
                                <li class="size-item text-xs text-white">M</li>
                                <li class="size-item text-xs text-white">L</li>
                                <li class="size-item text-xs text-white">XL</li>
                                <li class="size-item text-xs text-white">2XL</li>
                            </ul>

                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.html" class="name-product link fw-medium text-md">Muscle Fit
                                Polo Shirt</a>
                            <p class="price-wrap fw-medium">
                                <span class="price-new text-primary">$100.00</span>
                                <span class=" price-old">$120.00</span>
                            </p>
                            <ul class="list-color-product">
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                    <span class="tooltip color-filter">Beige</span>
                                    <span class="swatch-value bg-beige"></span>
                                    <img class=" lazyload" data-src="images/products/fashion/product-7.jpg" src="images/products/fashion/product-7.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch line hover-tooltip tooltip-bot">
                                    <span class="tooltip color-filter">White</span>
                                    <span class="swatch-value bg-white"></span>
                                    <img class=" lazyload" data-src="images/products/fashion/product-11.jpg" src="images/products/fashion/product-11.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                    <span class="tooltip color-filter">Light Orange</span>
                                    <span class="swatch-value bg-light-orange"></span>
                                    <img class=" lazyload" data-src="images/products/fashion/product-18.jpg" src="images/products/fashion/product-18.jpg" alt="image-product">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card Product 16 -->
                    <div class="card-product grid style-1" data-availability="Out of stock" data-brand="Zotac">
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="img-product ls-is-cached lazyloaded" data-src="images/products/fashion/product-17.jpg" src="images/products/fashion/product-17.jpg" alt="image-product">
                                <img class="img-hover ls-is-cached lazyloaded" data-src="images/products/fashion/product-26.jpg" src="images/products/fashion/product-26.jpg" alt="image-product">
                            </a>
                            <ul class="list-product-btn">
                                <li>
                                    <a href="shop-sub-collection.html#shoppingCart" data-bs-toggle="offcanvas" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-cart2"></span>
                                        <span class="tooltip">Add to Cart</span>
                                    </a>
                                </li>
                                <li class="wishlist">
                                    <a href="javascript:void(0);" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-heart2"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-sub-collection.html#quickView" data-bs-toggle="modal" class="box-icon quickview hover-tooltip tooltip-left">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li class="compare">
                                    <a href="shop-sub-collection.html#compare" data-bs-toggle="modal" aria-controls="compare" class="box-icon hover-tooltip tooltip-left">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.html" class="name-product link fw-medium text-md">Graphic
                                Printed Drop Shoulder Sleeves</a>
                            <p class="price-wrap fw-medium">
                                <span class="price-new text-primary">$80.00</span>
                                <span class=" price-old">$100.00</span>
                            </p>
                            <ul class="list-color-product">
                                <li class="list-color-item color-swatch hover-tooltip line tooltip-bot active">
                                    <span class="tooltip color-filter">White</span>
                                    <span class="swatch-value bg-white"></span>
                                    <img class=" lazyload" data-src="images/products/fashion/product-17.jpg" src="images/products/fashion/product-17.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                    <span class="tooltip color-filter">Light Purple</span>
                                    <span class="swatch-value bg-light-purple-3"></span>
                                    <img class=" lazyload" data-src="images/products/fashion/product-23.jpg" src="images/products/fashion/product-23.jpg" alt="image-product">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <ul class="wg-pagination">
                        <li class="active">
                            <div class="pagination-item">1</div>
                        </li>
                        <li>
                            <a href="shop-sub-collection.html#" class="pagination-item">2</a>
                        </li>
                        <li>
                            <a href="shop-sub-collection.html#" class="pagination-item">3</a>
                        </li>
                        <li>
                            <a href="shop-sub-collection.html#" class="pagination-item"><i class="icon-arr-right2"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- modal demo -->
<div class="modal fade modalDemo" id="modalDemo">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="header">
                <h5 class="demo-title">Ultimate HTML Theme</h5>
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="mega-menu">
                <div class="row-demo">
                    <div class="demo-item">
                        <a href="index.html" class="demo-image">
                            <img class="lazyload" data-src="images/demo/fashion-1.jpg" src="images/demo/fashion-1.jpg"
                                alt="home-fashion">
                            <div class="demo-label">
                                <span>New</span>
                                <span class="demo-hot">Hot</span>
                            </div>
                        </a>
                        <a href="index.html" class="demo-name link">Fashion Style 1</a>
                    </div>
                    <div class="demo-item">
                        <a href="home-fashion-02.html" class="demo-image">
                            <img class="lazyload" data-src="images/demo/fashion-2.jpg" src="images/demo/fashion-2.jpg"
                                alt="home-fashion">
                        </a>
                        <a href="home-fashion-02.html" class="demo-name link">Fashion Style
                            2</a>
                    </div>
                    <div class="demo-item">
                        <a href="home-electronic.html" class="demo-image">
                            <img class="lazyload" data-src="images/demo/electronic.jpg" src="images/demo/electronic.jpg"
                                alt="home-electronic">
                        </a>
                        <a href="home-electronic.html" class="demo-name link">Electronic</a>
                    </div>
                    <div class="demo-item">
                        <a href="home-furniture.html" class="demo-image">
                            <img class="lazyload" data-src="images/demo/furniture.jpg" src="images/demo/furniture.jpg"
                                alt="home-furniture">
                        </a>
                        <a href="home-furniture.html" class="demo-name link">Furniture</a>
                    </div>
                    <div class="demo-item">
                        <a href="home-fashion-women.html" class="demo-image">
                            <img class="lazyload" data-src="images/demo/women-fashion.jpg"
                                src="images/demo/women-fashion.jpg" alt="home-women-fashion">
                            <div class="demo-label">
                                <span>New</span>
                                <span class="demo-hot">Hot</span>
                            </div>
                        </a>
                        <a href="home-fashion-women.html" class="demo-name link">Women
                            Fashion</a>
                    </div>
                    <div class="demo-item">
                        <a href="home-skincare.html" class="demo-image">
                            <img class="lazyload" data-src="images/demo/comestic.jpg" src="images/demo/comestic.jpg"
                                alt="home-comestic">
                        </a>
                        <a href="home-skincare.html" class="demo-name link">Skincare</a>
                    </div>
                    <div class="demo-item">
                        <a href="home-bicycle.html" class="demo-image">
                            <img class="lazyload" data-src="images/demo/bicycle.jpg" src="images/demo/bicycle.jpg"
                                alt="home-bicycle">
                            <div class="demo-label"><span>New</span></div>
                        </a>
                        <a href="home-bicycle.html" class="demo-name link">Bicycle</a>
                    </div>
                    <div class="demo-item">
                        <a href="home-phonecase.html" class="demo-image">
                            <img class="lazyload" data-src="images/demo/phonecase.jpg" src="images/demo/phonecase.jpg"
                                alt="home-phonecase">
                        </a>
                        <a href="home-phonecase.html" class="demo-name link">Phone Case</a>
                    </div>
                    <div class="demo-item">
                        <a href="home-pet-accessories.html" class="demo-image">
                            <img class="lazyload" data-src="images/demo/pet-accessories.jpg"
                                src="images/demo/pet-accessories.jpg" alt="home-pet">
                        </a>
                        <a href="home-pet-accessories.html" class="demo-name link">Pet
                            Accessories</a>
                    </div>
                    <div class="demo-item">
                        <a href="home-sportwear.html" class="demo-image">
                            <img class="lazyload" data-src="images/demo/sportwear.jpg" src="images/demo/sportwear.jpg"
                                alt="home-bicycle">
                        </a>
                        <a href="home-sportwear.html" class="demo-name link">Sportwear</a>
                    </div>
                    <div class="demo-item">
                        <a href="home-jewelry.html" class="demo-image">
                            <img class="lazyload" data-src="images/demo/jewelry.jpg" src="images/demo/jewelry.jpg"
                                alt="home-jewelry">
                        </a>
                        <a href="home-jewelry.html" class="demo-name link">Jewelry</a>
                    </div>
                    <div class="demo-item">
                        <a href="home-electric-accessories.html" class="demo-image">
                            <img class="lazyload" data-src="images/demo/eletric-accessories.jpg"
                                src="images/demo/eletric-accessories.jpg" alt="home-electric-accessories">
                            <div class="demo-label">
                                <span>New</span>
                                <span class="demo-hot">Hot</span>
                            </div>
                        </a>
                        <a href="home-electric-accessories.html" class="demo-name link">Electric Accessories</a>
                    </div>
                    <div class="demo-item">
                        <a href="home-mega-electronic.html" class="demo-image">
                            <img class="lazyload" data-src="images/demo/mega-shop.jpg" src="images/demo/mega-shop.jpg"
                                alt="home-mega-electronic">
                        </a>
                        <a href="home-mega-electronic.html" class="demo-name link">Mega Shop</a>
                    </div>
                    <div class="demo-item">
                        <a href="home-vegetable.html" class="demo-image">
                            <img class="lazyload" data-src="images/demo/supermarket.jpg"
                                src="images/demo/supermarket.jpg" alt="home-supermarket">
                        </a>
                        <a href="home-vegetable.html" class="demo-name link">Supermarket</a>
                    </div>
                    <div class="demo-item">
                        <a href="home-pod.html" class="demo-image">
                            <img class="lazyload" data-src="images/demo/pod.jpg" src="images/demo/pod.jpg"
                                alt="home-pod">
                        </a>
                        <a href="home-pod.html" class="demo-name link">Print On Demand</a>
                    </div>
                    <div class="demo-item">
                        <a href="home-baby.html" class="demo-image">
                            <img class="lazyload" data-src="images/demo/baby.jpg" src="images/demo/baby.jpg"
                                alt="home-baby">
                            <div class="demo-label">
                                <span>New</span>
                            </div>
                        </a>
                        <a href="home-baby.html" class="demo-name link">Baby</a>
                    </div>
                    <div class="demo-item">
                        <a href="home-plant.html" class="demo-image">
                            <img class="lazyload" data-src="images/demo/plant.jpg" src="images/demo/plant.jpg"
                                alt="home-plant">
                        </a>
                        <a href="home-plant.html" class="demo-name link">Plant</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /modal demo -->

<!-- Filter Shop -->
<div class="offcanvas offcanvas-start canvas-sidebar canvas-filter" id="filterShop">
    <div class="canvas-wrapper">
        <div class="canvas-header">
            <span class="title">Filter</span>
            <button class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="canvas-body">
            <div class="widget-facet">
                <div class="facet-title text-xl fw-medium" data-bs-target="#collections" data-bs-toggle="collapse"
                    aria-expanded="true" aria-controls="collections">
                    <span>Collections</span>
                    <span class="icon icon-arrow-up"></span>
                </div>
                <div id="collections" class="collapse show">
                    <ul class="collapse-body list-categories current-scrollbar">
                        <li class="cate-item">
                            <a class="text-sm link" href="shop-default.html">
                                <span>Men’s top</span>
                                <span class="count">(20)</span>
                            </a>
                        </li>
                        <li class="cate-item">
                            <a class="text-sm link" href="shop-default.html">
                                <span>Men</span>
                                <span class="count">(20)</span>
                            </a>
                        </li>
                        <li class="cate-item">
                            <a class="text-sm link" href="shop-default.html">
                                <span>Women</span>
                                <span class="count">(20)</span>
                            </a>
                        </li>
                        <li class="cate-item">
                            <a class="text-sm link" href="shop-default.html">
                                <span>Kid</span>
                                <span class="count">(20)</span>
                            </a>
                        </li>
                        <li class="cate-item">
                            <a class="text-sm link" href="shop-default.html">
                                <span>T-shirt</span>
                                <span class="count">(20)</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="widget-facet">
                <div class="facet-title text-xl fw-medium" data-bs-target="#availability" role="button"
                    data-bs-toggle="collapse" aria-expanded="true" aria-controls="availability">
                    <span>Availability</span>
                    <span class="icon icon-arrow-up"></span>
                </div>
                <div id="availability" class="collapse show">
                    <ul class="collapse-body filter-group-check current-scrollbar">
                        <li class="list-item">
                            <input type="radio" name="availability" class="tf-check" id="inStock">
                            <label for="inStock" class="label"><span>In stock</span>&nbsp;<span
                                    class="count">(20)</span></label>
                        </li>
                        <li class="list-item">
                            <input type="radio" name="availability" class="tf-check" id="outStock">
                            <label for="outStock" class="label"><span>Out of stock</span>&nbsp;<span
                                    class="count">(3)</span></label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="widget-facet">
                <div class="facet-title text-xl fw-medium" data-bs-target="#price" role="button"
                    data-bs-toggle="collapse" aria-expanded="true" aria-controls="price">
                    <span>Price</span>
                    <span class="icon icon-arrow-up"></span>
                </div>
                <div id="price" class="collapse show">
                    <div class="collapse-body widget-price filter-price">
                        <span class="reset-price">Reset</span>
                        <div class="price-val-range" id="price-value-range" data-min="0" data-max="500"></div>
                        <div class="box-value-price">
                            <span class="text-sm">Price:</span>
                            <div class="price-box">
                                <div class="price-val" id="price-min-value" data-currency="$"></div>
                                <span>-</span>
                                <div class="price-val" id="price-max-value" data-currency="$"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget-facet">
                <div class="facet-title text-xl fw-medium" data-bs-target="#color" role="button"
                    data-bs-toggle="collapse" aria-expanded="true" aria-controls="color">
                    <span>Color</span>
                    <span class="icon icon-arrow-up"></span>
                </div>
                <div id="color" class="collapse show">
                    <div class="collapse-body filter-color-box flat-check-list">
                        <div class="check-item color-item color-check"><span class="color bg-yellow"></span><span
                                class="color-text">Yellow</span></div>
                        <div class="check-item color-item color-check"><span class="color bg-dark"></span><span
                                class="color-text">Black</span></div>
                        <div class="check-item color-item color-check line"><span class="color bg-white"></span><span
                                class="color-text">White</span></div>
                        <div class="check-item color-item color-check"><span class="color bg-purple-3"></span><span
                                class="color-text">Purple</span></div>
                        <div class="check-item color-item color-check"><span class="color bg-light-orange"></span><span
                                class="color-text">Light Orange</span>
                        </div>
                        <div class="check-item color-item color-check"><span class="color bg-light-pink-4"></span><span
                                class="color-text">Light Pink</span>
                        </div>
                        <div class="check-item color-item color-check"><span class="color bg-pink"></span><span
                                class="color-text">Pink</span></div>
                        <div class="check-item color-item color-check"><span class="color bg-dark-green"></span><span
                                class="color-text">Dark Green</span></div>
                        <div class="check-item color-item color-check"><span class="color bg-grey-4"></span><span
                                class="color-text">Grey</span></div>
                    </div>
                </div>
            </div>
            <div class="widget-facet">
                <div class="facet-title text-xl fw-medium" data-bs-target="#size" role="button"
                    data-bs-toggle="collapse" aria-expanded="true" aria-controls="size">
                    <span>Size</span>
                    <span class="icon icon-arrow-up"></span>
                </div>
                <div id="size" class="collapse show">
                    <div class="collapse-body filter-size-box flat-check-list">
                        <div class="check-item size-item size-check"><span class="size">XS</span>&nbsp;<span
                                class="count">(10)</span></div>
                        <div class="check-item size-item size-check"><span class="size">S</span>&nbsp;<span
                                class="count">(8)</span></div>
                        <div class="check-item size-item size-check"><span class="size">L</span>&nbsp;<span
                                class="count">(20)</span></div>
                        <div class="check-item size-item size-check"><span class="size">M</span>&nbsp;<span
                                class="count">(10)</span></div>
                        <div class="check-item size-item size-check"><span class="size">XL</span>&nbsp;<span
                                class="count">(20)</span></div>
                    </div>
                </div>
            </div>
            <div class="widget-facet">
                <div class="facet-title text-xl fw-medium" data-bs-target="#brand" role="button"
                    data-bs-toggle="collapse" aria-expanded="true" aria-controls="brand">
                    <span>Brand</span>
                    <span class="icon icon-arrow-up"></span>
                </div>
                <div id="brand" class="collapse show">
                    <ul class="collapse-body filter-group-check current-scrollbar">
                        <li class="list-item">
                            <input type="radio" name="brand" class="tf-check" id="Vineta">
                            <label for="Vineta" class="label"><span>Vineta</span>&nbsp;<span
                                    class="count">(11)</span></label>
                        </li>
                        <li class="list-item">
                            <input type="radio" name="brand" class="tf-check" id="Zotac">
                            <label for="Zotac" class="label"><span>Zotac</span>&nbsp;<span
                                    class="count">(20)</span></label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="widget-facet">
                <div class="facet-title text-xl fw-medium"><span>On sale</span></div>
                <ul class="collapse-body list-recent">
                    <li>
                        <div class="recent-blog-item">
                            <a href="product-detail.html" class="img-product"><img
                                    src="images/products/recent/recent6.jpg" alt="img"></a>
                            <div class="content">
                                <a href="product-detail.html" class="title text-md link fw-medium">Striped short
                                    sleeve shirt</a>
                                <div class="price text-md fw-medium">
                                    <span class="new-price">$80.00</span>
                                    <span class="old-price">$100.00</span>
                                </div>

                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="recent-blog-item">
                            <a href="product-detail.html" class="img-product"><img
                                    src="images/products/recent/recent7.jpg" alt="img"></a>
                            <div class="content">
                                <a href="product-detail.html" class="title text-md link fw-medium">Short Sleeve
                                    Sweat</a>
                                <div class="price text-md fw-medium">
                                    <span class="new-price">$65.00</span>
                                    <span class="old-price">$90.00</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="widget-facet">
                <div class="sb-banner hover-img">
                    <div class="image img-style">
                        <img src="images/blog/sb-banner.jpg" data-src="./images/blog/sb-banner.jpg" alt="banner"
                            class="lazyload">
                    </div>
                    <div class="banner-content">
                        <p class="title">
                            Elevate <br> Your Style
                        </p>
                        <a href="shop-sub-collection.html#" class="tf-btn btn-white hover-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Filter Shop -->



@push('frontend_js')
<script src="{{ asset('frontend/assets/js/multiple-modal.js') }}"></script>
<script src="{{ asset('frontend/assets/js/nouislider.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/multiple-modal.js') }}"></script>
<script src="{{ asset('frontend/assets/js/shop.js') }}"></script>
@endpush

@endsection