<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
@include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container">

          @if(session()->has('message'))
          <div class="alert alert success">
            <button type="button" class="close" data-dismiss="alert">
              x
            </button>
            {{session()->get('message')}}
          </div>
          @endif

        <form action="{{url('upload_doctor')}}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="card-body card-block">
         <div class="form-group">
          <label for="categories" class=" form-control-label"></label>

        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Image</label>
              <input type="file" class="form-control" id="fileToUpload" name="file" >
            </div>
          </div>
          
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Doctor's Name</label>
              <input type="text" class="form-control" placeholder="Enter the Doctor's Name" id="name" name="name" required data-validation-required-message="Please enter the post heading.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Doctor's Phone No</label>
              <input type="tel" class="form-control" placeholder="Enter the Doctor's Phone No" id="phone" name="phone" required data-validation-required-message="Please subheading">
              <p class="help-block text-danger"></p>
            </div>
          </div>

          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Room No</label>
              <input type="text" class="form-control" placeholder="Write the room no" id="room" name="room" required data-validation-required-message="Please enter the author's name.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Specialty</label>
              <select name="specialty"style="color:white; width:200px" class="form-control">
                <option>--Select--</option>
                <option value="Skin">Skin</option>
                <option value="Heart">Heart</option>
                <option value="Eye">Eye</option>
                <option value="Nose">Nose</option>
              </select>
            </div>
          </div>

          <br><br>
          <div></div>
          <input type="submit" class="btn btn-primary">
          </div>
        </div>
</form>
</div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
@include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
