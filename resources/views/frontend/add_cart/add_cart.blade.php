@extends('frontend_layout')
@section('front_end_contains')
<div class="container">
    <div class="row">
        <!-- Product Images -->
        <div class="col-md-6"></div>
        <!-- /Product Images -->
        <!-- Product Info -->
        <div class="col-md-6">
            <div class="tf-product-info-wrap position-relative">
                <div class="tf-zoom-main"></div>
                <div class="tf-product-info-list other-image-zoom">
                    <div class="tf-product-info-heading">
                        <h5 class="product-info-name fw-medium">Linen Blend Pants</h5>
                        <div class="product-info-rate">
                            <div class="list-star">
                                <i class="icon icon-star"></i>
                                <i class="icon icon-star"></i>
                                <i class="icon icon-star"></i>
                                <i class="icon icon-star"></i>
                                <i class="icon icon-star"></i>
                            </div>
                            <span class="count-review">(5 reviews)</span>
                        </div>
                        <div class="product-info-price">
                            <div class="display-sm price-new price-on-sale">$60.00</div>
                            <div class="display-sm price-old">$80.00</div>
                            <span class="badge-sale">20% Off</span>
                        </div>
                        <div class="product-info-sold">
                            <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.2759 10.9242C15.2556 10.6149 14.9236 10.4281 14.6488 10.5714C14.4098 10.6961 13.6603 11.0196 13.0698 11.0196C12.6156 11.0196 12.3132 10.8694 12.3132 10.1362C12.3132 8.12636 15.0124 6.52078 12.6056 3.51218C12.3295 3.16719 11.773 3.41746 11.8469 3.85238C11.8484 3.86145 11.9887 4.77182 11.5632 5.27582C11.3635 5.51218 11.061 5.62711 10.6384 5.62711C9.17454 5.62711 9.27646 1.94027 11.1223 0.795793C11.5328 0.541367 11.2702 -0.0948905 10.8012 0.0119845C10.683 0.0387033 7.88684 0.701328 6.39105 3.62798C5.28035 5.80099 5.88191 7.29977 6.32116 8.39418C6.71371 9.3722 6.89283 9.81857 6.01364 10.4273C5.68251 10.6566 5.42618 10.6328 5.42618 10.6328C4.60384 10.6328 3.82489 9.42402 3.59437 8.95879C3.40712 8.57837 2.83721 8.67311 2.78314 9.09372C2.75993 9.27457 2.24057 13.5513 4.51026 16.1312C5.76076 17.5525 7.50054 18.0581 9.40742 17.9948C11.1702 17.9357 12.5768 17.3395 13.5883 16.2228C15.4639 14.152 15.2844 11.0549 15.2759 10.9242Z" fill="#F2721C"></path>
                                <path d="M4.44845 10.1357C4.04521 9.74669 3.72761 9.22817 3.59412 8.95877C3.40688 8.57834 2.83696 8.67309 2.78289 9.0937C2.75969 9.27454 2.24032 13.5513 4.51001 16.1312C5.2812 17.0077 6.27795 17.5784 7.48458 17.8379C4.95987 16.3506 4.24181 13.0162 4.44845 10.1357Z" fill="#EA5513"></path>
                                <path d="M3.73448 4.51577C3.70506 4.49735 3.66772 4.49735 3.6383 4.51577C2.64745 5.13712 2.64446 6.58633 3.6383 7.20955C3.66723 7.22769 3.70471 7.22825 3.73448 7.20955C4.72533 6.58816 4.72821 5.13898 3.73448 4.51577Z" fill="#F2721C"></path>
                                <path d="M4.12025 4.85809C4.01204 4.72502 3.88239 4.60855 3.73448 4.51577C3.70506 4.49735 3.66772 4.49735 3.6383 4.51577C2.64745 5.13712 2.64446 6.58633 3.6383 7.20955C3.66723 7.22769 3.70471 7.22825 3.73448 7.20955C3.88242 7.11677 4.01208 7.00026 4.12029 6.8672C3.64157 6.28237 3.64072 5.44386 4.12025 4.85809Z" fill="#EA5513"></path>
                                <path d="M10.8011 0.0119845C10.6829 0.0387033 7.88676 0.701328 6.39096 3.62798C4.90723 6.53083 6.48163 8.24741 6.63386 9.34639L6.63403 9.34629C6.69 9.74974 6.54569 10.0588 6.01356 10.4272C5.69392 10.6486 5.40494 10.6816 5.10034 10.5723V10.5727C5.10034 10.5727 6.17507 11.6058 7.26087 10.8972C8.33686 10.1951 8.02601 9.11809 7.85986 8.63131L7.86025 8.63103C7.46365 7.57951 7.11673 6.19027 8.09319 4.27988C8.67292 3.14557 9.44797 2.35153 10.1868 1.80263C10.426 1.38835 10.7395 1.0331 11.1223 0.795758C11.5326 0.541367 11.2701 -0.0948905 10.8011 0.0119845Z" fill="#EA5513"></path>
                            </svg>
                            <span class="text-dark">30 sold in last 24 hours</span>
                        </div>
                        <div class="product-info-progress-sale">
                            <div class="title-hurry-up"><span class="text-primary fw-medium">HURRY
                                    UP!</span> Only <span class="count">4</span> items left!</div>
                            <div class="progress-sold">
                                <div class="value" style="width: 70%;" data-progress="70"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tf-product-info-variant">
                        <div class="variant-picker-item variant-color">
                            <div class="variant-picker-label">
                                Colors:<span class="variant-picker-label-value value-currentColor">black</span>
                            </div>
                            <div class="variant-picker-values">
                                <div class="hover-tooltip tooltip-bot color-btn active" data-color="black">
                                    <span class="check-color bg-dark-3"></span>
                                    <span class="tooltip">Black</span>
                                </div>
                                <div class="hover-tooltip tooltip-bot color-btn" data-color="orange">
                                    <span class="check-color bg-light-orange-2"></span>
                                    <span class="tooltip">Orange</span>
                                </div>
                                <div class="hover-tooltip tooltip-bot color-btn" data-color="green">
                                    <span class="check-color bg-light-green"></span>
                                    <span class="tooltip">Green</span>
                                </div>
                            </div>
                        </div>
                        <div class="variant-picker-item variant-size">
                            <div class="variant-picker-label">
                                <div>Size:<span class="variant-picker-label-value value-currentSize">small</span>
                                </div>
                                <a href="product-detail.html#sizeGuide" data-bs-toggle="modal" class="size-guide link">Size
                                    Guide</a>
                            </div>
                            <div class="variant-picker-values">
                                <span class="size-btn active" data-size="small">S</span>
                                <span class="size-btn" data-size="medium">M</span>
                                <span class="size-btn" data-size="large">L</span>
                                <span class="size-btn" data-size="extra large">XL</span>
                            </div>
                        </div>
                    </div>
                    <div class="tf-product-total-quantity">
                        <div class="group-btn">
                            <div class="wg-quantity">
                                <button class="btn-quantity btn-decrease">-</button>
                                <input class="quantity-product" type="text" name="number" value="1">
                                <button class="btn-quantity btn-increase">+</button>
                            </div>
                            <a href="product-detail.html#shoppingCart" data-bs-toggle="offcanvas" class="tf-btn hover-primary btn-add-to-cart">Add to cart</a>
                        </div>
                        <a href="checkout.html" class="tf-btn btn-primary w-100 animate-btn">Buy it
                            now</a>
                        <a href="checkout.html" class="more-choose-payment link">More payment
                            options</a>
                    </div>
                    <div class="tf-product-info-extra-link">
                        <a href="javascript:void(0);" class="product-extra-icon link btn-add-wishlist">
                            <i class="icon add icon-heart"></i><span class="add">Add to wishlist</span>
                            <i class="icon added icon-trash"></i><span class="added">Remove from
                                wishlist</span>
                        </a>
                        <a href="product-detail.html#compare" data-bs-toggle="modal" class="product-extra-icon link">
                            <i class="icon icon-compare2"></i>Compare
                        </a>
                        <a href="product-detail.html#askQuestion" data-bs-toggle="modal" class="product-extra-icon link">
                            <i class="icon icon-ask"></i>Ask a question
                        </a>
                        <a href="product-detail.html#shareSocial" data-bs-toggle="modal" class="product-extra-icon link">
                            <i class="icon icon-share"></i>Share
                        </a>
                    </div>
                    <div class="tf-product-info-trust-seal text-center">
                        <p class="text-md text-dark-2 text-seal fw-medium">Guarantee Safe Checkout:</p>
                        <ul class="list-card">
                            <li class="card-item">
                                <img src="images/payment/Visa.png" alt="card">
                            </li>
                            <li class="card-item">
                                <img src="images/payment/DinersClub.png" alt="card">
                            </li>
                            <li class="card-item">
                                <img src="images/payment/Mastercard.png" alt="card">
                            </li>
                            <li class="card-item">
                                <img src="images/payment/Stripe.png" alt="card">
                            </li>
                            <li class="card-item">
                                <img src="images/payment/PayPal.png" alt="card">
                            </li>
                            <li class="card-item">
                                <img src="images/payment/GooglePay.png" alt="card">
                            </li>
                            <li class="card-item">
                                <img src="images/payment/ApplePay.png" alt="card">
                            </li>
                        </ul>
                    </div>
                    <div class="tf-product-info-delivery-return">
                        <div class="product-delivery">
                            <div class="icon icon-car2"></div>
                            <p class="text-md">Estimated delivery time: <span class="fw-medium">3-5 days
                                    international</span></p>
                        </div>
                        <div class="product-delivery">
                            <div class="icon icon-shipping3"></div>
                            <p class="text-md">Free shipping on <span class="fw-medium">all orders over
                                    $150</span></p>
                        </div>
                    </div>
                </div>
                <div class="tf-product-fbt">
                    <div class="title text-xl fw-medium">Frequently Bought Together</div>
                    <form class="tf-product-form-bundle">
                        <div class="tf-bundle-products">
                            <div class="tf-bundle-product-item item-has-checkbox check">
                                <div class="bundle-check">
                                    <input type="checkbox" checked="checked" class="tf-check" disabled="">
                                </div>
                                <a href="product-detail.html" class="bundle-image">
                                    <img src="{{ asset('frontend/assets/images/products/fashion/women-black-1.jpg') }}" alt="img-product">
                                </a>
                                <div class="bundle-info">
                                    <div class="bundle-title text-sm fw-medium">This item: Single
                                        Breasted Blazer</div>
                                    <div class="bundle-price text-md fw-medium">
                                        <span class="new-price">$60.00</span>
                                        <span class="old-price">$80.00</span>
                                    </div>
                                    <div class="bundle-variant tf-select">
                                        <select>
                                            <option selected="selected">Black / S</option>
                                            <option>Black / M</option>
                                            <option>Black / L</option>
                                            <option>Blue / S</option>
                                            <option>Blue / M</option>
                                            <option>Blue / L</option>
                                            <option>Blue / XL</option>
                                            <option>White / S</option>
                                            <option>White / M</option>
                                            <option>White / L</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-bundle-product-item item-has-checkbox">
                                <div class="bundle-check">
                                    <input type="checkbox" class="tf-check">
                                </div>
                                <a href="product-detail.html" class="bundle-image">
                                    <img src="images/products/fashion/women-grey-3.jpg" alt="img-product">
                                </a>
                                <div class="bundle-info">
                                    <div class="bundle-title text-sm fw-medium">Short Sleeve Sweat</div>
                                    <div class="bundle-price text-md fw-medium">
                                        <span class="new-price">$75.00</span>
                                    </div>
                                    <div class="bundle-variant tf-select">
                                        <select>
                                            <option selected="selected">White / S</option>
                                            <option>White / M</option>
                                            <option>White / L</option>
                                            <option>Black / M</option>
                                            <option>Black / L</option>
                                            <option>Blue / S</option>
                                            <option>Blue / M</option>
                                            <option>Blue / L</option>
                                            <option>Blue / XL</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-bundle-product-item item-has-checkbox">
                                <div class="bundle-check">
                                    <input type="checkbox" class="tf-check">
                                </div>
                                <a href="product-detail.html" class="bundle-image">
                                    <img src="images/products/fashion/women-black-6.jpg" alt="img-product">
                                </a>
                                <div class="bundle-info">
                                    <div class="bundle-title text-sm fw-medium">One Shoulder Velvet
                                        T-Shirt</div>
                                    <div class="bundle-price text-md fw-medium">
                                        <span class="new-price">$85.00</span>
                                        <span class="old-price">$100.00</span>
                                    </div>
                                    <div class="bundle-variant tf-select">
                                        <select>
                                            <option selected="selected">Black / S</option>
                                            <option>Black / M</option>
                                            <option>Black / L</option>
                                            <option>Blue / S</option>
                                            <option>Blue / M</option>
                                            <option>Blue / L</option>
                                            <option>Blue / XL</option>
                                            <option>White / S</option>
                                            <option>White / M</option>
                                            <option>White / L</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bundle-total-submit">
                            <div class="text">Total price:</div>
                            <span class="total-price">$60.00</span>
                            <span class="total-price-old">$80.00</span>
                        </div>
                        <button data-bs-target="#shoppingCart" type="button" data-bs-toggle="offcanvas" class="btn-submit-total tf-btn btn-out-line-primary">Add selected to
                            cart</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Product Info -->

    </div>
</div>
@endsection