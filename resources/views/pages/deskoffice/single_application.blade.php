@extends('layouts/dk-contentLayoutMaster')

@section('title', 'View User Page')

@section('page-style')
        {{-- Page Css files --}}
        <link rel="stylesheet" href="{{ asset('css/pages/app-user.css') }}">
@endsection

@section('content')
<!-- page users view start -->
<section class="page-users-view">
  <div class="row">
    <!-- account start -->
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="card-title">File Number: </div>
          <div class="row">
            <div class="col-2 users-view-image">
              <img src="{{ asset('images/portrait/small/avatar-s-12.jpg') }}" class="w-100 rounded mb-2"
                alt="avatar">
              <!-- height="150" width="150" -->
            </div>
            <div class="col-sm-4 col-12">
              <table>
                <tr>
                  <td class="font-weight-bold">Username</td>
                  <td>adoptionism744</td>
                </tr>
                <tr>
                  <td class="font-weight-bold">Name</td>
                  <td>Angelo Sashington</td>
                </tr>
                <tr>
                  <td class="font-weight-bold">Email</td>
                  <td>angelo@sashington.com</td>
                </tr>
              </table>
            </div>
            <div class="col-md-6 col-12 ">
              <table class="ml-0 ml-sm-0 ml-lg-0">
                <tr>
                  <td class="font-weight-bold">Status</td>
                  <td>active</td>
                </tr>
                <tr>
                  <td class="font-weight-bold">Role</td>
                  <td>admin</td>
                </tr>
                <tr>
                  <td class="font-weight-bold">Company</td>
                  <td>WinDon Technologies Pvt Ltd</td>
                </tr>
              </table>
            </div>
            <div class="col-12">
            <button type="button" class="btn btn-success" data-toggle="modal"
              data-target="#verifyModal">
              Verify
            </button>
            @include('pages.deskoffice.verify')
            <button type="button" class="btn btn-danger" data-toggle="modal"
              data-target="#disapproveModal">
              Disapprove
            </button>
            @include('pages.deskoffice.disapprove')
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- account end -->
    <!-- information start -->
    <div class="col-md-6 col-12 ">
      <div class="card">
        <div class="card-body">
          <div class="card-title mb-2">Information</div>
          <table>
            <tr>
              <td class="font-weight-bold">Birth Date </td>
              <td>28 January 1998
              </td>
            </tr>
            <tr>
              <td class="font-weight-bold">Mobile</td>
              <td>+65958951757</td>
            </tr>
          
          
            <tr>
              <td class="font-weight-bold">Gender</td>
              <td>female</td>
            </tr>
            <tr>
              <td class="font-weight-bold">Contact</td>
              <td>email, message, phone
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <!-- information start -->
    <!-- social links end -->
    <div class="col-md-6 col-12 ">
    <div class="card">
        <div class="card-header">
          <h4 class="card-title">Application Timeline</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <ul class="activity-timeline timeline-left list-unstyled">
              <li>
                <div class="timeline-icon bg-primary">
                  <i class="feather icon-plus font-medium-2 align-middle"></i>
                </div>
                <div class="timeline-info">
                  <p class="font-weight-bold mb-0">Applicant Submission</p>
                  <span class="font-small-3">Bonbon macaroon jelly beans gummi bears jelly lollipop apple</span>
                </div>
                <small class="text-muted">25 mins ago</small>
              </li>
              <li>
                <div class="timeline-icon bg-warning">
                  <i class="feather icon-alert-circle font-medium-2 align-middle"></i>
                </div>
                <div class="timeline-info">
                  <p class="font-weight-bold mb-0">Review</p>
                  <span class="font-small-3">Cupcake gummi bears soufflé caramels candy</span>
                </div>
                <small class="text-muted">15 days ago</small>
              </li>
             
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- social links end -->
    <!-- permissions start -->
    <section id="stacked-pills">
    <div class="row match-height">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Document Upload</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              
              <div class="row">
                <div class="col-md-3 col-sm-12">
                  <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                      <a class="nav-link active" id="stacked-pill-1" data-toggle="pill" href="#vertical-pill-1"
                        aria-expanded="true">
                        Letter of Introduction
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="stacked-pill-2" data-toggle="pill" href="#vertical-pill-2"
                        aria-expanded="false">
                        Letter of Introduction
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="stacked-pill-3" data-toggle="pill" href="#vertical-pill-3"
                        aria-expanded="false">
                        Pill 3
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled">Disabled</a>
                    </li>
                  </ul>
                </div>
                <div class="col-md-9 col-sm-12">
                  <div style="min-width:700px;" class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="vertical-pill-1" aria-labelledby="stacked-pill-1"
                      aria-expanded="true">
                     <p>
                      hello
                     </p>

                     <p>
                      hello
                     </p>
                     
                    </div>
                    <div class="tab-pane active" id="vertical-pill-2" role="tabpanel" aria-labelledby="stacked-pill-2"
                      aria-expanded="false">
                      <p>hello</p>
                      <p>
                        hello
                      </p>
                    </div>
                    <div class="tab-pane" id="vertical-pill-3" role="tabpanel" aria-labelledby="stacked-pill-3"
                      aria-expanded="false">
                      <p>hello</p>
                      <p>
                        hello
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <div class="col-12">
      
    </div>
    <!-- permissions end -->
  </div>
</section>
<!-- page users view end -->
@endsection

@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset('js/scripts/pages/app-user.js') }}"></script>
@endsection
