@extends('layout')
@section('title')
    {{$plant[0]->commonName}}
@endsection
@section('pageCss')

    <link rel="stylesheet" href="{{asset('assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/master-slider/masterslider/style/masterslider.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/master-slider/masterslider/skins/default/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css')}}">
@endsection

@section('content')

        <!--=== Shop Product ===-->
        <div class="shop-product content">

            <div class="container">
                <div class="row">
                    <div class="col-md-6 md-margin-bottom-50">
                        <div class="ms-showcase2-template">
                            <!-- Master Slider -->
                            <div class="master-slider ms-skin-default" id="masterslider">
                                <div class="ms-slide">
                                    <img class="ms-brd" src="assets/img/blank.gif" data-src="assets/img/blog/28.jpg" alt="lorem ipsum dolor sit">
                                    <img class="ms-thumb" src="assets/img/blog/28-thumb.jpg" alt="thumb">
                                </div>
                                <div class="ms-slide">
                                    <img src="assets/img/blank.gif" data-src="assets/img/blog/29.jpg" alt="lorem ipsum dolor sit">
                                    <img class="ms-thumb" src="assets/img/blog/29-thumb.jpg" alt="thumb">
                                </div>
                                <div class="ms-slide">
                                    <img src="assets/img/blank.gif" data-src="assets/img/blog/30.jpg" alt="lorem ipsum dolor sit">
                                    <img class="ms-thumb" src="assets/img/blog/30-thumb.jpg" alt="thumb">
                                </div>
                            </div>
                            <!-- End Master Slider -->
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="shop-product-heading">
                            <h2>{{$plant[0]->commonName}}</h2>
                            <ul class="list-inline shop-product-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            </ul>
                        </div><!--/end shop product social-->

                        <ul class="list-inline product-ratings margin-bottom-30">
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li class="product-review-list">
                                <span>(1) <a href="#">Review</a> | <a href="#"> Add Review</a></span>
                            </li>
                        </ul><!--/end shop product ratings-->

                        <table class="table">
                            <colgroup>
                                <col style="width:30%">
                                <col style="width:70%">
                            </colgroup>
                            <tbody>
                            <tr>
                                <td><b>Tên khác:</b></td>
                                <td>{{$plant[0]->otherName}}</td>
                            </tr>
                            <tr>
                                <td><b>Tên khoa học:</b></td>
                                <td>{{$plant[0]->scienceName}}</td>
                            </tr>
                            <tr>
                                <td><b>Đặc điểm:</b></td>
                                <td>{{$plant[0]->characteristic}}</td>
                            </tr>
                            <tr>
                                <td><b>Nơi phân bố:</b></td>
                                <td>{{$plant[0]->location}}</td>
                            </tr>
                            <tr>
                                <td><b>Công dụng:</b></td>
                                <td>{{$plant[0]->utility}}</td>
                            </tr>
                            <tr>
                                <td><b>Người đóng góp:</b></td>
                                <td>{{$plant[0]->author}}</td>
                            </tr>
                        </tbody></table>
                    </div>
                </div><!--/end row-->
            </div>
        </div>
        <!--=== End Shop Product ===-->

    <!--=== Content Medium ===-->
    <div class="content-md container">

        <div class="tab-v6">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#reviews" role="tab" data-toggle="tab">Đánh giá (1)</a></li>
                <li><a href="#related" role="tab" data-toggle="tab">Bài thuốc liên quan</a></li>
            </ul>

            <div class="tab-content">
                <!-- Reviews -->
                <div class="tab-pane fade in active" id="reviews">
                    <div class="product-comment margin-bottom-40">
                        <div class="product-comment-in">
                            <img class="product-comment-img rounded-x" src="assets/img/team/01.jpg" alt="">
                            <div class="product-comment-dtl">
                                <h4>Mickel <small>22 days ago</small></h4>
                                <p>I like the green colour, it's very likeable and reminds me of Hollister. A little loose though but I am very skinny</p>
                                <ul class="list-inline product-ratings">
                                    <li class="reply"><a href="#">Reply</a></li>
                                    <li class="pull-right">
                                        <ul class="list-inline">
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating fa fa-star"></i></li>
                                            <li><i class="rating fa fa-star"></i></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h3 class="heading-md margin-bottom-30">Bình luận</h3>
                    <form action="" method="post" id="comment" class="sky-form sky-changes-4">
                        <fieldset>
                            <div class="margin-bottom-30">
                                <label class="textarea">
                                    <textarea rows="2" placeholder="Viết bình luận ..." name="message" id="message"></textarea>
                                </label>
                            </div>
                        </fieldset>

                        <footer class="review-submit">
                            <label class="label-v2">Review</label>
                            <div class="stars-ratings">
                                <input type="radio" name="stars-rating" id="stars-rating-5">
                                <label for="stars-rating-5"><i class="fa fa-star"></i></label>
                                <input type="radio" name="stars-rating" id="stars-rating-4">
                                <label for="stars-rating-4"><i class="fa fa-star"></i></label>
                                <input type="radio" name="stars-rating" id="stars-rating-3">
                                <label for="stars-rating-3"><i class="fa fa-star"></i></label>
                                <input type="radio" name="stars-rating" id="stars-rating-2">
                                <label for="stars-rating-2"><i class="fa fa-star"></i></label>
                                <input type="radio" name="stars-rating" id="stars-rating-1">
                                <label for="stars-rating-1"><i class="fa fa-star"></i></label>
                            </div>
                            <button type="button" class="btn-u btn-u-sea-shop btn-u-sm pull-right">Gửi</button>
                        </footer>
                    </form>
                </div>
                <!-- End Reviews -->
                <!-- Related -->
                <div class="tab-pane fade " id="related">
                    <!--=== Illustration v2 ===-->
                    <div class="container">
                        <div class="heading heading-v1 margin-bottom-20">
                            <h2>Bài thuốc liên quan</h2>
                        </div>

                        <div class="illustration-v2 margin-bottom-60">
                            <div class="customNavigation margin-bottom-25">
                                <a class="owl-btn prev rounded-x"><i class="fa fa-angle-left"></i></a>
                                <a class="owl-btn next rounded-x"><i class="fa fa-angle-right"></i></a>
                            </div>

                            <ul class="list-inline owl-slider-v4">
                                <li class="item">
                                    <a href="#"><img class="img-responsive" src="assets/img/thumb/09.jpg" alt=""></a>
                                    <div class="product-description-v2">
                                        <div class="margin-bottom-5">
                                            <h4 class="title-price"><a href="#">Double-breasted</a></h4>
                                            <span class="title-price">$95.00</span>
                                        </div>
                                        <ul class="list-inline product-ratings">
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating fa fa-star"></i></li>
                                            <li><i class="rating fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="item">
                                    <a href="#"><img class="img-responsive" src="assets/img/thumb/07.jpg" alt=""></a>
                                    <div class="product-description-v2">
                                        <div class="margin-bottom-5">
                                            <h4 class="title-price"><a href="#">Double-breasted</a></h4>
                                            <span class="title-price">$60.00</span>
                                            <span class="title-price line-through">$95.00</span>
                                        </div>
                                        <ul class="list-inline product-ratings">
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating fa fa-star"></i></li>
                                            <li><i class="rating fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="item">
                                    <a href="#"><img class="img-responsive" src="assets/img/thumb/08.jpg" alt=""></a>
                                    <div class="product-description-v2">
                                        <div class="margin-bottom-5">
                                            <h4 class="title-price"><a href="#">Double-breasted</a></h4>
                                            <span class="title-price">$95.00</span>
                                        </div>
                                        <ul class="list-inline product-ratings">
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating fa fa-star"></i></li>
                                            <li><i class="rating fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="item">
                                    <a href="#"><img class="img-responsive" src="assets/img/thumb/06.jpg" alt=""></a>
                                    <div class="product-description-v2">
                                        <div class="margin-bottom-5">
                                            <h4 class="title-price"><a href="#">Double-breasted</a></h4>
                                            <span class="title-price">$95.00</span>
                                        </div>
                                        <ul class="list-inline product-ratings">
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating fa fa-star"></i></li>
                                            <li><i class="rating fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="item">
                                    <a href="#"><img class="img-responsive" src="assets/img/thumb/04.jpg" alt=""></a>
                                    <div class="product-description-v2">
                                        <div class="margin-bottom-5">
                                            <h4 class="title-price"><a href="#">Double-breasted</a></h4>
                                            <span class="title-price">$95.00</span>
                                        </div>
                                        <ul class="list-inline product-ratings">
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating fa fa-star"></i></li>
                                            <li><i class="rating fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="item">
                                    <a href="#"><img class="img-responsive" src="assets/img/thumb/03.jpg" alt=""></a>
                                    <div class="product-description-v2">
                                        <div class="margin-bottom-5">
                                            <h4 class="title-price"><a href="#">Double-breasted</a></h4>
                                            <span class="title-price">$95.00</span>
                                        </div>
                                        <ul class="list-inline product-ratings">
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating fa fa-star"></i></li>
                                            <li><i class="rating fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--=== End Illustration v2 ===-->
                </div>
                <!-- End related -->
            </div>
        </div>
    </div><!--/end container-->
    <!--=== End Content Medium ===-->

@endsection

@section('pageJS')
    <!-- Master Slider -->
    <script src={{asset('assets/plugins/master-slider/masterslider/masterslider.min.js')}}></script>
    <script src={{asset('assets/plugins/master-slider/masterslider/jquery.easing.min.js')}}></script>
    <script src={{asset('assets/js/plugins/master-slider.js')}}></script>
    <script src={{asset('assets/js/forms/product-quantity.js')}}></script>
    <script src={{asset('assets/js/plugins/master-slider.js')}}></script>
    <script src={{asset('assets/js/forms/product-quantity.js')}}></script>
    <script>
        jQuery(document).ready(function() {
            App.init();
            App.initScrollBar();
            OwlCarousel.initOwlCarousel();
            StyleSwitcher.initStyleSwitcher();
            MasterSliderShowcase2.initMasterSliderShowcase2();
        });
    </script>
@endsection