<?php
	session_start();
	$id = $_GET['id'];

	$movies = simplexml_load_file('files/movies.xml');

	//we're are going to create iterator to assign to each user
	$index = 0;
	$i = 0;

	foreach($movies->movie as $movie){
		if($movie->id == $id){
			$index = $i;
			break;
		}
		$i++;
	}

	unset($movies->movie[$index]);
	file_put_contents('files/movies.xml', $movies->asXML());

	$_SESSION['message'] = 'Movie deleted successfully';
	header('location: index.php');

?>