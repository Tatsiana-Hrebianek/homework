<?php

require_once 'database.php';
//require_once 'models/User.php';

use App3\EloquentDoctrineORM\Models\User;
use App3\EloquentDoctrineORM\models\Post;



// $user = new User();
// $user->name = "Иван";
// $user->email = "ivan2@example.com";
// $user->password = password_hash("secret", PASSWORD_BCRYPT);
// $user->save();

// ✅ Данные сохранены в базе

$post = Post::find(1);
echo $post->user->name;