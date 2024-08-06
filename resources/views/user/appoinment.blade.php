<div class="page-section pb-0">
  <div class="container">

    <h1 class="text-center mb-5 wow fadeInUp">Make An Appointment</h1>


    <div class="row align-items-center">

      <div class="col-lg-6 wow fadeInLeft" data-wow-delay="400ms">
          <div class="img-place custom-img-1">
            <img src="../myImages/appointment.png" alt="">
          </div>
        </div>


      <div class="col-lg-6 py-3 wow fadeInUp">
          <div class="page-section">
              <div class="container">
          
                <form class="main-form" action="{{url('appointment')}}" method="POST">
          
                  @csrf
          
                  <div class="row mt-5">
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                      <input type="text" name="name" class="form-control" placeholder="Full name">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                      <input type="text" name="email" class="form-control" placeholder="Email address..">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                      <input type="date" name="date" class="form-control">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                      <select name="doctor" id="departement" class="custom-select">
          
                        <option>--select--</option>
          
                        @foreach($doctor as $doctors)
                        <option value="{{$doctors->name}}">{{$doctors->name}} --Special for-- {{$doctors->speciality}}</option>
                        {{-- <option value="cardiology">Cardiology</option>
                        <option value="dental">Dental</option>
                        <option value="neurology">Neurology</option>
                        <option value="orthopaedics">Orthopaedics</option> --}}
          
                        @endforeach
          
                      </select>
                    </div>
                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                      <input type="text" name="phone" class="form-control" placeholder="Number..">
                    </div>
                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                      <textarea type="text" name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
                    </div>
                  </div>
          
                  <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
                </form>
          
              </div>
            </div> <!-- .page-section -->
      </div>


    </div>
  </div>
</div> <!-- .bg-light -->
</div> <!-- .bg-light -->
