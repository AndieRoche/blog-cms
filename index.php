<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello World</title>
<script>
    alert("Hello World");
</script>
</head>

<body>
<?php 
	include 'header.php';
?>
	<div id="main">
<?php 

	function getPostTitlesFromDatabase() {
		// Get all the post titles from the posts table
		include_once 'db_connect.php';
		$sql = "SELECT title FROM blog_posts";
		$result = mysqli_query($conn, $sql);
		
		// Get each result row as an assoc array, then add title to $postTitles
		$postTitles = array();
		while($row = mysqli_fetch_assoc($result)){
			array_push($postTitles, $row['title']);
		}
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