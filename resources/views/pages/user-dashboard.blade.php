@extends('layouts/contentLayoutMaster')

@section('title', 'Home')

@section('vendor-style')
<!-- vendor css files -->
<link rel="stylesheet" href="{{ asset('vendors/css/charts/apexcharts.css') }}">
@endsection
@section('page-style')
<!-- Page css files -->
<link rel="stylesheet" href="{{ asset('css/pages/dashboard-analytics.css') }}">
<link rel="stylesheet" href="{{ asset('css/pages/card-analytics.css') }}">
@endsection

@section('content')
{{-- Dashboard Analytics Start --}}
<section id="dashboard-analytics">
  <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12">
      <div style="height: 270.556px;" class="card bg-success text-white">
        <div class="card-content">
          <div class="card-body text-center">
           
            <div class="avatar avatar-xl bg-success shadow mt-0">
              <div class="avatar-content">
                <i class="feather icon-award white font-large-1"></i>
              </div>
            </div>
            <div class="text-center">
              <h1 class="mb-2 text-white">Welcome, {{Auth::user()->firstname}} {{Auth::user()->surname}}</h1>
              <h3 class="mb-2 text-white">IPPIS NUMBER: {{Auth::user()->ippis_no}}</h3>
              <!-- <h3 class="{{Auth::user()->status =='verified' ?'':'d-none'}} mb-2 text-white">FILE NUMBER: {{Auth::user()->file_no}}</h3> -->
             <!--  <p class="m-auto w-75">You have done <strong>57.6%</strong> more sales today. Check your new badge in your
                profile.</p>-->
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-md-6 col-12">
      <div style="height: 270.556px;"  class="card overflow-auto">
          <div class="card-header">
            <h4 class="card-title">Account Status</h4>
          </div>
          <div class="card-content  ">
            <div  class="card-body pb-1">
              <ul class="activity-timeline timeline-left list-unstyled">

               @foreach($user_logs as $log)

               <li>
                  <div class="timeline-icon bg-primary">
                    <i class="feather icon-check font-medium-2 align-middle"></i>
                  </div>
                  <div class="timeline-info">
                    <p class="font-weight-bold mb-0">{{$log->title}}</p>
                    <span class="font-small-3">
                      {{$log->log}}
                    </span>
                  </div>
                  <small class="text-muted">{{$log->created_at->diffForHumans()}}</small>
                </li>


               @endforeach
              
               
               

                
                
               
              </ul>
            </div>

        
          </div>
        </div>
        
      </div>
  </div>


  <div class="row">
    <div class="col-md-3 col-12">
      
      <div class="card {{Auth::user()->status =='verified' ?'bg-success':''}}" style="height: 325.556px;">
          <div class="card-header mx-auto pb-0">
            <div class="row m-0">
              <div class="col-sm-12 text-center  ">
                <h2 class="{{Auth::user()->status =='verified' ?'text-white':''}}">Step 1</h2>
              </div>
              <div class="col-sm-12 text-center">
              
              </div>
            </div>
          </div>
              
          <div class="card-content">
            <div class="card-body text-center mx-auto " style="height: 180.556px;">
            <p class="
            {{Auth::user()->status =='verified' ?'text-white':''}}
            ">Application Form N 1000</p>
              <div class="">
                <img width="120" height="120" class="img-fluid" src="{{config('app.url')}}/images/cardz.png" alt="img placeholder">
              </div>
             
             
            </div>
            <div class="card-footer">
                @if(Auth::user()->status=='verified')

                <button  class="btn gradient-light-success btn-block waves-effect waves-light">Form Purchased</button>



                @else

                <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                            
                            <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
                            <input type="hidden" name="orderID" value="345">
                            <input type="hidden" name="amount" value="100000"> {{-- required in kobo --}}
                            <input type="hidden" name="quantity" value="1">
                            <input type="hidden" name="currency" value="NGN">
                            <input type="hidden" name="callback_url" value="{{ config('app.url')}}payment/callback">
                            <input type="hidden" name="metadata" value="{{ json_encode($array = [
                            'key_name' => 'value',
                            
                            ]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
            
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
            
                          
                                <button class="btn gradient-light-success btn-sm btn-block waves-effect waves-light mb-1" type="submit" value="Pay Now!">
                                    <i class="fa fa-plus-circle fa-lg"></i> Pay with Paystack
                                </button>
                     
                  </form>
                      
                  <button class="btn btn-block btn-sm btn-primary shadow">Pay with Remita</button>


                @endif
            </div>
          </div>
        </div>
    </div>
    <div class="col-md-3 col-12">
     
     <div class="card {{$application_stage?'bg-success text-white':''}}" style="height: 325.556px;">
          <div class="card-header mx-auto pb-0">
            <div class="row m-0">
              <div class="col-sm-12 text-center">
                <h2 class="{{$application_stage?'text-white':''}}">Step 2</h2>
              </div>
            
            </div>
          </div>
          <div class="card-content">
            <div class="card-body text-center mx-auto" style="height: 180.556px;">
            <p class="">Profile Update</p>
              <div class="">
                <img width="120" height="120" class="img-fluid" src="{{config('app.url')}}/images/up.png" alt="img placeholder">
              </div>
              
            </div>
            <div class=" {{$application_stage?'d-none':''}} card-footer">
            <a href="{{route('user.profile')}}" class="btn gradient-light-primary btn-block waves-effect waves-light">Get Started</a>

            </div>
          </div>
        </div>
    </div>

    <div class="col-md-3 col-12">
     
     <div class="card" style="height: 325.556px;">
          <div class="card-header mx-auto pb-0">
            <div class="row m-0">
              <div class="col-sm-12 text-center">
                <h2>Step 3</h2>
              </div>
              <div class="col-sm-12 text-center">
               
              </div>
            </div>
          </div>
          <div class="card-content">
            <div class="card-body text-center mx-auto" style="height: 180.556px;">
            <p class="">Loan Application</p>
            <div class="">
                <img width="120" height="120" class="img-fluid" src="{{config('app.url')}}/images/updates.png" alt="img placeholder">
              </div>
              
            </div>
            <div class="card-footer mb-0">
            <a href="{{route('user.profile')}}" class="btn gradient-light-primary btn-block waves-effect waves-light">Get Started</a>

            </div>
          </div>
        </div>
    </div>
    <div class="col-md-3 col-12">
     
     <div class="card" style="height: 325.556px;">
          <div class="card-header mx-auto pb-0">
            <div class="row m-0">
              <div class="col-sm-12 text-center">
                <h2>Step 4</h2>
              </div>
              <div class="col-sm-12 text-center">
               
              </div>
            </div>
          </div>
          <div class="card-content">
              <div class="card-body text-center mx-auto" style="height: 180.556px;">
                <p class="">Verification and Approval</p>
                <div class="">
                  <img  width="120" height="120" class="img-fluid" src="{{config('app.url')}}/images/verify.png" alt="img placeholder">
                </div>
                
              </div>
              <div class="card-footer mb-0">
                <a href="{{route('user.profile')}}" class="btn gradient-light-primary btn-block waves-effect waves-light">Read More</a>

            </div>
          </div>
        </div>
    </div>
  </div>
  
</section>
<!-- Dashboard Analytics end -->
@endsection

@section('vendor-script')
<!-- vendor files -->
<script src="{{ asset('vendors/js/charts/apexcharts.min.js') }}"></script>
@endsection
@section('page-script')
<!-- Page js files -->
<script src="{{ asset('js/scripts/pages/dashboard-analytics.js') }}"></script>
@endsection