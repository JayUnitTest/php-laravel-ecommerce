@extends('master')
@section("content")
<div class="custom-prod">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Recent Orders</h4>
            @foreach($orders as $item)
            <div class=" row searched-item cart-list-divider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-img" src="{{$item->prodGallery}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h2>Product:{{$item->prodName}}</h2>
                      <h5>Status:{{$item->status}}</h5>
                      <h5>Address:{{$item->address}}</h5>
                      <h5>payment Method:{{$item->payment_method}}</h5>
                      <h5>payment status:{{$item->payment_status}}</h5>
                    </div>
             </div>
            </div>
            @endforeach
          </div>

     </div>
</div>
@endsection 