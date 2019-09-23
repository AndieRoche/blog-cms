<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello World</title>
</head>

<body>
<?php 
	include 'header.php';
?>
	<div id="main">
<?php 
	$function getPostTitleFromDatabase() { 
			//TODO in Module 4
			// Get Data from database instead
			$postTitles Array("Blog Post 1", "Blog Post 2", "Blog Post 3");
			return $postTitles;
	}
	$postTitles = tPostTitlesFromDatabase();
		
		foreach($postTitles as $postTitle) {
			echo "<li><a href='index.php'>" . $postTile . "</a></li>";
	}
?>	
	</div>
	<div id="footer">
	
	</div>
</body>
</html>