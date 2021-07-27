<?php require('../app/views/partials/head.php') ?>

<form method="POST"action="/addTask">
<input type="text"name="description">

<button>Submit</button>

</form>





<ul>
    <?php foreach($tasks as $task): ?>
        <?php if($task->completed == true): ?>
            <li><strike><?= $task->description ?></strike></li>
        <?php else: ?>
            <li><?= $task->description ?></li>
        <?php endif ?>
    <?php endforeach ?>
</ul>

<?php require('../app/views/partials/footer.php') ?>