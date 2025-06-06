<?php

enum OrderStatus
{

    case Pending;
    case Shipped;
    case Delivered;
}


function getDeliveryMessage(OrderStatus $status): string
{
    return match ($status) {
        OrderStatus::Pending => 'Заказ в ожидании',
        OrderStatus::Shipped => 'Заказ отправлен',
        OrderStatus::Delivered => 'Заказ доставлен',
    };
}


echo getDeliveryMessage(OrderStatus::Pending);   // ✅ "Заказ в ожидании"
echo getDeliveryMessage(OrderStatus::Shipped);   // ✅ "Заказ отправлен"
echo getDeliveryMessage(OrderStatus::Delivered); // ✅ "Заказ доставлен"
