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
                <h1 class="page-header">Quản lý cây thuốc</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row content -->
        <div class="row">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#newArticle">Cây thuốc mới</a></li>
                <li><a data-toggle="tab" href="#editedArticle">Cây thuốc đã sửa</a></li>
                <li><a data-toggle="tab" href="#reportedArticle">Cây thuốc bị vi phạm</a></li>

            </ul>
            <div class="tab-content ">
                <div id="newArticle" class="tab-pane fade in active content-manage">
                    <br>
                    <h3>Danh sách cây thuốc mới</h3>

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Tên cây thuốc</th>
                            <th>Người đăng</th>
                            <th>Ngày đăng</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($new as $plantNew)
                        <tr>
                            <td>{{$plantNew->commonName}}</td>
                            <td>{{$plantNew->author}}</td>
                            <td>{{$plantNew->created_at}}</td>
                            <td><a class="btn btn-info new-plant" data-info="{{json_encode($plantNew)}}">Chi tiết</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div id="editedArticle" class="tab-pane fade content-manage">
                    <br/>
                    <h3>Danh sách yêu cầu chỉnh sửa thông tin cây thuốc</h3>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Tên cây thuốc</th>
                            <th>Người đăng</th>
                            <th>Ngày đăng</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($edit as $plantEdit)
                            <tr>
                                <td>{{$plantEdit->commonName}}</td>
                                <td>{{$plantEdit->author}}</td>
                                <td>{{$plantEdit->created_at}}</td>
                                <td><a class="btn btn-info editing-plant" data-info="{{json_encode($plantEdit)}}">Chi tiết</a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <div id="reportedArticle" class="tab-pane fade content-manage ">
                    <br/>
                    <h3>Danh sách cây thuốc vi phạm</h3>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Tên cây thuốc</th>
                            <th>Người báo cáo</th>
                            <th>Ngày báo cáo</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reported as $reportedPlant)
                            <tr>
                                <td>{{$reportedPlant->commonName}}</td>
                                <td>{{$reportedPlant->reporter}}</td>
                                <td>{{$reportedPlant->created_at}}</td>
                                <td><a class="btn btn-info reported-plant" data-info="{{json_encode($reportedPlant)}}">Chi tiết</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.row content -->
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
                                    <td><b>Tên thường gọi:</b></td>
                                    <td><span id="plant-commonName"></span></td>
                                </tr>
                                <tr>
                                    <td><b>Tên khác:</b></td>
                                    <td><span id="plant-otherName"></span></td>
                                </tr>
                                <tr>
                                    <td><b>Tên khoa học:</b></td>
                                    <td><span id="plant-scienceName"></span></td>
                                </tr>
                                <tr>
                                    <td><b>Đặc điểm:</b></td>
                                    <td><span id="plant-characteristic"></span></td>
                                </tr>
                                <tr>
                                    <td><b>Nơi phân bố:</b></td>
                                    <td><span id="plant-location"></span></td>
                                </tr>
                                <tr>
                                    <td><b>Công dụng:</b></td>
                                    <td><span id="plant-utility"></span></td>
                                </tr>
                                <tr>
                                    <td><b>Người đóng góp:</b></td>
                                    <td><span id="plant-author"></span></td>
                                </tr>
                                <tr class="report-only">
                                    <td><span style="font-weight: bold; color: red">Nguyên nhân:</span></td>
                                    <td><span id="plant-reason"></span></td>
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

            $('.new-plant').on('click', function(){
                buildDialog($(this));
                $('.report-only').hide();
                $('.btn-footer').html("<button id='approve-new' class='btn btn-success'>Duyệt</button>"+
                "<button id='reject-new' class='btn btn-danger'>Từ chối</button>");
                $('.modal').modal('show');
            });

            $('.editing-plant').on('click', function(){
                buildDialog($(this));
                $('.report-only').hide();
                $('.btn-footer').html("<button id='approve-edit' class='btn btn-success'>Duyệt</button>"
                        +"<button id='reject-edit' class='btn btn-danger'>Từ chối</button>");
                $('.modal').modal('show');
            });

            $('.reported-plant').on('click', function() {
                buildDialog($(this));
                $('.report-only').show();
                $('.btn-footer').html("<button id='proceed' class='btn btn-success'>Xóa bài</button>"
                        +"<button id='ignore' class='btn btn-danger'>Bỏ qua</button>");
                $('.modal').modal('show');
            });

            $('#approve-new').on('click', function(){

            });

            $('#approve-edit').on('click', function(){

            });

            function buildDialog (element){
                var dataInfo = JSON.parse(element.attr('data-info'));
                $.each(dataInfo, function(key, value) {
                    $('#plant-' + key).html(value);
                });
                var img = JSON.parse(dataInfo.imgUrl);
                var imgHtml = '';
                $.each(img, function (key, value){
                    if (key == 0){
                        imgHtml += "<div class='item active'>";
                    }else {
                        imgHtml += "<div class='item'>";
                    }
                    imgHtml += "<img class='image-slide' src='"+ value + "' alt='...'>"
                            +"<div class='carousel-caption'>"
                            +"</div></div>";
                });
                $('.carousel-inner').html(imgHtml);

            }
        });
    </script>
@endsection