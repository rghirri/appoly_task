<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Fruit extends Model
{
    use HasFactory;
    use HasRecursiveRelationships;


    // Traditional way
    public function scopeRoot($query)
    {
        $query->whereNull('parent_id');
    }

    public function children()
    {
        return $this->hasMany(Fruit::class, 'parent_id');
    }

}