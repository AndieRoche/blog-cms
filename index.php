<?php 
	include 'header.php';
?>

<div id="editor"></div>
		
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

	
?>

  

<div id="sortable-blog-list">	
<input class="search" placeholder="Search" />
  <button class="sort" data-sort="titlePost">Sort by title</button>


    <ul class="list">
		<?php	
		$postTitles = getPostTitlesFromDatabase();
			foreach($postTitles as $postTitle) {
				echo "<li><a href='post.php?title=" . $postTitle . "' class='titlePost'>" . $postTitle . "</a></li>";
			}
		?>
	</ul>
</div>



	
	<div id="footer">
	
	</div>
</body>
</html>