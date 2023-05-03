@extends('master')
@section('content')
    <div class="container">
        <div class="row">


            <div class="container">
                <h3 class="h3">Trending Products</h3>
                <div class="row">

                    @foreach ($products as $item)
                        <div class="col-md-3 col-sm-6">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="detail/{{ $item['id'] }}">
                                        <img class="pic-1" src="{{ $item['gallery'] }}">
                                        <img class="pic-2" src="{{ $item['gallery'] }}">
                                    </a>

                                    <span class="product-new-label">Sale</span>
                                    <span class="product-discount-label">20%</span>
                                </div>
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star disable"></li>
                                </ul>
                                <div class="product-content">
                                    <h3 class="title"><a href="detail/{{ $item['id'] }}">{{ $item['name'] }}</a></h3>
                                    <div class="price">{{ $item['price'] }}
                                        <span>$20.00</span>
                                    </div>
                                    <a class="add-to-cart" href="">+ Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <hr>


        </div>
    </div>
@endsection
