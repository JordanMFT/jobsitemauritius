@extends('layouts.main')
@section('content')

<div class="site-blocks-cover overlay" style="background-image: url('external/images/contact.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12" data-aos="fade">
          <h1>Lorem Ipsum Help You Dollar sign <br> Jordan Lorem Ipsum</h1>
        </div>
      </div>
    </div>
</div>

<div class="site-section-jordan-sectionss">

  <div class="container">
    <div class="row">

      <div class="col-md-12 mb-5">
      
        <form method="POST" action="{{route('mail.contact')}}" class="p-5 bg-white" enctype="multipart/form-data">
          @csrf
          
          {{-- Alert for contact form email --}}
          @if(Session::has('message'))
            <div class="alert alert-success">{{Session::get('message')}}</div>
          @endif

          @if(Session::has('err_message'))
              <div class="alert alert-danger">{{Session::get('err_message')}}</div>
          @endif
            <div class="form-group row">
            {{-- end here --}}
  
                <div class="col-md-12">Company Name</div>
  
                <div class="col-md-12">
                    <input id="companyname" type="text" placeholder="Company Name" class="form-control @error('companyname') is-invalid @enderror" 
                    name="companyname" value="{{ old('companyname') }}" required autocomplete="companyname" autofocus>
  
                    @error('companyname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
  
  
            <div class="form-group row">
        
                <div class="col-md-12">Email</div>
  
                <div class="col-md-12">
                    <input id="email" type="email" placeholder="email" class="form-control @error('email') is-invalid 
                    @enderror" name="email" 
                    value="{{ old('email') }}" required autocomplete="email">
  
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">How Can We Be of Help</div>
                <div class="col-md-12">
                      <textarea type="text" name="message" id="message" cols="30" rows="10" class="form-control @error('message') is-invalid 
                      @enderror">
                          {{ old('message') }}
                      </textarea>

                      @error('message')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">Screenshot</div>
                <div class="col-md-12">
                    <input type="file" class="form-control" name="screenshot"> 

                      @error('screenshot')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
  
            <div class="row form-group">
            <div class="col-md-12">
              <input type="submit" value="Send Message" id="bodybtn" class="btn btn-primary  py-2 px-5">
            </div>
            </div>
  
  
        </form>
        
      </div>

    </div>
    
  </div>
    
</div>

@endsection