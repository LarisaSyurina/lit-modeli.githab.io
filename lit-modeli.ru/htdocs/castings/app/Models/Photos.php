<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    // use HasFactory;
	protected $primaryKey = 'id';
    protected $table = 'photos';
    protected $fillable = ['image'];
}
