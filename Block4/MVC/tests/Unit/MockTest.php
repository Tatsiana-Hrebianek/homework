<?php
namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Repositories\UserRepository;

class MockTest extends TestCase
{
    public function test_findUserByEmail_is_called()
    {
        // Создаём мок UserRepository
        $mock = $this->createMock(UserRepository::class);

        // Настраиваем ожидание вызова метода
        $mock->expects($this->once())  // Ожидаем, что вызовется ровно один раз
             ->method('findUserByEmail')
             ->with('test@example.com') // Ожидаем вызов с этим параметром
             ->willReturn(['Mocked User']); // Можно вернуть фейковые данные

        // Используем мок как будто это настоящий репозиторий
        $result = $mock->findUserByEmail('test@example.com');

        // Проверяем возвращаемое значение
        $this->assertEquals(['Mocked User'], $result);
    }
}