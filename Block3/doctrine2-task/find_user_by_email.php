<?php

require_once "bootstrap.php";

// Находим пользователя по email
// $user = $entityManager->getRepository(User::class)->findOneBy(['email' => 'ivan@example.com']);

// if ($user) {
//     echo "Посты пользователя " . $user->getName() . ":\n";
    
//     foreach ($user->getPosts() as $post) {
//         echo "- " . $post->getTitle() . ": " . $post->getContent() . "\n";
//     }
// } else {
//     echo "Пользователь не найден.";
// }

$post = $entityManager->getRepository(Post::class)->find(1);
echo $post->getUser()->getName();  
// ✅ Выводит имя автора поста

