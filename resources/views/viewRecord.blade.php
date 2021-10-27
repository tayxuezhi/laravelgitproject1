<!DOCTYPE html>
<html lang="en">
<head>

<style>
      table, th, td {
        border: 1px solid #666;
      }
 </style>

  <title>View Records</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2 class="text-center">View Records</h2>
           
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>USERNAME</th>
        <th>EMAIL</th>
        <th>PASSWORD</th>
      </tr>
    </thead>
    <tbody>
      @foreach($viewRecord as $key => $data)
    <tr>    
      <th>{{$data->username}}</th>
      <th>{{$data->email}}</th>
      <th>{{$data->password}}</th>              
    </tr>
       @endforeach
    </tbody>
  </table>
</div>
</body>
</html>