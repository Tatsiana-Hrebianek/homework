<?php

declare(strict_types=1);

namespace App\Models;

require '../../vendor/autoload.php';

use App\Interfaces\Loggable;
use App\Traits\Logger;

class Order implements Loggable  {

    use Logger;  

}