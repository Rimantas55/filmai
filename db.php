<?php

// CONNECTION TO DB

  $host =  'localhost';
  $user = 'root';
  $password = '';
  $dbname = 'movies';


  // Set DSN
  $dsn = 'mysql:host='. $host .';dbname='. $dbname;


  // Create a PDO instance
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

 # PRDO QUERY
   $stmt = $pdo->query('SELECT * FROM movie_table');
  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    //echo $row['movie_name'] . '<br>';
  }
   while($row = $stmt->fetch()){
     //return $row->movie_name . '<br>';
  }

  # GET ROW COUNT - NOT WORKING
  $nRows = $pdo->query('select count(*) from movie_table')->fetchColumn(); 

  function getRows($nRows){
  	for ($x = 1; $x <= $nRows; $x++) { 
  		return $x;
  	}
  }

  # INSERT (checking if working)
  if (isset($_POST['btn']) && !empty($_POST['movie']) && !empty($_POST['age']) && !empty($_POST['stage']) && !empty($_POST['date']) ) {
  	$movie_name = $_POST['movie'];
  	$age = $_POST['age'];
  	$stage = $_POST['stage'];
  	$time = $_POST['date'];
  	$sql = 'INSERT INTO movie_table(movie_name, age, stage, date) VALUES(:movie_name, :age, :stage, :date)';
  	$stmt = $pdo->prepare($sql);
  	$stmt->execute(['movie_name' => $movie_name, 'age' => $age, 'stage' => $stage, 'date' => $time]);

  	header('Location: addMovie.php');
  	return 'Post Added';
  } else {
  	return false;
  }