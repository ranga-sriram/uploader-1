
<?php
 $path = storage_path();
 ?>
<head>
  <title>View Uploaded Files</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Uploaded Files</h2>
    
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>File Name</th>
        <th>Project Name</th>
        <th>Project Lead Name</th>
        <th>File Description</th>
        <th>Share Type</th>
        <th>Download File</th>
      </tr>
    </thead>
    <tbody>
      @foreach($request_data as $row)
          <tr> 
              <td>{{$row->id}}</td>
              <td>{{$row->file_name}}</td>
              <td>{{$row->project_name}}</td>
              <td>{{$row->project_lead_name}}</td>
              <td>{{$row->file_description}}</td>
              <td>{{$row->share_type}}</td>
              <td><a href="{{ url('/download/'.$row->stored_file_name) }}">Download</a></td>
          </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>

