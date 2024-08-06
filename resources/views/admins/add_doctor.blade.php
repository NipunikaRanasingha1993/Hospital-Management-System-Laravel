

<!DOCTYPE html>
<html lang="en">
  <head>

    <style type="text/css">
    label{
        display: inline-block;
        width:200px;
       
    }

    </style>


    @include('admins.css')
    <link rel="stylesheet" href="css/style.css">
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

        <div style="padding-top:100px">

          @if(session()->has('message'))
              <div class="alert alert-success"> 
                {{session()->get('message')}}
                <button type="button" class="close" data-bs-dismiss="alert">x</button>
              </div>
              @endif

          {{-- class="container-fluid page-body-wrapper" --}}

          <h1 align="center">Add Doctors</h1>

          
          <div class="container-fluid page-body-wrapper" style="padding-top: 70px">

            <div>

          <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">

                      @csrf
  
  
                      <div style="padding: 15px">
                          <label>Doctor Name</label>
                          <input type="text" name="name" style="color: black" 
                          placeholder="write the name" required="">
                      </div>
  
                      <div style="padding: 15px">
                          <label>Phone Number</label>
                          <input type="number" name="phone" style="color: black" 
                          placeholder="write the number" required="">
                      </div>
  
                      <div style="padding: 15px">
                          <label>Speciality</label>
                          <select name="speciality" style="color: black ;width:200px" required="">
                              <option>--Select--</option>
                              <option value="cardiology">Cardiology</option>
                              <option value="general health">General Health</option>
                              <option value="dental">Dental</option>
                              <option value="skin">Skin</option>
                              <option value="eye">Eye</option>
                          </select>
                          
                      </div>
  
                      <div style="padding: 15px">
                          <label>Room No</label>
                          <input type="text" name="room" style="color: black" 
                          placeholder="write the room number" required="">
                      </div>
  
                      <div style="padding: 15px">
                          <label>Doctor Image</label>
                          <input type="file" name="file" required="">
                      </div>
  
                      <div style="padding: 15px">
                          
                          <input type="submit" class="btn btn-success">
                      </div>

                    </form>

                  </div>

                  <div >
                    
                      <img src="../myImages/Admin Img 1.png" alt="">
                   
                  </div>

              </div>

                  
          </div>


    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admins.script')
  </body>
</html>