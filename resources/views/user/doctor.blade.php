<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

      <div style="gap: 15px" class="row align-items-center">
      <div>
        <img style="width: 30%" src="myImages/male doc.png" alt="">
      </div>
      

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        
        @foreach($doctor as $doctors)

        <div class="card-group">
          <div class="card">
            <img height="250px" src="imagename/{{$doctors->image}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$doctors->name}}</h5>
              <p class="card-text">{{$doctors->speciality}}</p>
              
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
      
    </div>
  </div>
