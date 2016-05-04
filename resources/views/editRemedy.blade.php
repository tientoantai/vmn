@extends('layout')
@section('title')
    Đóng góp bài thuốc
@endsection
@section('pageCss')

    <link rel="stylesheet" href="{{asset('assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/master-slider/masterslider/style/masterslider.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/master-slider/masterslider/skins/default/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/dropzone/dist/dropzone.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/jquery/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/sliptree-bootstrap/dist/css/tokenfield-typeahead.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/sliptree-bootstrap/dist/css/bootstrap-tokenfield.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/sliptree-bootstrap/docs-assets/css/pygments-manni.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/sliptree-bootstrap/docs-assets/css/docs.css')}}">
    <style>
        .image-edit{
            width: 550px;
            height: 550px !important;
        }
    </style>
    @endsection


    @section('content')

            <!--=== Shop Product ===-->
    <div class="shop-product content">

        <div class="container">
            <div class="row">
                <div class="col-md-6 md-margin-bottom-50">
                    <div class="ms-showcase2-template">
                        <div id="carousel-example-generic" data-image="{{$remedy->imgUrl}}" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                @foreach (json_decode($remedy->imgUrl) as $k => $image)
                                    @if($k == 0)
                                        <div class="item active">
                                            @else
                                                <div class="item">
                                                    @endif
                                                    <img class="image-slide img-responsive image-edit " src="{{asset($image)}}" alt="">
                                                    <div class=" carousel-caption">
                                                        <label><input type="checkbox" value="{{$k}}">Xóa ảnh này</label>
                                                    </div>
                                                </div>
                                                @endforeach
                                                <div class="item">
                                                    <form action="/index.php/upload"
                                                          class="dropzone image-edit"
                                                          id="image-dropzone">
                                                    </form>
                                                </div>
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
                    </div>
                <div class="col-md-6 md-margin-bottom-50">
                    <div class="shop-product-heading">
                        <h2>Nhập thông tin bài thuốc</h2>
                    </div>
                    <p>Những thông tin có đánh dấu <span class="text-danger">*</span> là bắt buộc nhập.</p>
                    <form id="remedy-adding" action="/updateRemedy" method="post" data-update="{{$remedy->id}}">
                        <table class="table">
                            <colgroup>
                                <col style="width:30%">
                                <col style="width:70%">
                            </colgroup>
                            <tbody>
                            <tr>
                                <td><b>Tiêu đề:</b><span class="text-danger">*</span></td>
                                <td><b>{{$remedy->title}}</b></td>
                            </tr>
                            <tr>
                                <td><b>Thành phần:</b></td>
                                <td>@foreach($ingredient as $plant)
                                        @if(isset($plant->id))
                                            [<a href="{{route('plant-detail',['id' => $plant->id])}}">
                                                {{$plant->medicinalPlantName}}</a>]
                                        @else
                                            [<a href="{{route('medicinal-plant',['keyword' => $plant->medicinalPlantName])}}">
                                                {{$plant->medicinalPlantName}}</a>]
                                        @endif
                                    @endforeach</td>
                            </tr>
                            <tr>
                                <td><b>Mô tả:</b><span class="text-danger">*</span></td>
                                <td><textarea name="description" class="full-width"
                                              rows="4"/>{{$remedy->description}}</textarea> </td>
                            </tr>
                            <tr>
                                <td><b>Cách dùng:</b><span class="text-danger">*</span></td>
                                <td><input name="usage" class="form-control" value="{{$remedy->usage}}"/> </td>
                            </tr>
                            <tr>
                                <td><b>Lưu ý:</b></td>
                                <td><textarea name="note" class="full-width " rows="4">{{$remedy->note}}</textarea></td>
                            </tr>
                            <tr>
                                <td><b>Công dụng:</b><span class="text-danger">*</span></td>
                                <td><input name="utility" class="form-control" value="{{$remedy->utility}}"/> </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><button type="submit" class="btn-u">Đăng</button></td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div><!--/end row-->
        </div>
    </div>
    <!--=== End Shop Product ===-->
@endsection

@section('pageJS')
    <script src={{asset('assets/plugins/dropzone/dist/dropzone.js')}}></script>

    <script>

        Dropzone.autoDiscover = false;
        Dropzone.options.imageDropzone = {
            maxFilesize: 1 //MB
        };
        Dropzone.prototype.defaultOptions.dictDefaultMessage = "Kéo thả file hoặc click để upload ảnh";
        var uploadedImages = JSON.parse($('#carousel-example-generic').attr('data-image'));
        jQuery(document).ready(function() {
            App.init();

            var deteleImage = []
            $(':checkbox').on('click', function(){
                if($(this).is(':checked')){
                    deteleImage.push($(this).val());
                }
                else{
                    deteleImage.splice(deteleImage.indexOf($(this).val()),1)
                }
            });
            var imageDropzone = new Dropzone("#image-dropzone");
            imageDropzone.on("success", function(file, response) {
                uploadedImages.push(response.file);
                file.previewElement.addEventListener("click", function() {
                    imageDropzone.removeFile(file);
                    uploadedImages.splice(uploadedImages.indexOf(response.file),1);
                });
            });

            $('#remedy-adding').on('submit', function(event){
                event.preventDefault();
                var remedyRaw = $(this).serializeJson();
                remedyRaw.remedyId = $(this).attr('data-update');
                $.each(deteleImage, function(index, value){
                    uploadedImages.splice(value,1)
                });
                if(uploadedImages.length > 0){
                    remedyRaw.imgUrl = JSON.stringify(uploadedImages);
                    remedyRaw.thumbnailUrl = uploadedImages[0];
                }
                else{
                    remedyRaw.imgUrl = remedyRaw.thumbnailUrl = '';
                }

                var $createPlant = $.post($(this).attr('action'), remedyRaw);

                $createPlant.then(function (response) {
                    alert (response.message);
                    if (response.status != 'error'){
//                        window.location.href = '/remedies';
                    }
                });
            });
        });
    </script>
@endsection