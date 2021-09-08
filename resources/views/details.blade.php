@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go back</a>
            <h2>{{$product['name']}}</h2>
            <h3>Price: &#8377 {{$product['price']}}</h3>
            <h4>Description: {{$product['description']}}</h4>
            <h4>Category: {{$product['category']}}</h4>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input hidden type="text" name="product_id" value={{$product['id']}}>
                <button class="btn btn-primary">Add to Cart</button>
            </form>
            <br><br>
            <a href="/ordernow" class="btn btn-success">Buy Now</a>
            <br><br>
        </div>
    </div>
</div>
@endsection