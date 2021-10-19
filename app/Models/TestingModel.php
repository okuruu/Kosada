<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestingModel extends Model
{
    use HasFactory;
    protected $table = 'testing';
    protected $fillable = ['DATA'];
}
