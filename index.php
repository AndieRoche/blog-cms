<?php 
	include 'header.php';
?>
	<div id="main">
		<div class="sayHi">
			<button onclick="revealMessage()">Click Me!</button>
		</div>
		
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
?>
<div id="sortable-blog-list">
	<ul class="list">
	<input class="search" placeholder="Search" />
	<button class="sort" data-sort="title">Sort</button>
		<?php	
			foreach($postTitles as $postTitle) {
				echo "<li><a href='post.php?title=" . $postTitle . "' class='title'>" . $postTitle . "</a></li>";
			}
		?>
	</ul>
</div>

	
	
	</div>
	<div id="footer">
	
	</div>
</body>
</html>