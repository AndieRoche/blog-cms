<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Post</title>
</head>

<body>
<?php include 'header.php'; ?>
	<div id="main">
		<form method="post" action="submit-post.php">
		<label for="title">Title</label><br />
		<input type="text" name="title" />	<br /><br />
		<label for="author">Author</label><br />
		<input type="text" name="author" />	<br /><br />
		<label for="date">Date (YYY/MM/DD)</label><br />
		<input type="date" name="date" />	<br /><br />
		<label for="content">Post</label><br />
		<textarea name="content"></textarea><br /><br />
		<input type="submit" value="Submit">
		</form>
	
	</div>
	<div id="footer">
	
	</div>
</body>
</html>