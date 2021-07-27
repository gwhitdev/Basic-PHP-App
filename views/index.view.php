<?php require('views/partials/head.php') ?>

<form method="POST"action="/addTask">

<input type="text"name="title">
<input type="text"name="description">

<button>Submit</button>

</form>

<form method="POST"action="/addUser">
<label for="name">Name:</label>
<input type="text"name="name">
<button>Create User</button>

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

<?php require('views/partials/footer.php') ?>