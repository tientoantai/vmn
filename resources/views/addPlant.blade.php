@extends('layout')
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
                        <h2>Nhập thông tin cây thuốc</h2>
                    </div><!--/end shop product social-->

                    <table class="table">
                        <colgroup>
                            <col style="width:30%">
                            <col style="width:70%">
                        </colgroup>
                        <tbody>
                        <tr>
                            <td><b>Tên thường gọi:</b></td>
                            <td><input class="form-control"/> </td>
                        </tr>
                        <tr>
                            <td><b>Tên khác:</b></td>
                            <td><input class="form-control"/> </td>
                        </tr>
                        <tr>
                            <td><b>Tên khoa học:</b></td>
                            <td><input class="form-control"/> </td>
                        </tr>
                        <tr>
                            <td><b>Đặc điểm:</b></td>
                            <td><textarea class="full-width " name=""  rows="4"></textarea></td>
                        </tr>
                        <tr>
                            <td><b>Nơi phân bố:</b></td>
                            <td><input class="form-control"/> </td>
                        </tr>
                        <tr>
                            <td><b>Công dụng:</b></td>
                            <td><input class="form-control"/> </td>
                        </tr>
                        </tbody></table>
                </div>
            </div><!--/end row-->
        </div>
    </div>
    <!--=== End Shop Product ===-->



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