@extends('layout')
@section('title')
    Thông tin cây thuốc
@endsection
@section('content')
    <!--=== Content Part ===-->
    <div class="content container">
        <div class="row">

            <div class="col-md-12">
                <div class="row margin-bottom-5">
                    <div class=" result-category">
                        <h2>Danh sách cây thuốc</h2>
                    </div>

                    <form id="homeSearch" class="col-md-12 col-lg-12" method="get" action="/medicinalPlants">
                        <div class="input-group col-md-6 pull-right margin-bottom-10">
                            <input type="text" class="form-control" name="keyword"  value="{{$condition->keyword()}}" placeholder="Nhập tên cây thuốc để tìm kiếm">
                            <span class="input-group-btn">
                                <button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <div class="margin-bottom-10">
                        <a href="{{route('add-plant')}}" type="button" class="btn btn-success "><i class="fa fa-plus"></i> Đóng góp cây thuốc</a>
                        <a href="{{route('advanced-search-plant')}}" type="button" class="btn btn-primary pull-right"><i class="fa fa-search-plus"></i> Hiển thị tìm kiếm nâng cao</a>
                    </div>
                </div>
                <?php
                if ($listPlant)
//                    $listPlantDisplay = array_chunk((array)$listPlant->items(),3)
                ?>
                <div class="filter-results">
                    <div class="row illustration-v2 margin-bottom-30">
                    @if($listPlant)
                    {{--@foreach($listPlantDisplay as $plantRow)--}}
                        @foreach($listPlant as $plant)
                        <div class="col-md-4 col-sm-6">
                            <div class="product-img product-img-brd">
                                <!--Thay = link thumbnail cây thuốc-->
                                <a href="{{route('plant-detail',['id' => $plant->id])}}">
                                    <img class="full-width img-responsive plant-image" src="{{$plant->thumbnailUrl}}" alt="">
                                </a>
                            </div>
                            <div class="product-description product-description-brd margin-bottom-30">
                                <div class="overflow-h margin-bottom-5">
                                    <div class="pull-left">
                                        <h4 class="title-price"><a href=""></a>{{$plant->commonName}}</h4>
                                    </div>
                                    <div class="product-price">
                                        <span class="title-price">Like</span>
                                        <span class="title-price line-through">Share</span>
                                    </div>
                                </div>
                                <ul class="list-inline product-ratings">
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating fa fa-star"></i></li>
                                    <li><i class="rating fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    {{--</div>--}}
                    {{--@endforeach--}}
                    @else

                        <h3 class="text-center">Không có kết quả cho cây thuốc bạn muốn tìm</h3>
                        <h4 class="text-center">Bạn có thể đóng góp cây thuốc này cho hệ thống</h4>
                    @endif
                    </div> <!-- illustration-v2 -->

                </div><!--/end filter resilts-->

                {!! $listPlant->render()   !!}<!--/end pagination-->
            </div>
        </div><!--/end row-->
    </div><!--/end container-->
    <!--=== End Content Part ===-->
@stop
