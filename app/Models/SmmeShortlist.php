<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmmeShortlist extends Model
{
    use HasFactory;

    protected $table = "shortlists";
    public $timestamp = true;

    protected $fillable =
    [
        'first_name',
        'last_name',
        'startup_name',
        'service_product'
    ];
}
