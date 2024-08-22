

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
                  <h4 class="card-title">All Doctors</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
          
                            <th style="color:rgb(158, 13, 85)"> Doctor Image </th>
                            <th style="color:rgb(158, 13, 85)"> Doctor Name </th>
                            <th style="color:rgb(158, 13, 85)"> Phone No </th>
                            <th style="color:rgb(158, 13, 85)"> Speciality </th>
                            <th style="color:rgb(158, 13, 85)"> Room No </th>
                            <th style="color:rgb(158, 13, 85)"> Delete </th>
                            <th style="color:rgb(158, 13, 85)"> Update </th>
                            
                          </tr>
                        </thead>

                        @foreach($docData as $doctor)

                        <tbody>
                          <tr>
                            
                            <td>
                              <img height="100" width="100" src="imagename/{{$doctor->image}}" alt="" />
                              
                            </td>
                            <td> {{$doctor->name}} </td>
                            <td> {{$doctor->phone}} </td>
                            <td> {{$doctor->speciality}} </td>
                            <td> {{$doctor->room}} </td>
                            <td>

                              <a class="btn btn-outline-danger" onclick="return confirm('Are you sure delete the doctor?')" 
                            href="{{url('delete_doctor' , $doctor->id)}}">Delete</a>

                            </td>
                            <td>
                              
                              <a class="btn btn-outline-primary" href="{{url('update_doctor' , $doctor->id)}}">Update</a>

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