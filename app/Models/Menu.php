<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';

    public $fillable = [
        'img',
        'name',
        'desc',
        'parent',
        'url',
    ];

    public $guarded = [];
}
