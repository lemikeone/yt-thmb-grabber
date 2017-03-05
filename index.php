<!DOCTYPE html>
<html>
<head>
	<title>Youtube Thumbnail grabber</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="mystyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php include("logo.php"); ?>
<div class="container containerm">
<div class="text-center">
   <?php include("ytsearch.php"); ?>

<?php

if (isset($_GET['youtube_link'])) // On a un contenu
{
	$url = $_GET['youtube_link'];

	// Youtube ID extract
	preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);

if (isset($match[1])) {
	$youtube_id = $match[1];
	
}
else {
	echo '<p class="bg-danger">Veuillez entrer une URL Youtube valide</p><br/>';
}
?>

	<?php 

if (isset($youtube_id)) {
	# code...

	 ?>

	<?php
	echo '<img class="img-thumbnail" src="http://img.youtube.com/vi/' .$match[1]. '/maxresdefault.jpg">';
	
	$number_youtube = 1;
	
	echo '<br/><br/>	<!-- Split button -->
<div class="btn-group">
  <a type="button" class="btn btn-success" download="myimage" href="http://img.youtube.com/vi/' .$match[1]. '/maxresdefault.jpg"><i class="fa fa-download" aria-hidden="true"></i> Download the thumbnail</a>
  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
  <li><a href="http://img.youtube.com/vi/' .$match[1]. '/maxresdefault.jpg" download="myimage">Default : Maximum Resolution Thumbnail (1920x1080 pixels)</a></li>
  <li role="separator" class="divider"></li>
    <li><a href="http://img.youtube.com/vi/' .$match[1]. '/mqdefault.jpg" download="myimage">Medium Quality Thumbnail (320x180 pixels)</a></li>
        <li><a href="http://img.youtube.com/vi/' .$match[1]. '/hqdefault.jpg" download="myimage">High Quality Thumbnail (480x360 pixels)</a></li>
      <li><a href="http://img.youtube.com/vi/' .$match[1]. '/sddefault.jpg" download="myimage">Standard Definition Thumbnail (640x480 pixels)</a></li>
  </ul>
</div>

	<br/><br/>';

	echo '<pre>ID is : ' .$match[1]. '</pre>';
	echo '<pre>URL of the thumbnail : http://img.youtube.com/vi/' .$match[1]. '/maxresdefault.jpg</pre><br/>';
	
	echo '<div class="row">';
	
	while ($number_youtube <= 3)
	{
		echo '<div class="col-xs-6 col-md-4">
		<a class="thumbnail" href="http://img.youtube.com/vi/' .$match[1]. '/' .$number_youtube. '.jpg">
		<img class="img-thumbnail" src="http://img.youtube.com/vi/' .$match[1]. '/' .$number_youtube. '.jpg" alt="...">
		</a>
		</div>';
		$number_youtube++;
	}

	}

}

else // Il manque des paramètres, on avertit le visiteur
{
	
}
?>
</div>
</div>
</body>
</html>