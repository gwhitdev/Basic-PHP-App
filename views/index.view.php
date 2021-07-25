<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Index</title>
</head>
<body>

	<header>
		<h1>
			<ul>
				<?php foreach($tasks as $task ): ?>

					<li>
						<?php if($task->completed) : ?>
							<strike><?= $task->description; ?></strike>
						<?php else: ?>
							<?= $task->description; ?> 
						<?php endif; ?>
								
					</li>
				<?php endforeach; ?>
			</ul>
		</h1>
	</header>
</body>
</html>