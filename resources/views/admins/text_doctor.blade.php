{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Text</title>
</head>
<body>

    <div class="row">
        <div class="imgWrapper">
            <img src="myImages/hospital img.jpg" alt="">
        </div>

        <div class="contentWrapper">
            <div class="content">
                <span class="textWrapper">
                    <span></span>New Opportunities
                </span>
                <h2>All Are Here....</h2>
                <p>Whether you are new to PHP web frameworks or have years of experience, Laravel is a framework that can grow with you. We'll help you take your first steps as a web developer or give you a boost as you take your expertise to the next level. We can't wait to see what you build.
                </p>
                <a href="">Click Here</a>
            </div>

        </div>
    

    </div>

    
</body>
</html> --}}



<!DOCTYPE html>
<html lang="en">
  <head>

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

        <div class="row">
            <div class="imgWrapper">
                <img src="myImages/hospital img.jpg" alt="">
            </div>
    
            <div class="contentWrapper">
                <div class="content">
                    <span class="textWrapper">
                        <span></span>New Opportunities
                    </span>
                    <h2>All Are Here....</h2>
                    <p>Whether you are new to PHP web frameworks or have years of experience, Laravel is a framework that can grow with you. We'll help you take your first steps as a web developer or give you a boost as you take your expertise to the next level. We can't wait to see what you build.
                    </p>
                    <a href="">Click Here</a>
                </div>
    
            </div>
        
    
        </div>
      
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admins.script')
  </body>
</html>