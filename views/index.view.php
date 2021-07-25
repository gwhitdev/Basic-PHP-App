<?php require('views/partials/head.php') ?>


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
<?php require('views/partials/footer.php') ?>