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
<h1>My Appointment</h1><br>
    <table cellpadding="0" cellspacing="0" border="0">
        <tr style="background-color:black;" align="center">
        <th style="padding:10px; font-size:20px; color:white;">Customer's Name</th>
        <th style="padding:10px; font-size:20px; color:white;">Email</th>
        <th style="padding:10px; font-size:20px; color:white;">Phone</th>
        <th style="padding:10px; font-size:20px; color:white;">Doctor's Name</th>
          <th style="padding:10px; font-size:20px; color:white;">Date</th>
          <th style="padding:10px; font-size:20px; color:white;">Message</th>
          <th style="padding:10px; font-size:20px; color:white;">Status</th>
          <th style="padding:10px; font-size:20px; color:white;">Approved</th>
          <th style="padding:10px; font-size:20px; color:white;">Canceled</th>
          <th style="padding:10px; font-size:20px; color:white;">Send Mail</th>
        </tr>

        @foreach ($data as $appoint)
        <tr style="background-color:skyblue;" align="center">
            <td style="padding:10px; font-size:20px; color:white;">{{$appoint->name}}</td>
            <td style="padding:10px; font-size:20px; color:white;">{{$appoint->email}}</td>
            <td style="padding:10px; font-size:20px; color:white;">{{$appoint->phone}}</td>
            <td style="padding:10px; font-size:20px; color:white;">{{$appoint->doctor}}</td>
            <td style="padding:10px; font-size:20px; color:white;">{{$appoint->date}}</td>
            <td style="padding:10px; font-size:20px; color:white;">{{$appoint->message}}</td> 
            <td style="padding:10px; font-size:20px; color:white;">{{$appoint->status}}</td> 
            <td> <a class="btn btn-success" onclick="return confirm('are you sure to approve this')" href="{{url('approved',$appoint->id)}}">Approved</a></td>
            <td> <a class="btn btn-danger" onclick="return confirm('are you sure to cancel this')" href="{{url('canceled',$appoint->id)}}">Canceled</a></td>
            <td> <a class="btn btn-primary"  href="{{url('emailview',$appoint->id)}}">Send Mail</a></td>
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
