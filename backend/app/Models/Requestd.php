<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requestd extends Model
{
    use HasFactory;
    protected $fillable = ['farmer_id','officer_id','problem','doubt','date','status'];
}
