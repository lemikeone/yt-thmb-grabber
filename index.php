<!DOCTYPE html>
<html>
<head>
	<title>Youtube Thumbnail grabber</title>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	 <link rel="stylesheet" type="text/css" href="mystyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="container containerm">
<div class="text-center">
   <?php include("ytsearch.php"); ?>

<?php

if (isset($_GET['youtube_link'])) // On a le nom et le prénom
{
	$url = $_GET['youtube_link'];

	// Youtube ID extract
	preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
	$youtube_id = $match[1];
	?>

	<?php
	echo '<pre>ID is : ' .$match[1]. '</pre>';
	echo '<pre>URL of the thumbnail : http://img.youtube.com/vi/' .$match[1]. '/0.jpg</pre><br/>';
	
	
	echo '<img class="img-thumbnail" src="http://img.youtube.com/vi/' .$match[1]. '/0.jpg">';
	
	$number_youtube = 1;
	
	echo '<br/><br/><a class="btn btn-success" download="myimage" href="http://img.youtube.com/vi/' .$match[1]. '/maxresdefault.jpg" role="button"><i class="fa fa-download" aria-hidden="true"></i> Download the thumbnail</a>';
	
	echo '<br/><br/><div class="row">';
	
	while ($number_youtube <= 3)
	{
		echo '<div class="col-xs-6 col-md-4">
		<a class="thumbnail">
		<img class="img-thumbnail" src="http://img.youtube.com/vi/' .$match[1]. '/' .$number_youtube. '.jpg" alt="...">
		</a>
		</div>';
		$number_youtube++;
	}

	echo '</div></div>';

}

else // Il manque des paramètres, on avertit le visiteur
{
	
}
?>

</body>
</html>