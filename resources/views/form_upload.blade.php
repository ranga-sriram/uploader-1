<head><title>File Uploader</title></head>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<h2><center><u>Upload CSV Files to a MySQL Database</u></center></h2>
<hr>
<br>
<div class="container">
<div class="col-sm-8">
<form class="form-horizontal" action ='/response' method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="fname">File Name: </label>
    <input type="text" class="form-control" id="fname" name="fname" required>
  </div>
  <div class="form-group">
    <label for="pname">Project Name: </label>
    <input type="text" class="form-control" id="pname" name ="pname" required>
  </div>
  <div class="form-group">
    <label for="plname">Project Lead Name: </label>
    <input type="text" class="form-control" id="plname" name="plname" required>
  </div>
  <div class="form-group">
    <label for="fd">File Description: </label>
    <textarea class="form-control" id="fd" name="fd" rows="5" cols="40" required></textarea>
  </div>

  <div class="form-group">
    <label for="sharetype">Share Type (Public/Private): </label><br>
    <input type="radio" name="sharetype" value="Public" checked>Public<br>
    <input type="radio" name="sharetype" value="Private">Private<br>
  </div>

  <div class="form-group">
    <label for="file">Select a file to be uploaded: </label>
    <input type="file" id="file" name="file" required>
  </div>

  <button type="submit" class="btn btn-primary">Upload</button>
</form>
<div>
<form class="form-horizontal" action ='/view_files' method="post" enctype="multipart/form-data">
{{ csrf_field() }}
  <button type="submit" class="btn btn-primary">View Uploaded Files</button>
</form></div>
</div>
