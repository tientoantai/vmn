@extends('layout')

@section('title')
    Trang cá nhân
@endsection

@section('pageCss')
    <link rel="stylesheet" href="{{asset('assets/css/profile.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/dropzone/dist/dropzone.css')}}">
@endsection
@section('content')
    <!--=== Profile ===-->
    <div class="container content profile">
    <div class="row">
        <!--Left Sidebar-->
        <div class="col-md-3 md-margin-bottom-40">
            <img id="avatar" class="img-responsive profile-img  full-width"
                 data-toggle="modal" data-target=".bs-example-modal-sm" src="{{asset($info->avatar)}}" alt="">
            <ul class="list-group sidebar-nav-v1 margin-bottom-40 " id="sidebar-nav-1">
                <li class="list-group-item active">
                    <a data-toggle="tab" href="#profile"><i class="fa fa-user"></i> Thông tin</a>
                </li>
                <li class="list-group-item">
                    <a data-toggle="tab" href="#posted"><i class="fa fa-file-text-o"></i> Bài đã đăng</a>
                </li>
                @if($isMe)
                <li class="list-group-item">
                    <a data-toggle="tab" href="#notice"><i class="fa fa-comment"></i>Thông báo</a>
                </li>
                <li class="list-group-item">
                    <a data-toggle="tab" href="#changePassword"><i class="fa fa-key"></i>Đổi mật khẩu</a>
                </li>
                @endif
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
                                    @if($isMe)
                                    <button class="btn-u pull-right showModal" data-toggle="modal" data-target="#memberInfoModal">Chỉnh sửa</button>
                                    @endif
                                </div>
                                <div class="panel-body margin-bottom-50">
                                    <dl class="dl-horizontal">
                                        <dt><strong>Tài Khoản: </strong></dt>
                                        <dd>{{$info->accountName}}</dd>
                                        <hr>
                                        <dt><strong>Email:</strong></dt>
                                        <dd>{{$info->email}}</dd>
                                        <hr>
                                        <dt><strong>Họ tên:</strong></dt>
                                        <dd>{{$info->lastName .' '. $info->firstName}}</dd>
                                        <hr>
                                        <dt><strong>Sinh nhật:</strong></dt>
                                        <dd>{{$info->DoB}}</dd>
                                        <hr>
                                        <dt><strong>Giới tính: </strong></dt>
                                        <dd>{{$info->gender}}</dd>
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
                                                        <i class="text-muted">{{$postedPlant->otherName}}</i>
                                                    </ul>
                                                    <ul class="list-inline star-vote pull-right">
                                                        @for($i=1; $i<=5; $i++)
                                                            @if($i <= $postedPlant->rating)
                                                            <li><i class="color-green fa fa-star"></i></li>
                                                            @else
                                                            <li><i class="color-green fa fa-star-o"></i></li>
                                                            @endif
                                                        @endfor
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
                                                        <i class="text-muted">{{$postedRemedy->utility}}</i>
                                                    </ul>
                                                    <ul class="list-inline star-vote pull-right">
                                                        @for($i=1; $i<=5; $i++)
                                                            @if($i <= $postedRemedy->rating)
                                                                <li><i class="color-green fa fa-star"></i></li>
                                                            @else
                                                                <li><i class="color-green fa fa-star-o"></i></li>
                                                            @endif
                                                        @endfor
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>


                            </div>
                        </div>
                        @if($isMe)
                        <div id="notice" class="profile-edit tab-pane fade in ">
                            <div class="panel panel-profile">
                                <div class="panel-heading overflow-h">
                                    <h2 class="panel-title heading-sm pull-left"><i class="fa fa-comments"></i>Thông báo</h2>
                                </div>
                                <div class="panel-body margin-bottom-50">
                                    <div class="media media-v2">
                                        @foreach ($message as $msg)
                                        <div class="media-body">
                                            <h4 class="media-heading">
                                                <strong><a href="#">{{$msg->from}}</a></strong>
                                                <small>{{$msg->created_at}}</small>
                                            </h4>
                                            <p>{!! $msg->content !!}</p>
                                        </div></br>
                                        @endforeach
                                    </div><!--/end media media v2-->
                                </div>
                            </div>
                        </div>
                        <div id="changePassword" class="profile-edit tab-pane fade in ">
                            <form method="post" id="password-change" action="/changePassword" data-credential="{{$info->accountName}}">
                                <div class="panel panel-profile">
                                    <div class="panel-heading overflow-h">
                                        <h2 class="panel-title heading-sm pull-left"><i class="fa fa-user"></i>Đổi Mật Khẩu</h2>
                                    </div>
                                    <div class="panel-body margin-bottom-50">
                                        <dl class="dl-horizontal">
                                            <dt><strong>Mật Khẩu cũ:</strong></dt>
                                            <dd><input name="password" type="password" class="form-control"></dd>
                                            <hr>
                                            <dt><strong>Mật Khẩu mới: </strong></dt>
                                            <dd><input name="newPassword" type="password" class="form-control"></dd>
                                            <hr>
                                            <dt><strong>Nhập lại mật khẩu: </strong></dt>
                                            <dd><input name="newPassword_confirmation" type="password" class="form-control"></dd>
                                            <hr>
                                        </dl>
                                        <button class="btn-u btn-u" type="submit">Lưu</button>
                                        <button class="btn-u btn-u-default" type="reset">Nhập lại</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
        <!-- End Profile Content -->
    </div>
</div>
    @if($isMe)
    <!-- Modal member -->
    <div id="memberInfoModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Thông tin cá nhân</h4>
                </div>
                <div class="modal-body">
                    <form id="update-profile" class="form-horizontal" data-credential="{{$info->accountName}}"
                          role="form" method="POST" action="/updateProfile" novalidate="novalidate">

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Tài khoản</label>
                            <div class="col-sm-6 pd-top-7">
                                <span id="">{{$info->accountName}}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Email</label>

                            <div class="col-sm-6 pd-top-7">
                                <span id="member-email">{{$info->email}}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Tên</label>

                            <div class="col-sm-6 pd-top-7">
                                <input type="text" name="firstName" class="form-control" value="{{$info->firstName}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Họ</label>
                            <div class="col-sm-6 pd-top-7">
                                <input type="text" name="lastName" class="form-control" value="{{$info->lastName}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Giới tính</label>
                            <div class="col-sm-6 pd-top-7">
                                <select id="gender" name="gender" class="form-control" data-gender="{{$info->gender}}">
                                    <option value="0" selected disabled>Giới tính</option>
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                    <option value="Khác">Khác</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Ngày sinh</label>

                            <div class="col-sm-6 pd-top-7">
                                <input type="text" name="DoB" onkeydown="return false" data-provide="datepicker" data-date-end-date="0d" class="form-control" value="{{$info->DoB}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn-u rounded" id="update-profile">Lưu</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- end Modal member-->

    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    Thay đổi ảnh đại diện
                </div>
                <div class="modal-body">
                <form action="{{asset('index.php/upload')}}"
                      class="dropzone image-edit"
                      id="image-dropzone">
                </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <button type="button" id="changeAvatar" class="btn btn-primary" data-credential="{{$info->accountName}}">Lưu ảnh</button>
                </div>
            </div>
        </div>
    </div>
    @endif
    <!--=== End Profile ===-->
@endsection

@section('pageJS')
    <script src="{{asset('assets/plugins/bootstrap-datepicker-1.5.1-dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-datepicker-1.5.1-dist/locales/bootstrap-datepicker.vi.min.js')}}"></script>
    <script src="{{asset('assets/plugins/dropzone/dist/dropzone.js')}}"></script>
    <script>

        Dropzone.autoDiscover = false;
        Dropzone.options.imageDropzone = {
            maxFilesize: 1, //MB
        };
        Dropzone.prototype.defaultOptions.dictDefaultMessage = "Kéo thả file hoặc click để upload ảnh";
        var uploadedImages = '';
        var imageDropzone = new Dropzone("#image-dropzone");
        imageDropzone.on("success", function(file, response) {
            if (uploadedImages.length  =='')
                uploadedImages = response.file;
            else{
                imageDropzone.removeFile(file);
                alert ('Chỉ được đăng 1 ảnh');
            }
            file.previewElement.addEventListener("click", function() {
                imageDropzone.removeFile(file);
                uploadedImages = '';
            });
        });
        $('[name=DoB]').datepicker({
            autoclose: true,
            language: 'vi',
            todayHighlight: true,

        });
        $('.showModal').on('click', function(){
           $('#gender').val($('#gender').attr('data-gender'));
        });
        $('#changeAvatar').on('click', function(){
            var data = {
                credential: $(this).attr('data-credential'),
                avatar: uploadedImages
            }
            var $change = $.post('/changeAvatar', data);
            $change.then(function(response){
                alert (response.message);
                location.reload();
            });
        });
        $('#password-change').on('submit', function(event){
            event.preventDefault();
            var credential = $(this).serializeJson();
            credential.credential = $(this).attr('data-credential');
            var $change = $.post($(this).attr('action'), credential)
            $change.then(function(response){
                if (response.status == 'error'){
                    var msg = '';
                    $.each(response.message, function(key, value){
                        msg += value + '\n';
                    });
                    alert (msg);
                }else if(response.status == 'OK'){
                    alert ('Đổi mật khẩu thành công');
                }
                $('.btn-u-default').click();

            });
        });
        $('#update-profile').on('submit', function(){
            event.preventDefault();
            var credential = $(this).serializeJson();
            credential.credential = $(this).attr('data-credential');
            var $change = $.post($(this).attr('action'), credential)
            $change.then(function(response){
                alert (response.message);
                location.reload();
            });
        });
    </script>
@endsection