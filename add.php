<?php
	session_start();
	if(isset($_POST['add'])){
		//open xml file
		$movies = simplexml_load_file('files/movies.xml');
		$user = $movies->addChild('movie');
		$user->addChild('poster', $_POST['poster']);
		$user->addChild('title', $_POST['title']);
		$user->addChild('year', $_POST['year']);
		$user->addChild('genre', $_POST['genre']);
		$user->addChild('rating', $_POST['rating']);
		$user->addChild('id', uniqid());
		// Save to file
		// file_put_contents('files/members.xml', $users->asXML());
		// Prettify / Format XML and save
		$dom = new DomDocument();
		$dom->preserveWhiteSpace = false;
		$dom->formatOutput = true;
		$dom->loadXML($movies->asXML());
		$dom->save('files/movies.xml');
		// Prettify / Format XML and save

		$_SESSION['message'] = 'Movie added successfully';
		header('location: index.php');
	}
	else{
		$_SESSION['message'] = 'Fill up add form first';
		header('location: index.php');
	}

?>