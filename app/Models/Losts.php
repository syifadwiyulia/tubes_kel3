<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Losts extends Model
{
    use HasFactory;
    protected $table = 'losts';
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
