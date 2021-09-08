@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            @foreach($orders as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h2>Name: {{$item->name}}</h2>
                      <h5><strong>Delivery Status:</strong> {{$item->status}}</h5>
                      <h5><strong>Address:</strong> {{$item->address}}</h5>
                      <h5><strong>Payment Status:</strong> {{$item->payment_status}}</h5>
                      <h5><strong>Payment Method:</strong> {{$item->payment_method}}</h5>
                    </div>
             </div>
            </div>
            @endforeach
          </div>

     </div>
</div>
@endsection 