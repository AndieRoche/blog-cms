<?php 
	include 'header.php';

	function getPostDetailsFromDatabase() {
		// Get the post title
		$postTitle = rawurldecode($_GET["title"]);
	
		// Get the post that matches the postTitle
		include_once 'db_connect.php';
		$sql = "SELECT * FROM blog_posts WHERE title='" . $postTitle . "'";
		$result = mysqli_query($conn, $sql);
	
		// Get the first row from the result as an associative array
		$postDetails = mysqli_fetch_assoc($result);
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