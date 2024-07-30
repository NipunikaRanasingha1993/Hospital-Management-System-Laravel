

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

        <div class="container-fluid page-body-wrapper">

            <div align="center" style="padding-top:100px">

                <table>

                    <tr style="background-color: black">
                        <th style="padding: 20px">Customer Name</th>
                        <th style="padding: 20px">Email</th>
                        <th style="padding: 20px">Date</th>
                        <th style="padding: 20px">Doctor Name</th>
                        <th style="padding: 20px">Phone</th>
                        <th style="padding: 20px">Message</th>
                        <th style="padding: 20px">Status</th>
                        <th style="padding: 20px">Approved</th>
                        <th style="padding: 20px">Canceled</th>
                    </tr>

                    @foreach($appData as $appoints)

                    <tr align="center" style="background-color: skyblue">
                        <td>{{$appoints->name}}</td>
                        <td>{{$appoints->email}}</td>
                        <td>{{$appoints->date}}</td>
                        <td>{{$appoints->doctor}}</td>
                        <td>{{$appoints->phone}}</td>
                        <td>{{$appoints->message}}</td>
                        <td>{{$appoints->status}}</td>
                        <td><a class="btn btn-success" href="{{url('approved', $appoints->id)}}">Approve</a></td>
                        <td><a class="btn btn-danger" href="{{url('canceled',$appoints->id)}}">Cancel</a></td>
                    </tr>

                    @endforeach


                </table>


            </div>
            

        </div>
      


    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admins.script')
  </body>
</html>