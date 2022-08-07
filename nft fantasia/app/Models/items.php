<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    use HasFactory;

    public $guarded = [];
    protected $table= 'items';
    protected $primaryKey='id';
    protected $fillable= [
        'name',
        'author',
        'genre',
        'price',
        'cost',
        'synopsis',
        'pic',
        'stock',
        'status',
    ];

    
}
