<?php
require_once("Blog.php");
$blog = new Blog("Jung", "He's such a Junghole");
?>
<html>
<head>
	<title></title>
</head>
<body>
<h1><?=$blog->title?></h1>
<div><?=$blog->description?></div>
</body>
</html>