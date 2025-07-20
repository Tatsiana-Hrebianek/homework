<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Профиль пользователя</title>
    </head>
    <body>
        <h1>Профиль пользователя</h1>
        <?php if(isset($users)): ?>
            <?php foreach ($users as $user): ?>
                <p>Имя: <?= htmlspecialchars($user['name']) ?></p>
                <p>Email: <?= htmlspecialchars($user['email'])?></p>
            <?php endforeach; ?>
        <?php endif; ?>
    </body>
</html>