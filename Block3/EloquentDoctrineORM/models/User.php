<?php

declare(strict_types=1);

namespace App3\EloquentDoctrineORM\Models;

use Illuminate\Database\Eloquent\Model;
use Doctrine\ORM\Mapping as ORM;

class User extends Model{  
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password'];

    public function posts() {
        return $this->hasMany(Post::class);
    }

}



