@extends('layout')

@section('title')
    Đăng ký tài khoản
@endsection
@section('pageCss')
    <link rel="stylesheet" href="{{asset('assets/css/pages/log-reg-v3.css')}}">
@endsection
@section('content')
    <!--=== Registre ===-->
    <div class="log-reg-v3 content-md margin-bottom-30">
        <div class="container">
            <div class="row">
                <div class="col-md-7 md-margin-bottom-50">
                    <h2 class="welcome-title">Chào mừng gia nhập VMN</h2>
                    <p>Mạng chia sẽ thông tin thuốc nam </p><br>
                    <div class="row margin-bottom-50">
                        <div class="col-sm-4 md-margin-bottom-20">
                            <div class="site-statistics">
                                <span>20,039</span>
                                <small>Products</small>
                            </div>
                        </div>
                        <div class="col-sm-4 md-margin-bottom-20">
                            <div class="site-statistics">
                                <span>54,283</span>
                                <small>Reviews</small>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="site-statistics">
                                <span>376k</span>
                                <small>Sale</small>
                            </div>
                        </div>
                    </div>
                    <div class="members-number">
                        <h3>Join more than <span class="shop-green">13,000</span> members worldwide</h3>
                        <img class="img-responsive" src="assets/img/map.png" alt="">
                    </div>
                </div>

                <div class="col-md-5">
                    <form id="sky-form4" class="log-reg-block sky-form">
                        <h2>Đăng ký tài khoản</h2>

                        <div class="login-input reg-input">
                            <div class="row">
                                <div class="col-sm-6">
                                    <section>
                                        <label class="input">
                                            <input type="text" name="lastname" placeholder="Tên" class="form-control">
                                        </label>
                                    </section>
                                </div>
                                <div class="col-sm-6">
                                    <section>
                                        <label class="input">
                                            <input type="text" name="firstname" placeholder="Họ" class="form-control">
                                        </label>
                                    </section>
                                </div>
                            </div>
                            <label class="select margin-bottom-15">
                                <select name="gender" class="form-control">
                                    <option value="0" selected disabled>Giới tính</option>
                                    <option value="1">Nam</option>
                                    <option value="2">Nữ</option>
                                    <option value="3">Khác</option>
                                </select>
                            </label>
                            <div class="row margin-bottom-10">
                                <div class="col-xs-6">
                                    <label class="select">
                                        <select name="month" class="form-control">
                                            <option disabled="" selected="" value="0">Tháng</option>
                                            <option>January</option>
                                            <option>February</option>
                                            <option>March</option>
                                            <option>April</option>
                                            <option>May</option>
                                            <option>June</option>
                                            <option>July</option>
                                            <option>August</option>
                                            <option>September</option>
                                            <option>October</option>
                                            <option>November</option>
                                            <option>December</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="col-xs-3">
                                    <input type="text" name="day" placeholder="Ngày" class="form-control">
                                </div>
                                <div class="col-xs-3">
                                    <input type="text" name="year" placeholder="Năm" class="form-control">
                                </div>
                            </div>
                            <section>
                                <label class="input">
                                    <input type="text" name="username" placeholder="Tên đăng nhập" class="form-control">
                                </label>
                            </section>
                            <section>
                                <label class="input">
                                    <input type="email" name="email" placeholder="Email" class="form-control">
                                </label>
                            </section>
                            <section>
                                <label class="input">
                                    <input type="password" name="password" placeholder="Mật khẩu" id="password" class="form-control">
                                </label>
                            </section>
                            <section>
                                <label class="input">
                                    <input type="password" name="passwordConfirm" placeholder="Nhập lại mật khẩu" class="form-control">
                                </label>
                            </section>
                        </div>
                        <a href="{{route('register-store')}}" class="margin-bottom-20">Đăng ký nhà thuốc</a>
                        <button class="btn-u btn-u-sea-shop btn-block margin-bottom-20 margin-top-20" type="submit">Tạo tài khoản</button>
                    </form>

                    <div class="margin-bottom-20"></div>
                    <p class="text-center">Bạn đã có tài khoản? <a href="{{route('login')}}">Đăng Nhập</a></p>
                </div>
            </div><!--/end row-->
        </div><!--/end container-->
    </div>
    <!--=== End Registre ===-->
@endsection