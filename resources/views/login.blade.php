@extends('layout')
@section('title')
    Đăng nhập
@endsection

@section('pageCss')
    <!-- CSS Page Style -->
    <link rel="stylesheet" href="{{asset('assets/css/pages/log-reg-v3.css')}}">
@endsection

@section('content')
    <!--=== Login ===-->
    <div class="log-reg-v3 content-md">
    <div class="container">
        <div class="row">
            <div class="col-md-7 md-margin-bottom-50">
                <h2 class="welcome-title">Welcome to VMN</h2>
                <p>Suspendisse et tincidunt ipsum, et dignissim urna. Vestibulum nisl tortor, gravida at magna et, suscipit vehicula massa.</p><br>
                <div class="info-block-v2">
                    <i class="icon icon-layers"></i>
                    <div class="info-block-in">
                        <h3>Pellentesque vulputate</h3>
                        <p>Vestibulum non ex volutpat, sodales diam sit amet, semper nunc. Integer sed nibh commodo, tincidunt nisi.</p>
                    </div>
                </div>
                <div class="info-block-v2">
                    <i class="icon icon-settings"></i>
                    <div class="info-block-in">
                        <h3>Curabitur tincidunt</h3>
                        <p>Vestibulum non ex volutpat, sodales diam sit amet, semper nunc. Integer sed nibh commodo, tincidunt nisi.</p>
                    </div>
                </div>
                <div class="info-block-v2">
                    <i class="icon icon-paper-plane"></i>
                    <div class="info-block-in">
                        <h3>Aenean condimentum</h3>
                        <p>Vestibulum non ex volutpat, sodales diam sit amet, semper nunc. Integer sed nibh commodo, tincidunt nisi.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <form id="sky-form1" class="log-reg-block sky-form" method="post" action="/login">
                    <h2>Đăng nhập vào hệ thống</h2>

                    <section>
                        <label class="input login-input">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" placeholder="Email hoặc tài khoản" name="username" class="form-control">
                            </div>
                        </label>
                    </section>
                    <section>
                        <label class="input login-input no-border-top">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" placeholder="Mật khẩu" name="password" class="form-control">
                            </div>
                        </label>
                    </section>
                    <div class="row margin-bottom-5">
                        <div class="col-xs-6">
                            <label class="checkbox">
                                <input type="checkbox" name="checkbox"/>
                                <i></i>
                                Ghi nhớ
                            </label>
                        </div>
                        <div class="col-xs-6 text-right">
                            <a href="#">Quên mật khẩu?</a>
                        </div>
                    </div>
                    <button class="btn-u btn-u-sea-shop btn-block margin-bottom-20" type="submit">Log in</button>

                    <div class="border-wings">
                        <span>hoặc</span>
                    </div>

                    <div class="row columns-space-removes">
                        <div class="col-lg-6 margin-bottom-10">
                            <button type="button" class="btn-u btn-u-md btn-u-fb btn-block"><i class="fa fa-facebook"></i> Facebook Log In</button>
                        </div>
                        <div class="col-lg-6">
                            <button type="button" class="btn-u btn-u-md btn-u-tw btn-block"><i class="fa fa-twitter"></i> Twitter Log In</button>
                        </div>
                    </div>
                </form>

                <div class="margin-bottom-20"></div>
                <p class="text-center">Chưa có tài khoản? Đăng ký <a href="{{route('register')}}">tại đây</a></p>
            </div>
        </div><!--/end row-->
    </div><!--/end container-->
</div>
    <!--=== End Login ===-->
@endsection