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
      <div align="center" style="padding-top:70px;">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr style="background-color:black;" align="center">
        <th style="padding:10px; font-size:20px; color:white;">Doctor's Name</th>
        <th style="padding:10px; font-size:20px; color:white;">Phone</th>
        <th style="padding:10px; font-size:20px; color:white;">Specialty</th>
        <th style="padding:10px; font-size:20px; color:white;">Room No</th>
          <th style="padding:10px; font-size:20px; color:white;">Image</th>
          <th style="padding:10px; font-size:20px; color:white;">Delete</th>
          <th style="padding:10px; font-size:20px; color:white;">Update</th>
        </tr>

        @foreach ($data as $doctor)
        <tr style="background-color:skyblue;" align="center">
            <td style="padding:10px; font-size:20px; color:white;">{{$doctor->name}}</td>
            <td style="padding:10px; font-size:20px; color:white;">{{$doctor->phone}}</td>
            <td style="padding:10px; font-size:20px; color:white;">{{$doctor->specialty}}</td>
            <td style="padding:10px; font-size:20px; color:white;">{{$doctor->room}}</td>
            <td><img height="100" width="100" src="doctorimage/{{$doctor->image}}" alt=""></td> 
            <td> <a class="btn btn-danger" onclick="return confirm('are you sure to delete this')" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>
            <td> <a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update</a></td>
        </tr>
          @endforeach
    
    </table>
</div>
      </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
@include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
