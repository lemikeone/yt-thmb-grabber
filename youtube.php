
<body>
<?php include("menu.php"); ?>
<div class="starter-template">
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
	
	echo '<br/><br/><a class="btn btn-success btn-lg" download="myimage" href="http://img.youtube.com/vi/' .$match[1]. '/maxresdefault.jpg" role="button">Download the thumbnail</a>';
	
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

	echo '</div>';

}

else // Il manque des paramètres, on avertit le visiteur
{
	
}
?>