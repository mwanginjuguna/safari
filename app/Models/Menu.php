<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'branch_id'
    ];


    /**
     * it belongs to Branch::class
     */
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    /**
     * it has many dishes
     */
    public function dishes()
    {
        return $this->hasMany(Dish::class);
    }
}
