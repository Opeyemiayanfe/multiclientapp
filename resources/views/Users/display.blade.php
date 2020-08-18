@extends('Users.app')

@section('content')
<div class="container-fluid"> 
    <div class="row">
        @foreach($pid as $pids)
    <div class="col-sm-3" style="text-align:center; margin-top:10px;">
      
        <a href="/userpage/{{$pids->id}}/edit">  
      <img src="/storage/productsimage/{{$pids->product_image}}" style="max-width:100%; height:200px;"> 
        </a>
     <h5>{{$pids->name}}</h5>
        <h5><span>Price: #</span>{{$pids->Price}}</h5> 
    </div>
    @endforeach
    </div>
</div>
@include('footer.footer')
@endsection
