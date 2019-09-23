<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Post</title>
</head>

<body>
<?php 
	include 'header.php';

	function getPostDetailsFromDatabase() { 
			//TODO in Module 4
			// Get Data from database instead
			$postDetails = Array('title' => 'Post 1',
								'content' => 'My First Blog',
								'date' => '01/01/2019',
								'author' => 'Andie R',
								'content' => 'This is sample content.');
			return $postDetails;
	}
	$postDetails = getPostDetailsFromDatabase();
		

?>
	<div id="main">
		<h1><?php echo $postDetails["title"]; ?></h1>
		<div><?php echo $postDetails["author"]; ?></div>
		<div><?php echo $postDetails["date"]; ?>
		<p>
		<?php echo $postDetails["content"]; ?>
		</p>
		</div>
	
	</div>
	<div id="footer">
	
	</div>
</body>
</html>