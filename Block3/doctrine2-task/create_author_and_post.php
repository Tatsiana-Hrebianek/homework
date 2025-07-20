<?php

require_once "bootstrap.php";

$user = new User();
$user->setName("Иван");
$user->setEmail("ivan@example.com");

$post1 = new Post();
$post1->setTitle("Первый пост");
$post1->setContent("Содержимое первого поста");
$post1->setUser($user); // установка автора

$post2 = new Post();
$post2->setTitle("Второй пост");
$post2->setContent("Содержимое второго поста");
$post2->setUser($user);

// Сохраняем
$entityManager->persist($user);
$entityManager->persist($post1);
$entityManager->persist($post2);
$entityManager->flush();

echo "Пользователь и посты успешно сохранены!";