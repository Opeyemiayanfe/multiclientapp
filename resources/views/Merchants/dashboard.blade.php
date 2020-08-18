@extends('Merchants.app')

@section('content')
@foreach($merch as $merchs)
 @endforeach
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
                    <a class="nav-link" href="/product" style="color:green;font-size:18px;">View Page</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/product/create" style="color:green;font-size:18px;">Add product page</a>
                    </li>
                  </ul>
            </div>
        </div>
        
        <div class="col-sm-8 offset-1">
          
          @if( Auth::guard('signup')->user()->id == $merchs->merchant_id)

                    <div class="card">
                        <div class="card-body" style="text-align:center; color:red">
                          <h3>Use the dashboard link to:</h3>
                          <h4>Add product to your page</h4>
                          <h4>View Page</h4>
                        </div>
                    </div>
                    
                    @else
          <div class="card">
            <div class="card-header" style="text-align:center">Create page</div>
            <div class="card-body">
              <form method="POST" action="/merchant">
                @csrf

                <div class="form-group row">
                    <label for="pagename" class="col-md-4 col-form-label text-md-right">{{ __('Page Name') }}</label>

                    <div class="col-md-6">
                        <input id="pagename" type="text" class="form-control 
                        @error('pagename') is-invalid @enderror" name="pagename" 
                        value="{{ old('pagename') }}" required autocomplete="pagename" autofocus>

                        @error('pagename')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right">
                      {{ __('Page Description') }}</label>

                    <div class="col-md-6">
                        <input id="description" type="text" 
                        class="form-control @error('description') is-invalid @enderror"
                         name="description" value="{{ old('description') }}" 
                         required autocomplete="description">

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create Page') }}
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
          </div>
          @endif
         
        </div>
     
    </div>
</div>
@include('footer.footer')
@endsection
