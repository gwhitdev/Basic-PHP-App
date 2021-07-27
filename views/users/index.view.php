<?php require('views/partials/head.php') ?>
<div>
    <h1>
        All Users
    </h1>
    <ul>
        <?php foreach($users as $user): ?>
            <li><?= $user->name ?></li>
        <?php endforeach ?>
    </ul>
</div>

<div>
    <h1>Add new user</h1>
    <form method="POST"action="/users/store">
        <label for="name">Name:</label>
        <input type="text"name="name">
        <button>Create User</button>
    </form>
</div>
<?php require('views/partials/footer.php') ?>