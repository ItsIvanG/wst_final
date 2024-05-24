<?php
	session_start();
	$logFile = 'debug.log';
	if(isset($_POST['edit'])){
		$movies = simplexml_load_file('files/movies.xml');
		foreach($movies->movie as $movie){
			if($movie->id == $_POST['id']){
				$movie->title = $_POST['title'];
				$movie->poster = $_POST['poster'];
				$movie->year = $_POST['year'];
				$movie->genre = $_POST['genre'];
				$movie->rating = $_POST['rating'];
				logMessage('EDIT SUCCESS', 'info', $logFile);

				break;
			}
		}
		file_put_contents('files/movies.xml', $movies->asXML());
		$_SESSION['message'] = 'Movie updated successfully';


		logMessage('EDIT SUCCESS: '.$_POST['title'].' ID: '.$_POST['id'], 'info', $logFile);
		header('location: index.php');
	}
	else{
		$_SESSION['message'] = 'Select member to edit first';
		header('location: index.php');
	}

	function logMessage($message, $level = 'info', $file = 'debug.log') {
		// Define the log level prefixes and their corresponding colors
		$logLevels = array(
			'info' => '[INFO]',
			'warning' => '[WARNING]',
			'error' => '[ERROR]'
		);
	
		// Check if the log level is valid
		if (!array_key_exists($level, $logLevels)) {
			$level = 'info'; // Default to 'info' if the level is invalid
		}
	
		// Format the log message with timestamp and log level
		$formattedMessage = date('[Y-m-d H:i:s]') . ' ' . $logLevels[$level] . ' ' . $message . PHP_EOL;
	
		// Append the message to the log file
		file_put_contents($file, $formattedMessage, FILE_APPEND);
	}
?>