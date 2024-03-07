<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> :: Vimeo API Upload :: </title>
<?php echo '<link rel="stylesheet" href="css/bootstrap.css">'; ?>
<script type="text/javascript">

</script>
<style>
.page-header {
padding-bottom: 18px;
margin: 25px 0 12px;
}
.container {
width: 50%;
margin:0px auto;
}
.lead {
font-size: 18px;
margin-bottom: 12px;
}
</style>
</head>

<body>
<div class="container">

<div class="page-header">
</div>

<div class="row">
<div class="col-md-8">

<form method="POST" action="process_upload.php" enctype="multipart/form-data">
<div class="form-group">
<input type="text" name="videotitle" id="videoName" class="form-control" placeholder="Video name" value=""></input>
</div>
<div class="form-group">
<input type="text" name="videodesc" id="videoDescription" class="form-control" placeholder="Video description" value=""></input>
</div>
<div class="form-group">
<label class="btn btn-block btn-info">
<input id="browse" type="file" name="file_data">
</label>
</div>
<div class="checkbox">
<label>
<input type="checkbox" id="make_private" value="private" name="make_private"> Make Private </input>
</label>
</div>
<div class="form-group">
<input type="submit" name="submit" value="Upload Video" class="btn btn-block btn-info">
</div>
</form>

</div>
</div>
</div>

</body>
</html>