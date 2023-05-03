@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-4 item-photo">
                <img style="max-width:50%;" src="{{ $products['gallery'] }}" />
            </div>
            <div class="col-xs-5" style="border:0px solid gray">
                <!-- Datos del vendedor y titulo del producto -->
                <h3>{{ $products['name'] }}</h3>
                <h5 style="color:#337ab7"><a href="#">{{ $products['category'] }}</a> </h5>

                <!-- Precios -->
                <a href=""><button>Add to Cart</button></a>
                <a href=""><button>Buy Now</button></a>
                <h6 class="title-price"><small>price</small></h6>
                <h3 style="margin-top:0px;">AED{{ $products['price'] }}</h3>




            </div>
        </div>
    @endsection
