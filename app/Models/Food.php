<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table = 'food';
    protected $primarykey = 'id';
    public $timestamps = true;
    // protected $dateFormat = 'h:m:s';
    protected $fillable =['name', 'count', 'description'];

    // public function category() {
    //     return $this->belongsTo(Car::class);
    // }
}
