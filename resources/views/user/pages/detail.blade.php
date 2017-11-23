@extends('user.master')

@section('description', 'Day la trang chi tiet san pham')

@section('content')
    <section id="product" class="margin-top-40">
        <div class="container">
            <!-- Product Details-->
            <div class="row">
                <!-- Left Image-->
                <div class="span5">
                    <ul class="thumbnails mainimage">
                        <li class="span5">
                            <a rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4"
                               class="thumbnail cloud-zoom"
                               href="{!! asset('resources/upload/'.$product_detail->image) !!}">
                                <img src="{!! asset('resources/upload/'.$product_detail->image) !!}" alt="" title="">
                            </a>
                        </li>
                        @foreach($image as $item_image)
                            <li class="span5">
                                <a rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4"
                                   class="thumbnail cloud-zoom"
                                   href="{!! asset('resources/upload/detail/'.$item_image->image) !!}">
                                    <img src="{!! asset('resources/upload/detail/'.$item_image->image) !!}" alt=""
                                         title="">
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <ul class="thumbnails mainimage">
                        <li class="producthtumb">
                            <a class="thumbnail">
                                <img src="{!! asset('resources/upload/'.$product_detail->image) !!}" alt="" title="">
                            </a>
                        </li>
                        @foreach($image as $item_image)
                            <li class="producthtumb">
                                <a class="thumbnail">
                                    <img src="{!! asset('resources/upload/detail/'.$item_image->image) !!}" alt=""
                                         title="">
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- Right Details-->
                <div class="span7">
                    <div class="row">
                        <div class="span7">
                            <h1 class="productname"><span class="bgnone">{!! $product_detail->name !!}</span></h1>
                            <div class="productprice">
                                <div class="productpageprice">
                                    <span class="spiral"></span>{!! number_format($product_detail->price, 0, ',', '.') !!}
                                </div>
                            </div>
                            <ul class="productpagecart wow fadeInRightBig">
                                <li><a class="cart"
                                       href="{!! url('mua-hang', [$product_detail->id, $product_detail->alias]) !!}">Thêm vào giỏ hàng</a>
                                </li>
                            </ul>
                            <!-- Product Description tab & comments-->
                            <div class="productdesc">
                                <ul class="nav nav-tabs" id="myTab">
                                    <li class="active"><a href="#description">Mô tả</a>
                                    </li>
                                    <li><a href="#specification">Thông tin</a>
                                    </li>
                                    <li><a href="#producttag">Tags</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="description">
                                        <h2>{!! $product_detail->name !!}</h2>
                                        {!! $product_detail->content !!}
                                    </div>
                                    <div class="tab-pane " id="specification">
                                        <ul class="productinfo">
                                            <li>
                                                <span class="productinfoleft"> Mã sản phẩm:</span> {!! $product_detail->alias !!}
                                            </li>
                                            <li>
                                                <span class="productinfoleft"> Reward Points:</span> 60
                                            </li>
                                            <li>
                                                <span class="productinfoleft"> Price: </span> {!! number_format($product_detail->price, 0, ',', '.') !!}
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-pane" id="producttag">
                                        <p> {!! $product_detail->keywords !!}
                                        </p>
                                        <ul class="tags">
                                            <li><a href="#"><i class="icon-tag"></i> Webdesign</a>
                                            </li>
                                            <li><a href="#"><i class="icon-tag"></i> html</a>
                                            </li>
                                            <li><a href="#"><i class="icon-tag"></i> html</a>
                                            </li>
                                            <li><a href="#"><i class="icon-tag"></i> css</a>
                                            </li>
                                            <li><a href="#"><i class="icon-tag"></i> jquery</a>
                                            </li>
                                            <li><a href="#"><i class="icon-tag"></i> css</a>
                                            </li>
                                            <li><a href="#"><i class="icon-tag"></i> jquery</a>
                                            </li>
                                            <li><a href="#"><i class="icon-tag"></i> Webdesign</a>
                                            </li>
                                            <li><a href="#"><i class="icon-tag"></i> css</a>
                                            </li>
                                            <li><a href="#"><i class="icon-tag"></i> jquery</a>
                                            </li>
                                            <li><a href="#"><i class="icon-tag"></i> Webdesign</a>
                                            </li>
                                            <li><a href="#"><i class="icon-tag"></i> html</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Related Products-->
    <section id="related" class="row">
        <div class="container">
            <h1 class="heading1"><span class="maintext">Sản phẩm liên quan</span><span class="subtext"> Những sản phẩm cùng tính năng thông dụng nhất</span>
            </h1>
            <ul class="thumbnails">
                @foreach($product_cate as $item_product_cate)
                    <li class="span3 wow fadeInUp" data-wow-offset="100">
                        <a class="prdocutname"
                           href="{!! url('chi-tiet-san-pham', [ $item_product_cate->id, $item_product_cate->alias]) !!}">{!! $item_product_cate->name !!}</a>
                        <div class="thumbnail">
                            <!--<span class="sale tooltip-test">Sale</span>-->
                            <a href="{!! url('chi-tiet-san-pham', [ $item_product_cate->id, $item_product_cate->alias]) !!}"><img
                                        alt="" src="{!! asset('resources/upload/'.$item_product_cate->image) !!}"></a>
                            <div class="pricetag">
                                <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                                <div class="price">
                                    <div class="pricenew">{!! $item_product_cate->price !!}</div>
                                    <div class="priceold"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
    <!-- Popular Brands-->
@endsection