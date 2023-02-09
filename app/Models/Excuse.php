<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Excuse extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'stdID', 'date', 'details', 'by'];



}
