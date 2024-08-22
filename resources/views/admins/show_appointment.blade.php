

<!DOCTYPE html>
<html lang="en">
  <head>

    @include('admins.css')
    
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admins.sidebar')
      <!-- partial -->
      @include('admins.navbar')
        <!-- partial -->

        <div class="main-panel">
            <div class="content-wrapper">
              <div class="row">
                
                <div class="row ">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Appointment Status</h4>
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              
                              <th style="color:rgb(158, 13, 85)"> Client Name </th>
                              <th style="color:rgb(158, 13, 85)"> E-mail </th>
                              <th style="color:rgb(158, 13, 85)"> Date </th>
                              <th style="color:rgb(158, 13, 85)"> Doctor Name </th>
                              <th style="color:rgb(158, 13, 85)"> Telephone No </th>
                              <th style="color:rgb(158, 13, 85)"> Message </th>
                              <th style="color:rgb(158, 13, 85)"> Status </th>
                              <th style="color:rgb(158, 13, 85)"> Response </th>
                              <th style="color:rgb(158, 13, 85)"> Send Mail </th>
                            </tr>
                          </thead>

                          @foreach($appoint as $app)
                          <tbody>
                            <tr>
                              
                              <td>
                                <span class="ps-2">{{$app->name}}</span>
                              </td>
                              <td>{{$app->email}} </td>
                              <td> {{$app->date}} </td>
                              <td> {{$app->doctor}} </td>
                              <td> {{$app->phone}} </td>
                              <td> {{$app->message}} </td>
                              <td> {{$app->status}} </td>
                              <td>
                                <div>
                                    <a style="padding: 5px" class="btn btn-outline-success" href="{{url('approved', $app->id)}}">Approve</a>
                                    <a class="btn btn-outline-danger" href="{{url('canceled',$app->id)}}">Cancel</a>
                                </div>
                              </td>

                              <td>

                                <form action="{{url('email_view',$app->id)}}" method="POST">
                                    @csrf
                                    <button style="margin: 0 10px 0 0" class="btn btn-outline-primary">Mail</button>
                                  </form>

                              </td>
                            </tr>
                            
                          </tbody>

                          @endforeach

                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admins.script')
  </body>
</html>