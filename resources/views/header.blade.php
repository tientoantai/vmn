
<!--=== Header v5 ===-->
<div class="header-v5 header-static">
    <!-- Topbar v3 -->
    <div class="topbar-v3">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <ul class="list-inline right-topbar pull-right">
                        <li><a href="{{route('login')}}">Login</a> | <a href="{{route('register')}}">Register</a></li>
                    </ul>
                </div>
            </div>
        </div><!--/container-->
    </div>
    <!-- End Topbar v3 -->

    <!-- Navbar -->
    <div class="navbar navbar-default mega-menu" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('home')}}">
                    <img id="logo-header" src="assets/img/logo.png" alt="Logo">
                </a>
            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-responsive-collapse">
                <!-- Nav Menu -->
                <ul class="nav navbar-nav">
                    <!-- Pages -->
                    <li class="">
                        <a href="{{route('home')}}" class="dropdown-toggle" >
                            Trang chủ
                        </a>
                    </li>
                    <!-- End Pages -->

                    <!-- Medicinal Plant -->
                    <li class="">
                        <a href="{{route('medicinal-plant')}}" class="dropdown-toggle" >
                            Cây thuốc
                        </a>
                    </li>
                    <!-- End Medicinal Plant -->

                    <!-- Remedy -->
                    <li class="">
                        <a href="{{route('remedies')}}" class="dropdown-toggle">
                            Bài thuốc
                        </a>
                    </li>
                    <!-- End Remedy -->

                    <!-- Store -->
                    <li class="">
                        <a href="javascript:void(0);" class="dropdown-toggle">
                            Nhà thuốc
                        </a>
                    </li>
                    <!-- End Store -->
                </ul>
                <!-- End Nav Menu -->
            </div>
        </div>
    </div>
    <!-- End Navbar -->
</div>
<!--=== End Header v5 ===-->