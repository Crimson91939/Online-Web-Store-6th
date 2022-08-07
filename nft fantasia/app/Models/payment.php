<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    public $guarded = [];
    protected $table= 'payments';
    protected $primaryKey='id';
    protected $fillable= [
        'buyerid',
        'itemid',
        'profit',
        'made',
        'costo',
        'secret_key',
    ];
}
