<?php
require_once("Blog.php");
$blog = new Blog("Jung", "He's such a Junghole");

$blog->addContent([
    'title' => 'asdfa',
    'dateline' => time(),
    'content' => 'fuck'
]);
?>
<html>
<head>
	<title></title>
</head>
<body>
<h1>
	<?=$blog->title?><br>
	<small><?=$blog->description?></small>
</h1>

<div class="blog">
    <?php foreach($blog->getAll() as $item): ?>
	<div class="item">
		<h3 class="title"><?=$item->title?></h3>
		<div class="dateline"><?=$item->dateline?></div>
		<div class="content"><?=$item->content?></div>
		<div class="comments">
			<div class="comment-item">
				<div class="author"></div>
				<div class="dateline"></div>
				<div class="comment-content"></div>
			</div>
		</div>
	</div>
    <?php endforeach; ?>
</div>
</body>
</html>