<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rest extends Model
{

protected $table ='rest';
protected $fillable =['name','email','address'];
    use HasFactory;
}
