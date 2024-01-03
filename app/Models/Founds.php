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
        'contact',
        'where_found',
        'detail_loc',
        'keterangan'
    ];
    
    public function getPhoto()
    {
        if(!$this->photo){
            return asset('build/assets/img/black.jpeg');
        }
        return asset('img/'.$this->photo);
    }
}
