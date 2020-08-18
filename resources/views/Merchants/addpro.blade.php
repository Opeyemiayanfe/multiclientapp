@extends('Merchants.app')

@section('content')
<div class="container-fluid"> 
    <div class="row">
        <div class="col-sm-2">
            <div class="sidebar content-box" style="background-color:cornsilk; height:500px">
                <ul class="navbar-nav">
                    <li class="nav-item">
                      
                      <a class="nav-link" href="/signup" style="color:green">{{Auth::guard('signup')->user()->name}} <strong>Dashboard</strong></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/product">View Page</a>
                    </li>
                  </ul>
            </div>
        </div>
        
        <div class="col-sm-8 offset-1">
          <div class="card">
            <div class="card-header" style="text-align:center">Add Product/services</div>
            <div class="card-body">
                <form method="POST" action="/product" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                        <label for="name" class="">
                            {{ __('Product Name') }}</label>

                        <div class="">
                            <input id="name" type="text" class="form-control @error('name') 
                            is-invalid @enderror" name="name" value="{{ old('name') }}" 
                            required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="">
                            {{ __('Description') }}</label>

                        <div class="">
                            <input id="description" type="text" class="form-control @error('description') 
                            is-invalid @enderror" name="description" value="{{ old('description') }}" 
                            required autocomplete="description" autofocus>

                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label for="price" class="">
                            {{ __('Price') }}</label>

                        <div class="">
                            <input id="price" type="text" class="form-control @error('price') 
                            is-invalid @enderror" name="price" value="{{ old('price') }}" 
                            required autocomplete="price" autofocus>

                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image" class="">
                            {{ __('image') }}</label>

                        <div class="">
                            <input id="image" type="file" class="form-control @error('image') 
                            is-invalid @enderror" name="image" value="{{ old('image') }}" 
                            required autocomplete="image" autofocus>

                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="" style="margin-left: 15px;">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Create') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
     
    </div>
</div>
@include('footer.footer')
@endsection
