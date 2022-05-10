<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bike extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable =[
        'name',
        'model_year',
        'description',
        'comany',

    ];

    public function isActive(){
        return !$this->is_active;
    }
}
