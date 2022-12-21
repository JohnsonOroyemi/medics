<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
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

        <form action="{{url('sendemail',$data->id)}}" method="post">
            @csrf
        <div class="card-body card-block">
         <div class="form-group">
          <label for="categories" class=" form-control-label"></label>
          
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Greeting</label>
              <input type="text" class="form-control" placeholder="Enter the Doctor's Name" id="name" name="greeting" required data-validation-required-message="Please enter the post heading.">
              <p class="help-block text-danger"></p>
            </div>

            <br>

          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Body</label>
              <input type="tel" class="form-control" placeholder="Enter the Doctor's Phone No" id="phone" name="body" required data-validation-required-message="Please subheading">
              <p class="help-block text-danger"></p>
            </div>
          </div>

            <br>

          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Action Text</label>
              <input type="text" class="form-control" placeholder="Write the room no" id="room" name="actiontext" required data-validation-required-message="Please enter the author's name.">
              <p class="help-block text-danger"></p>
            </div>
          </div>

            <br>

          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Action Url</label>
              <input type="text" class="form-control" placeholder="Write the room no" id="room" name="actionurl" required data-validation-required-message="Please enter the author's name.">
              <p class="help-block text-danger"></p>
            </div>
          </div>

          <br>

          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>End Part</label>
              <input type="text" class="form-control" placeholder="Write the room no" id="room" name="endpart" required data-validation-required-message="Please enter the author's name.">
              <p class="help-block text-danger"></p>
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
