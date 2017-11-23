@extends('user.master')

@section('description', 'Day la trang chu')

@section('content')
    <!-- Slider Start-->
    @include('user.blocks.slider')
    <!-- Slider End-->

    <!-- Featured Product-->
    <section id="featured" class="row">
        <div class="container">
            <h1 class="heading1"><span class="maintext">Sản phẩm nỗi bật</span><span class="subtext"> Những mặt hàng bán chạy</span></h1>
            <ul class="thumbnails">
                @foreach($product as $item)
                    <li class="span3">
                        <a class="prdocutname" href="{!! url('chi-tiet-san-pham',[$item->id, $item->alias]) !!}">{!! $item->name !!}</a>
                        <div class="thumbnail">
                            <!--<span class="sale tooltip-test">Sale</span>-->
                            <a href="{!! url('chi-tiet-san-pham',[$item->id, $item->alias]) !!}"><img class="img-category" alt="" src="{!! asset('resources/upload/'.$item->image) !!}"></a>
                            <div class="pricetag wow fadeInUp">
                                <span class="spiral"></span><a href="{!! url('mua-hang', [$item->id, $item->alias]) !!}" class="productcart">ADD TO CART</a>
                                <div class="price">
                                    <div class="pricenew">{!! number_format($item->price, 0, ',', '.') !!}</div>
                                    <div class="priceold"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <!-- Latest Product-->
    <section id="latest" class="row">
    <div class="container">
        <h1 class="heading1"><span class="maintext">Sản phẩm mới nhất</span><span class="subtext"> Hàng mới về</span></h1>
        <ul class="thumbnails">
            @foreach($product as $item)
                <li class="span3">
                    <a class="prdocutname" href="{!! url('chi-tiet-san-pham',[$item->id, $item->alias]) !!}">{!! $item->name !!}</a>
                    <div class="thumbnail">
                        <!--<span class="new tooltip-test" >New</span>-->
                        <a href="{!! url('chi-tiet-san-pham',[$item->id, $item->alias]) !!}"><img class="img-category" alt="" src="{!! asset('resources/upload/'.$item->image) !!}"></a>
                        <div class="pricetag  wow fadeInUp" data-wow-offset="100">
                            <span class="spiral"></span><a href="{!! url('mua-hang', [$item->id, $item->alias]) !!}" class="productcart">ADD TO CART</a>
                            <div class="price">
                                <div class="pricenew">{!! number_format($item->price, 0, ',', '.') !!}</div>
                                <div class="priceold"></div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    </section>
@endsection
