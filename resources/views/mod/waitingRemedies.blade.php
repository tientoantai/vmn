@extends('mod/modLayout')

@section('modCSS')
    <style>
        .no-padding{padding:0}
        .image-slide{ width: 450px; height: 450px !important}
    </style>
@endsection

@section('modContent')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Quản lý bài thuốc</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#newArticle">Bài thuốc viết mới</a></li>
                <li><a data-toggle="tab" href="#edit">Bài thuốc đã sửa</a></li>
                <li><a data-toggle="tab" href="#report">Bài thuốc bị vi phạm</a></li>

            </ul>
            <div class="tab-content ">
                <div id="newArticle" class="tab-pane fade in active content-manage  ">
                    <br>
                    <h3>Danh sách bài thuốc mới</h3>

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Tên bài thuốc</th>
                            <th>Người đăng</th>
                            <th>Ngày đăng</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($new as $remedy)
                        <tr>
                            <td>{{str_limit($remedy->title,50)}}</td>
                            <td>{{$remedy->author}}</td>
                            <td>{{$remedy->created_at}}</td>
                            <td><a class="btn btn-info new-remedy" data-toggle="modal" data-info="{{json_encode($remedy)}}">Chi tiết</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div id="edit" class="tab-pane fade content-manage">
                    <br/>
                    <h3>Danh sách bài thuốc đã sửa</h3>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Tên bài thuốc</th>
                            <th>Người đăng</th>
                            <th>Ngày đăng</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($edit as $remedy)
                        <tr>
                            <td>{{str_limit($remedy->title,50)}}</td>
                            <td>{{$remedy->author}}</td>
                            <td>{{$remedy->created_at}}</td>
                            <td><a class="btn btn-info edit-remedy" data-toggle="modal" data-info="{{json_encode($remedy)}}">Chi tiết</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div id="report" class="tab-pane fade content-manage ">
                    <br/>
                    <h3>Danh sách bài thuốc bị vi phạm</h3>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Tiêu đề bài thuốc</th>
                            <th>Người báo cáo</th>
                            <th>Ngày báo cáo</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reported as $remedy)
                        <tr>
                            <td>{{str_limit($remedy->title,50)}}</td>
                            <td>{{$remedy->reporter}}</td>
                            <td>{{$remedy->created_at}}</td>
                            <td><a class="btn btn-info reported-remedy" data-info="{{json_encode($remedy)}}">Chi tiết</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade">
        <div class="modal-dialog" style="width:100%">

            <!-- content -->
            <div class="modal-content">
                <!-- header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="text-center"><b>Thông tin bài viết</b></h3>
                </div>
                <!-- header -->

                <!-- body -->
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 md-margin-bottom-50">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">

                                    </div>

                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div> <!-- Carousel -->
                            </div>

                            <div class="col-md-7">
                                <div class="shop-product-heading">
                                    <h2></h2>

                                </div><!--/end shop product social-->

                                <table class="table">
                                    <colgroup>
                                        <col style="width:25%">
                                        <col style="width:75%">
                                    </colgroup>
                                    <tbody>
                                    <tr>
                                        <td><b>Tiêu đề:</b></td>
                                        <td><span id="remedy-title"></span></td>
                                    </tr>
                                    <tr>
                                        <td><b>Thành phần:</b></td>
                                        <td><span id="remedy-ingredient"></span></td>
                                    </tr>
                                    <tr>
                                        <td><b>Mô tả:</b></td>
                                        <td><span id="remedy-description"></span></td>
                                    </tr>
                                    <tr>
                                        <td><b>Cách dùng:</b></td>
                                        <td><span id="remedy-usage"></span></td>
                                    </tr>
                                    <tr>
                                        <td><b>Lưu ý:</b></td>
                                        <td><span id="remedy-note"></span></td>
                                    </tr>
                                    <tr>
                                        <td><b>Công dụng:</b></td>
                                        <td><span id="remedy-utility"></span></td>
                                    </tr>
                                    <tr>
                                        <td><b>Người đóng góp:</b></td>
                                        <td><span id="remedy-author"></span></td>
                                    </tr>
                                    <tr class="report-only">
                                        <td><span style="font-weight: bold; color: red">Nguyên nhân:</span></td>
                                        <td><span id="remedy-reason"></span></td>
                                    </tr>
                                    </tbody></table>
                            </div>
                        </div><!--/end row-->
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="text-center btn-footer">

                    </div>
                </div>

            </div>
            <!-- content -->

        </div>
    </div>
    <!-- end Modal -->
@endsection

@section('modJS')
    <script>
        jQuery(document).ready(function() {

            $('.new-remedy').on('click', function(){
                buildDialog($(this));
            });

            $('.edit-remedy').on('click', function(){
                buildDialog($(this));
            });

            $('.reported-remedy').on('click', function() {
                buildDialog($(this));
            });


        });
        function buildDialog (element){
            var dataInfo = JSON.parse(element.attr('data-info'));
            $.each(dataInfo, function(key, value) {
                $('#remedy-' + key).html(value);
            });
            var img = '';
            var imgHtml = '';
            if (dataInfo.imgUrl != null && dataInfo.imgUrl != ''){
                img = JSON.parse(dataInfo.imgUrl);
                $.each(img, function (key, value){
                    if (key == 0){
                        imgHtml += "<div class='item active'>";
                    }else {
                        imgHtml += "<div class='item'>";
                    }
                    imgHtml += "<img class='image-slide img-responsive' src='"+ value + "' alt='...'>"
                            +"</div>";
                });
            }else{
                imgHtml = "<div class='item active'>"
                        + "<img class='image-slide' src='assets/img/default/noImage.jpg' alt='...'>"
                        +"</div>";
            }

            $('.carousel-inner').html(imgHtml);
            if (element.hasClass('new-remedy')){
                $('.report-only').hide();
                $('.btn-footer').html("<button id='approve-new' class='btn btn-success'>Duyệt</button>"
                        +"<button id='reject-new' class='btn btn-danger'>Từ chối</button>");
            }
            else if(element.hasClass('edit-remedy')){
                $('.report-only').hide();
                $('.btn-footer').html("<button id='approve-edit' class='btn btn-success'>Duyệt</button>"
                        +"<button id='reject-edit' class='btn btn-danger'>Từ chối</button>");
            }else if(element.hasClass('reported-remedy')){
                $('.report-only').show();
                $('.btn-footer').html("<button id='proceed' class='btn btn-success'>Xóa bài</button>"
                        +"<button id='ignore' class='btn btn-danger'>Bỏ qua</button>");
                $('.modal').modal('show');
            }
            $('.modal').modal('show');
        }
    </script>
@endsection