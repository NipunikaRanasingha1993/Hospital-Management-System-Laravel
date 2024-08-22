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

    
