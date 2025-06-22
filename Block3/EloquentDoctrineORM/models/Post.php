<?php

declare(strict_types=1);

namespace App3\EloquentDoctrineORM\models;

use Illuminate\Database\Eloquent\Model;
use Doctrine\ORM\Mapping as ORM;

class Post extends Model {

    protected $table = 'posts';
    
    public $timestamps = false;

    public function user() {
        return $this->belongsTo(User::class);
    }

}