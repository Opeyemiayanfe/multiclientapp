@extends('Users.app')

@section('content')
<div class="container-fluid">
    <div class="row" >
        
      <div class="col-sm-6" style="text-align:center; ">
        <img src="/storage/productsimage/{{$prodet->product_image}}" style="max-width:100%; height:auto;"> 
      </div>
      <div class="col-sm-4" style="text-align:center;">
      <h5>{{$prodet->name}}</h5>
      <hr>
      <h5><span>Price: #</span>{{$prodet->Price}}</h5>
      <hr>
       <h4> Description </h4>
       <h5>{{$prodet->description}}</h5>
      
      <a href="/cart/{{$prodet->id}}/edit" class="btn btn-primary"> Add to Cart </a>
    </div>
    </div>
</div>
  
<hr>
@include('footer.footer')
@endsection
