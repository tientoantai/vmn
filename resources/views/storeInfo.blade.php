@extends('layout')

@section('title')
    Trang cá nhân
@endsection

@section('pageCss')
    <link rel="stylesheet" href="{{asset('assets/css/profile.css')}}">
    @endsection
    @section('content')
            <!--=== Profile ===-->
    <div class="container content profile">
        <div class="row">
            <!--Left Sidebar-->
            <div class="col-md-3 md-margin-bottom-40">
                <img class="img-responsive profile-img margin-bottom-20 full-width" src="{{asset('assets/img/team/01.jpg')}}" alt="">

                <ul class="list-group sidebar-nav-v1 margin-bottom-40 " id="sidebar-nav-1">
                    <li class="list-group-item active">
                        <a data-toggle="tab" href="#profile"><i class="fa fa-user"></i> Thông tin</a>
                    </li>
                    <li class="list-group-item">
                        <a data-toggle="tab" href="#posted"><i class="fa fa-file-text-o"></i> Bài đã đăng</a>
                    </li>
                    <li class="list-group-item">
                        <a data-toggle="tab" href="#notice"><i class="fa fa-comment"></i>Thông báo</a>
                    </li>
                </ul>
            </div>
            <!--End Left Sidebar-->

            <!-- Profile Content -->
            <div class="col-md-9">
                <div class="profile-body margin-bottom-20" >
                    <div class="tab-v1">
                        <div class="tab-content">
                            <div id="profile" class="profile-edit tab-pane fade in active">
                                <div class="panel panel-profile">
                                    <div class="panel-heading overflow-h">
                                        <h2 class="panel-title heading-sm pull-left"><i class="fa fa-user"></i>Thông tin cá nhân</h2>
                                    </div>
                                    <div class="panel-body margin-bottom-50">
                                        <dl class="dl-horizontal">
                                            <dt><strong>Tài Khoản: </strong></dt>
                                            <dd>{{$info->accountName}}</dd>
                                            <hr>
                                            <dt><strong>Email:</strong></dt>
                                            <dd>{{$info->email}}</dd>
                                            <hr>
                                            <dt><strong>Tên nhà thuốc:</strong></dt>
                                            <dd>{{$info->storename}}</dd>
                                            <hr>
                                            <dt><strong>Địa chỉ:</strong></dt>
                                            <dd>{{$info->address}}</dd>
                                            <hr>
                                            <dt><strong>Số điện thoại: </strong></dt>
                                            <dd>{{$info->phonenumber}}</dd>
                                            <hr>
                                            <dt><strong>Người đại diện </strong></dt>
                                            <dd>{{$info->representative}}</dd>
                                            <hr>
                                            <dt><strong>Ngày tham gia: </strong></dt>
                                            <dd>{{$info->created_at}}</dd>
                                            <hr>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <div id="posted" class="profile-edit tab-pane fade in ">
                                <div class="panel-body margin-bottom-50">
                                    <ul class="nav nav-justified nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#medicinal_plants">Cây thuốc</a></li>
                                        <li><a data-toggle="tab" href="#remedies">Bài thuốc</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="medicinal_plants" class="profile-edit tab-pane fade in active">
                                            @foreach($plantsPosted as $postedPlant)
                                                <div class="row">
                                                    <div class="easy-block-v1 col-md-2">
                                                        <img class="img-responsive" src="{{asset($postedPlant->thumbnailUrl)}}" alt="">
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="projects">
                                                            <h2><a class="color-dark" href="{{route('plant-detail',['id' => $postedPlant->id])}}">
                                                                    {{$postedPlant->commonName}}</a></h2>
                                                        </div>
                                                        <div class="project-share">
                                                            <ul class="list-inline comment-list-v2 pull-left">
                                                                <li><i class="fa fa-comments"></i> <a href="#">32</a></li>
                                                            </ul>
                                                            <ul class="list-inline star-vote pull-right">
                                                                <li><i class="color-green fa fa-star"></i></li>
                                                                <li><i class="color-green fa fa-star"></i></li>
                                                                <li><i class="color-green fa fa-star"></i></li>
                                                                <li><i class="color-green fa fa-star"></i></li>
                                                                <li><i class="color-green fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div id="remedies" class="profile-edit tab-pane fade in">
                                            @foreach($remediesPosted as $postedRemedy)
                                                <div class="row">
                                                    <div class="easy-block-v1 col-md-3">
                                                        <img class="img-responsive" src="{{asset($postedRemedy->thumbnailUrl)}}" alt="">
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="projects">
                                                            <h2><a class="color-dark" href="{{route('remedy-detail',['id' => $postedRemedy->id])}}">
                                                                    {{$postedRemedy->title}}</a></h2>
                                                        </div>
                                                        <div class="project-share">
                                                            <ul class="list-inline comment-list-v2 pull-left">
                                                                <li><i class="fa fa-comments"></i> <a href="#">32</a></li>
                                                            </ul>
                                                            <ul class="list-inline star-vote pull-right">
                                                                <li><i class="color-green fa fa-star"></i></li>
                                                                <li><i class="color-green fa fa-star"></i></li>
                                                                <li><i class="color-green fa fa-star"></i></li>
                                                                <li><i class="color-green fa fa-star"></i></li>
                                                                <li><i class="color-green fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div id="notice" class="profile-edit tab-pane fade in ">
                                <div class="panel panel-profile">
                                    <div class="panel-heading overflow-h">
                                        <h2 class="panel-title heading-sm pull-left"><i class="fa fa-comments"></i>Thông báo</h2>
                                    </div>
                                    <div class="panel-body margin-bottom-50">
                                        <div class="media media-v2">
                                            <a class="pull-left" href="#">
                                                <img class="media-object rounded-x" src="assets/img/testimonials/img2.jpg" alt="">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">
                                                    <strong><a href="#">Eva Nelson</a></strong>
                                                    <small>About an hour ago</small>
                                                </h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada rhoncus tellus blandit facilisis. Morbi faucibus eros facilisis vulputate mollis. Mauris sodales ante lorem, sed fringilla orci rhoncus ac. Donec sit amet eros at libero egestas interdum non quis libero.</p>
                                            </div>
                                        </div><!--/end media media v2-->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Profile Content -->
        </div>
    </div>
    <!--=== End Profile ===-->
@endsection