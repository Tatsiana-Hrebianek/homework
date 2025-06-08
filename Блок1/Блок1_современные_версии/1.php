<?php

function getStatusMessage(string $status): string {
    return match($status) {
        'success' => 'Операция выполнена успешно',
        'error' => 'Произошла ошибка',
        'pending' => 'Операция в ожидании',
        default => 'Неизвестный статус',
    };
}

echo getStatusMessage('unknown');

function calculatePrice(float $basePrice, float $discount, float $tax): float{
    
    //цена со скидкой
    $discountPrice = $basePrice - ($basePrice*$discount/100);
    return $discountPrice + ($discountPrice*$tax/100);

}

echo calculatePrice(basePrice: 1000, discount: 10, tax: 5);
echo calculatePrice(tax: 5, discount: 10, basePrice: 2000);

