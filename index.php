<?php 
	include 'header.php';
?>

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

  

 <div id="list-container">
    <input class="search" placeholder="Search">
    <button class="sort" data-sort="name">
      Sort by name
    </button>
    <ul class="buisList">

		<?php	
		$postTitles = getPostTitlesFromDatabase();
			foreach($postTitles as $postTitle) {
				echo "<li><a href='post.php?title=" . $postTitle . "' class='listItem'>" . $postTitle . "</a></li>";
			}
		?>
	 </ul>
  </div>

 
<div id="editor">
.a { background: #000; .b {
    color: #f00;
  }  
}
</div>

    

	
<?php include 'footer.php'; ?>
</body>
</html>