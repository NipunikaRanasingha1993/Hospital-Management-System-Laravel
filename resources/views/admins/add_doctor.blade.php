

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
              
                 
                        
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Doctors</h4>
                    <div class="row">
                      <div class="col-md-7">

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
                      <div class="col-md-5">
                        <img src="../myImages/doctor wall.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
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