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
			<input type="text" name="title" />	
			<input type="text" name="author" />
			<input type="date" name="date" />
			<textarea name="content"></textarea>
		</form>
	
	</div>
	<div id="footer">
	
	</div>
</body>
</html>