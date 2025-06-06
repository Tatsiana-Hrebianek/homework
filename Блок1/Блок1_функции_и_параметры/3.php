<?php
declare(strict_types = 1);

function orderPizza(string $size = "medium", string $crust = "thin", array $toppings = ["cheese"]): string {
    $toppingList = implode(", ", $toppings);
    return "Заказ: $size пицца на $crust тесте с $toppingList";
}

echo orderPizza();  
// ✅ "Заказ: medium пицца на тонком тесте с cheese"

echo orderPizza(size: "large", toppings: ["cheese", "pepperoni"]);  
// ✅ "Заказ: large пицца на тонком тесте с cheese, pepperoni"
