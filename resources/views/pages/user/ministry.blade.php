
@extends('layouts/contentLayoutMaster')

@section('title', 'Update Profile')

@section('vendor-style')
        <!-- Page css files -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
        <!-- <link rel="stylesheet" href="{{ asset('vendors/css/ui/prism.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/css/file-uploaders/dropzone.min.css') }}"> -->
        <link rel="stylesheet" href="{{ asset('vendors/css/pickers/pickadate/pickadate.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/css/forms/select/select2.min.css') }}">
        

@endsection

@section('page-style')
        <!-- Page css files -->
        <link rel="stylesheet" href="{{ asset('css/plugins/forms/wizard.css') }}">
        <!-- <link rel="stylesheet" href="{{ asset('vendors/css/file-uploaders/dropzone.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/plugins/file-uploaders/dropzone.css') }}">

        <link rel="stylesheet" href="{{ asset('css/plugins/file-uploaders/dropzone.css') }}"> -->
        


@section('content')
<!-- Basic Horizontal form layout section start -->

<!-- // Basic Floating Label Form section end -->

<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row match-height">
      <div class="col-12">
          <div class="card">
              <div class="card-header">
                  <h1 class="card-title text-center">Step 2/3</h1>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <form method="post" id="radioform" action="{{route('update_appointData')}}" class="form" >
                            @csrf
                          <div class="form-body">
                          <h3>Choose MDA</h3>

  
                            </div>    

                             
                          <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="">Select Name of Ministry</label>
                                            <select name="ministry" class="select2 form-control" id="">

                                            <option value="{{$personal_data->ministry??''}}">{{$personal_data->ministry??''}}</option>

                                                @foreach($fed_min as $min)

                                                <option value="{{$min->title}}">{{$min->title}}</option>

                                                @endforeach

                                            </select>
                                        </div>

                                        <div class="form-group">
                                        <label for="">Select Parastatals</label>
                                            <select name="parastatals" class="select2 form-control" id="">

                                                <option value=""></option>
                                                
                                            <option value="{{$personal_data->parastal??''}}">{{$personal_data->parastal??''}}</option>
                                            <option value="" >ABUJA CHAMBER OF COMMERCE, INDUSTRY, MINES & AGRICULTURE</option>
<option value="" >ABUJA CHIEF MAGISTRATE COURT</option>
<option value="" >ABUJA COUNCIL FOR ARTS AND CULTUR</option>
<option value="" >ABUJA ENVIRONMENTAL PROTECTION BOARD</option>
<option value="" >ABUJA HIGH COURT OF JUSTICE</option>
<option value="" >ABUJA INVESTMENT AND PROPERTY DEV. CO. LTD.</option>
<option value="" >ABUJA MUNICIPAL AREA COUNCIL</option>
<option value="" >ABUJA URBAN MASS TRANSIT COMPANY</option>
<option value="" >ADMINISTRATIVE STAFF COLLEGE OF NIGERIA (ASCON)</option>
<option value="" >ALUMINUM SMELTING CO. OF NIGERIA LTD. (ALSCON)</option>
<option value="" >AREA COUNCIL SERVICE BOAR</option>
<option value="" >AREA COUNCIL STAFF PENSION BOARD</option>
<option value="" >ARMY RESERVE RECRUITMENT AND RESETTLEMENT CENTRE</option>
<option value="" >CALABAR EXPORT PROCESSING ZONES AUTHORITY (CEPZ)</option>
<option value="" >CENTRE FOR DISTANT LEARNING & CONTINUING EDUCATION</option>
<option value="" >CENTRAL BANK OF NIGERIA (CBN)</option>
<option value="" >CHRISTIAN WELFARE PILGRIMS BOARD</option>
<option value="" >CODE OF CONDUCT BUREAU</option>
<option value="" >COMMITTEE ON DEVOLUTION OF POWER</option>
<option value="" >BETWEEN FEDERAL STATES AND LOCAL GOVERNMENTS</option>
<option value="" >COMMITTEE ON VISION 2010 PROGRAMME</option>
<option value="" >CORPORATE AFFAIRS COMMISSION</option>
<option value="" >COUNCIL OF LEGAL EDUCATION</option>
<option value="" >DAILY TIMES OF NIGERIA PL</option>
<option value="" >DEPARTMENT OF IMMIGRATION SERVICES</option>
<option value="" >NATIONAL CIVIL REGISTRATION</option>
<option value="" >DEPARTMENT OF SOIL EROSION & FLOOD CONTROL</option>
<option value="" >DEPARTMENT OF STATES & LOCAL GOVERNMENTS AFFAIRS</option>
                                                @foreach($parastatals as $p)

                                                <option value="{{$p->name}}">{{$p->name}}</option>



                                                @endforeach
                                                </select>
                                        </div>

                                        <div class="form-group">
                                        <label for="">Select Section (If Applicable)</label>
                                            <input value="{{$personal_data->section??''}}" name="section" class="form-control" >
                                            
                                        </div>

                                        

                                        <div class="form-group">
                                        <label for="">Select Level </label>
                                            <select name="level" class="form-control" id="">
                                            <option value="{{$personal_data->level??''}}">{{$personal_data->level??''}}</option>
                                                <option value="4">LEVEL 4</option>
                                                <option value="5">LEVEL 5</option>
                                                <option value="6">LEVEL 6</option>
                                                <option value="7">LEVEL 7</option>
                                                <option value="8">LEVEL 8</option>
                                                <option value="9">LEVEL 9</option>
                                                <option value="10">LEVEL 10</option>
                                                <option value="12">LEVEL 12</option>
                                                <option value="13">LEVEL 13</option>
                                                <option value="14">LEVEL 14</option>
                                                <option value="15">LEVEL 15</option>
                                                <option value="16">LEVEL 16</option>
                                                <option value="17">LEVEL 17</option>
                                                <option value="permanent_secretary">Permanent Secretary</option>

                                            </select>
                                        </div>

                                        <div class="form-group">
                                        <label for="">Select Step </label>
                                            <select name="step" class="form-control" id="">
                                            <option value="{{$personal_data->step??''}}">{{$personal_data->step??''}}</option>
                                                <option name="1">STEP 1</option>
                                                <option name="2">STEP 2</option>
                                                <option name="3">STEP 3</option>
                                                <option name="4">STEP 4</option>
                                                <option name="5">STEP 5</option>
                                                <option name="6">STEP 6</option>

                                            </select>
                                        </div>

                                        


                                    </div>
                                    <div class="col-md-6">


                                        <div class="form-group">
                                            <label for="">Date of first appointment</label>
                                            <input value="{{$personal_data->dateOfFirstAppointment??''}}" name="dateOfFirstAppointment" type='date' class="form-control" readonly />
                                        </div>

                                        <div class="form-group">
                                            <label for="">Date of current appointment</label>
                                            <input value="{{$personal_data->dateOfcurrentAppointment??''}}" name="dateOfCurrentAppointment" type='date' class="form-control" required />
                                        </div>

                                        <div class="form-group">
                                        <label for="">Select Pension commission </label>
                                            <select name="pen_commission" class="select2 form-control" id="">
                                            <option value="{{$personal_data->pension_commission??''}}">{{$personal_data->pension_commission??''}}</option>
                                            <option value="AIICO Pension Managers Limited">AIICO Pension Managers Limited</option>
                                            <option value="APT Pension Fund Managers Limited">APT Pension Fund Managers Limited</option>
                                            <option value="ARM Pension Managers Limited">ARM Pension Managers Limited</option>
                                            <option value="AXA Mansard Pension Limited">AXA Mansard Pension Limited</option>
                                            <option value="CrusaderSterling Pensions Limited">CrusaderSterling Pensions Limited</option>
                                            <option value="FCMB Pensions Limited">FCMB Pensions Limited</option>
                                            <option value="Fidelity Pension Managers">Fidelity Pension Managers</option>
                                            <option value="First Guarantee Pension Limited">First Guarantee Pension Limited</option>
                                            <option value="IEI-Anchor Pension Managers Limited">IEI-Anchor Pension Managers Limited</option>
                                            <option value="Investment One Pension Managers Limited">Investment One Pension Managers Limited</option>
                                            <option value="Leadway Pensure PFA Limited">Leadway Pensure PFA Limited</option>
                                            <option value="Nigerian University Pension Management Company (NUPEMCO)">Nigerian University Pension Management Company (NUPEMCO)</option>
                                            <option value="NLPC Pension Fund Administrators Limited">NLPC Pension Fund Administrators Limited</option>
                                            <option value="NPF Pensions Limited">NPF Pensions Limited</option>
                                            <option value="OAK Pensions Limited">OAK Pensions Limited</option>
                                            <option value="Pensions Alliance Limited">Pensions Alliance Limited</option>
                                            <option value="Premium Pension Limited">Premium Pension Limited</option>
                                            <option value="Radix Pension Managers Limited">Radix Pension Managers Limited</option>
                                            <option value="Sigma Pensions Limited">Sigma Pensions Limited</option>
                                            <option value="Stanbic IBTC Pension Managers Limited">Stanbic IBTC Pension Managers Limited</option>
                                            <option value="Trustfund Pensions Limited">Trustfund Pensions Limited</option>
                                            <option value="Veritas Glanvills Pensions Limited">Veritas Glanvills Pensions Limited</option>

                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="lastName3">
                                               Pension identification number
                                            </label>
                                            <input value="{{$personal_data->pension_no??''}}" name="pension_no" type="text" class="form-control required" id="pen_id" >
                                        </div>


                                        
                                    </div>
                                </div>
                                
                                <div class="col-12 d-flex justify-content-between">
                                <a href="{{route('user.profile2')}}" class="btn btn-primary shadow mr-1 mb-1">Previous</a> 
                                      <button type="submit" class="btn btn-primary shadow mr-1 mb-1">Submit</button>
                                  </div>
                          
                      </form>

                      <!--  javacript code for radio button -->
                     
                       <!--  javacript code for radio button -->
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- // Basic Floating Label Form section end -->
@endsection

@section('vendor-script')
        <!-- vendor files -->
        <script src="{{ asset('vendors/js/extensions/jquery.steps.min.js') }}"></script>
        <script src="{{ asset('vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
        <!-- <script src="{{ asset('vendors/js/extensions/dropzone.min.js') }}"></script>
        <script src="{{ asset('vendors/js/ui/prism.min.js') }}"></script> -->
        <script src="{{ asset('vendors/js/pickers/pickadate/picker.js') }}"></script>
        <script src="{{ asset('vendors/js/pickers/pickadate/picker.date.js') }}"></script>
        <script src="{{ asset('vendors/js/pickers/pickadate/picker.time.js') }}"></script>
        <script src="{{ asset('vendors/js/pickers/pickadate/legacy.js') }}"></script>
        <script src="{{ asset('vendors/js/forms/select/select2.full.min.js') }}"></script>
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset('js/scripts/forms/wizard-steps.js') }}"></script>
        <!-- <script src="{{ asset('js/scripts/extensions/dropzone.js') }}"></script> -->
        <script src="{{ asset('js/scripts/pickers/dateTime/pick-a-datetime.js') }}"></script>
        <script src="{{ asset('js/scripts/forms/select/form-select2.js') }}"></script>

        <script src="{{ asset('lga/js/lga.min.js') }}"></script>
@endsection

