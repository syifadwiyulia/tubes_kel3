<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Founds extends Model
{
    use HasFactory;
    protected $table = 'founds';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',  
        'photo',
        'items',
        'date_found',
        'description',
        'category',
        'brand',
        'where_found',
        'detail_loc',
    ];
}
