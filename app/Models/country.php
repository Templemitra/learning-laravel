<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    use HasFactory;
   
    protected $primaryKey = 'country_id'; // use if difference id name otherwise update error 
    public $timestamp=false;
}
