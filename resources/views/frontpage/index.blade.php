@extends('layouts.app')

@section('content')
<div class="container-fluid"> 
    <div class="row">
        <div class="col-sm-8">
            <img src="/img/bg1.jpeg" style="max-width:100%; height:400px">
        </div>
     <div class="col-sm-4" style="text-align: center">
             <h3><span style="text-decoration: underline; color:blue"> Cephas Multiclient online shopping services</span></h3>
            <h4><span style="color:blue">One of the leading online shopping services. On this site, you can be
                a merchant by creating a page to display your product and services.
            Likewise you can check available services as users and purchase goods and services available</span> </h4>
                
                <div style="margin-top: 10px">
                    <h4><span style="color:blue;font-weight:bold">Want to become a merchant!!</span></h4>
                   <a href="/merchant"><span style="font-size: 25px;color:blue;font-weight:bold
                    
                    ">Click here to go to merchant page</span></a>
                    
             </div>
         </div>
     </div>
    </div>
</div>

<div class="container-fluid" style="margin-top:10px"> 
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
