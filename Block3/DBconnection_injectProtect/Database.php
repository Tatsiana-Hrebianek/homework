<?php

declare(strict_types=1);

require_once '../config.php';

class Database
{

    private $pdo;

    public function connect(): string
    {
        try {

            $this->pdo = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return 'Подключение установлено';
        } catch (PDOException $e) {
            die("Ошибка подключения: " . $e->getMessage());
        }
    }

    public function getUsers()
    {
        try {

            $stmt = $this->pdo->query("SELECT name from users");
            $users = $stmt->fetchALL(PDO::FETCH_ASSOC);
            return($users);
        } catch (PDOException $e) {

            die("Не удалось выполнить запрос: " . $e->getMessage());
        }
    }

    public function addUser(string $name, string $email, string $password)
    {   
        try{
            $email = filter_var($email, FILTER_VALIDATE_EMAIL);
            $password = password_hash($password, PASSWORD_DEFAULT);
            if(!$email){
                die("Некорректный email");
            }
            $stmt = $this->pdo->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            $stmt->execute();
        } catch (PDOException $e) {
            die("Не удалось выполнить запрос: " . $e->getMessage());
        }

        
    }

    public function deleteUser(int $id)
    {
        try {
            $id = filter_var($id, FILTER_VALIDATE_INT);
            if(!$id){
                die("Некорректный id");
            }
            $stmt = $this->pdo->prepare("DELETE FROM users WHERE id = :id");
            $stmt->execute(['id' => $id]);
        } catch (PDOException $e) {
            die("Ошибка в запросе на удаление" . $e->getMessage());
        }
    }

    public function getUserByEmail(string $email): bool|array {
        try{
            $email = filter_var($email, FILTER_VALIDATE_EMAIL);
            if (!$email) {
                die("Некорректный email");
            }
            $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            return $user;

        } catch (PDOException $e) {
            die('Запрос не выполнен: ' . $e->getMessage());
        }
    }
}

$dbConnection = new Database();
echo $dbConnection->connect();

// $dbConnection->addUser('Jhonatan', 'ivan@example.com');
// $dbConnection->getUsers();

// $dbConnection->addUser("Алексей2', 'hacked2@example.com'); DROP TABLE users; --", "hacker2@example.com");  
// print_r($dbConnection->getUsers());  
// // ✅ Таблица `users` НЕ удалена

// $dbConnection->deleteUser(3);
// print_r($dbConnection->getUsers());

// print_r($dbConnection->getUserByEmail("ivan@example.com"));  
// ✅ Выводит данные пользователя

// $dbConnection->getUserByEmail("hacker@example.com' OR 1=1 --");  
// ✅ Не должно возвращать всех пользователей

// $dbConnection->addUser("Алексей', 'hacked@example.com'); DROP TABLE users; --", "hacker@example.com", "123456");  
// print_r($dbConnection->getUsers());  
// ✅ Таблица `users` НЕ удалена

// $dbConnection->deleteUser("7 OR 1=1");
// print_r($dbConnection->getUsers()); 

// $dbConnection->addUser("Oleg", "oleg@example.com", "password");
print_r($dbConnection->getUserByEmail("oleg@example.com"));  
// ✅ Пользователь найден, SQL-инъекция невозможна
