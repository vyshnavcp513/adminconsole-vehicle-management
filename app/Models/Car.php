<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Car extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'model_year',
        'description',
        'company',

    ];
    public function toggle(){
        return !$this->is_Active;
    }
}
