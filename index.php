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
		// Get the post title
		$postTitle = rawurldecode($_GET["title"]);
	
		// Get the post that matches the postTitle
		$sql = "SELECT * FROM blog_posts WHERE title='" . $postTitle . "'";
		$result = mysqli_query($conn, $sql);
	
		// Get the first row from the result as an associative array
		$postDetails = mysqli_fetch_assoc($result);
		return $postDetails;
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