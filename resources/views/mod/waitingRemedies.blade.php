@extends('mod/modLayout')

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
                        <tr>
                            <td>Cỏ nến</td>
                            <td>John Lenon</td>
                            <td>25/01/2016</td>
                            <td><a class="btn btn-info" data-toggle="modal" data-target="#newRemedyArticleModal">Chi tiết</a></td>
                        </tr>
                        <tr>
                            <td>Cỏ nhọ nồi</td>
                            <td>Quynh HT</td>
                            <td>12/02/2016</td>
                            <td><a class="btn btn-info" data-toggle="modal" data-target="#newRemedyArticleModal">Chi tiết</a></td>
                        </tr>
                        <tr>
                            <td>Huyết dụ</td>
                            <td>Ronaldo</td>
                            <td>30/03/2016</td>
                            <td><a class="btn btn-info" data-toggle="modal" data-target="#newRemedyArticleModal">Chi tiết</a></td>
                        </tr>
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
                        <tr>
                            <td>Cỏ nến</td>
                            <td>John Lenon</td>
                            <td>25/01/2016</td>
                            <td><a class="btn btn-info" data-toggle="modal" data-target="#newRemedyArticleModal">Chi tiết</a></td>
                        </tr>
                        <tr>
                            <td>Cỏ nhọ nồi</td>
                            <td>Quynh HT</td>
                            <td>12/02/2016</td>
                            <td><a class="btn btn-info" data-toggle="modal" data-target="#newRemedyArticleModal">Chi tiết</a></td>
                        </tr>
                        <tr>
                            <td>Huyết dụ</td>
                            <td>Ronaldo</td>
                            <td>30/03/2016</td>
                            <td><a class="btn btn-info" data-toggle="modal" data-target="#newRemedyArticleModal">Chi tiết</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div id="report" class="tab-pane fade content-manage ">
                    <br/>
                    <h3>Danh sách bài thuốc bị vi phạm</h3>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Tên bài thuốc</th>
                            <th>Người đăng</th>
                            <th>Ngày đăng</th>
                            <th>Người báo cáo</th>
                            <th>Ngày báo cáo</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Cỏ nến</td>
                            <td>John Lenon</td>
                            <td>25/01/2016</td>
                            <td>Quynh HT</td>
                            <td>12/02/2016</td>
                            <td><a class="btn btn-info" data-toggle="modal" data-target="#fsModal">Chi tiết</a></td>
                        </tr>
                        <tr>
                            <td>Cỏ nhọ nồi</td>
                            <td>Quynh HT</td>
                            <td>12/02/2016</td>
                            <td>Ronaldo</td>
                            <td>30/03/2016</td>
                            <td><a class="btn btn-info" data-toggle="modal" data-target="#fsModal">Chi tiết</a></td>
                        </tr>
                        <tr>
                            <td>Huyết dụ</td>
                            <td>Ronaldo</td>
                            <td>30/03/2016</td>
                            <td>John Lenon</td>
                            <td>25/04/2016</td>
                            <td><a class="btn btn-info" data-toggle="modal" data-target="#fsModal">Chi tiết</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection