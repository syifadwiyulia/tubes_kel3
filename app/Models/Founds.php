<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Founds extends Model
{
    use HasFactory;
    protected $table = 'found';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'photo',
        'items',
        'date_found',
        'time_found',
        'description',
        'category',
        'brand',
        'where_found',
        'detail_loc',
    ];
}
