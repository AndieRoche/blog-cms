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
	function getPostTitlesFromDatabase() { 
			//TODO in Module 4
			// Get Data from database instead
			$postTitles = Array("Post 1","Post 2","Post 3");
			return $postTitles;
	}
	$postTitles = getPostTitlesFromDatabase();
		
	foreach($postTitles as $postTitle) {
		echo "<li><a href='post.php?title=" . $postTitle . "'>" . $postTitle . "</a></li>";
	}
?>	
	</div>
	<div id="footer">
	
	</div>
</body>
</html>