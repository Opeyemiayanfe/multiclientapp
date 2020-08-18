@extends('Merchants.app')

@section('content')
<div class="container-fluid"> 
    <div class="row">
        <div class="col-sm-6 offset-1">
            <img src="/img/bg2.jpg" style="max-width:100%; height:400px">
        </div>
     <div class="col-sm-4" style="text-align: center;color:blue">
             <h2><span> Welcome to our Merchant page</span></h2>
            <h4>On this page you can signUp as a merchant if you dont have an account yet.
                if you already have an account You can Login to your dashboard. On your dashboard, you 
                can create your service page, add product to your service and also view and edit your page.
                Your satisfactory as a merchant is our priroty.</h4> <h4>For more equiry check our contact below</h4>.
                
         </div>
     </div>
    </div>
</div>

<div class="container-fluid" > 
    <div class="row" style="text-align:center">
        <div class="col-sm-3">
            <img src="/img/bg1.jpeg" style="max-width:100%; height:220px">
        </div>
        <div class="col-sm-3">
            <img src="/img/bg1.jpeg" style="max-width:100%; height:220px">
        </div>
        <div class="col-sm-3">
            <img src="/img/bg1.jpeg" style="max-width:100%; height:220px">
        </div>
        <div class="col-sm-3">
            <img src="/img/bg1.jpeg" style="max-width:100%; height:220px">
        </div>
    </div>
</div>
@include('footer.footer')
@endsection
