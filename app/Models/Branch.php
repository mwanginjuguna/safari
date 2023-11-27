<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'phone', 'type'];

    /**
     * it has many menus Menu::class
     */
    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
