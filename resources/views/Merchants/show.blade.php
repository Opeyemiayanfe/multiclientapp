@extends('Merchants.app')

@section('content')
<div class="container-fluid"> 
    <div class="row">
        <div class="col-sm-2">
            <div class="sidebar content-box" style="background-color:cornsilk; height:500px">
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="/signup" style="color:green;font-size:20px">
                        {{Auth::guard('signup')->user()->name}} <strong>Dashboard</strong></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/product/create" style="color:green;font-size:18px;">Add product page</a>
                    </li>
                  </ul>
            </div>
        </div>
        
        <div class="col-sm-8 offset-1">
            
          <div class="card">
              <div class="card-header"></div>
              <div class="card-body">
                @if(count($pro)>0)
                <div class="row">
                @foreach($pro as $pros)
                <div class="col-sm-3" style="text-align:center; margin-top:10px;">
      
                  <img src="/storage/productsimage/{{$pros->product_image}}" style="max-width:100%; height:200px;"> 
                 
                  <h5>{{$pros->name}}</h5>
                  <h5><span>Price: #</span>{{$pros->Price}}</h5> 
                </div>
                
                 @endforeach
              </div>
                 @else
                 <p> No product yet </p>
                 @endif
                
              </div>
          </div>
          
        </div>
     
    </div>
</div>
@include('footer.footer')
@endsection
