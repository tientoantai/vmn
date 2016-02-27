@extends('layout')

@section('title')
    Đăng ký nhà thuốc
@endsection
@section('pageCss')
    <link rel="stylesheet" href="{{asset('assets/css/pages/log-reg-v3.css')}}">
    @endsection
    @section('content')
            <!--=== Registre ===-->
    <div class="log-reg-v3 content-md margin-bottom-30">
        <div class="container">
            <div class="row">

                <div class="">
                    <form id="sky-form4" class="log-reg-block sky-form">
                        <h2>Đăng ký nhà thuốc</h2>

                        <div class="login-input reg-input col-md-6">
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
                        <div class="login-input reg-input col-md-6">
                            <section>
                                <label class="input">
                                    <input type="text" name="storename" placeholder="Tên nhà thuốc" class="form-control">
                                </label>
                            </section>
                            <section>
                                <label class="input">
                                    <input type="text" name="address" placeholder="Địa chỉ" class="form-control">
                                </label>
                            </section>
                            <section>
                                <label class="input">
                                    <input type="password" name="phonenumber" placeholder="Số điện thoại" id="password" class="form-control">
                                </label>
                            </section>
                            <section>
                                <label class="input">
                                    <input type="password" name="representative" placeholder="Người đại diện" class="form-control">
                                </label>
                            </section>
                        </div>
                        <div class="col-md-offset-4 col-md-4">
                            <button class=" btn-u btn-u-sea-shop btn-block margin-bottom-20" type="submit">Đăng ký nhà thuốc</button>
                        </div>
                    </form>

                    <div class="margin-bottom-20"></div>
                    <p class="text-center">Bạn đã có tài khoản? <a href="{{route('login')}}">Đăng Nhập</a></p>
                </div>
            </div><!--/end row-->
        </div><!--/end container-->
    </div>
    <!--=== End Registre ===-->
@endsection