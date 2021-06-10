<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Assets extends Model
{
    use HasFactory ;

    protected $table = "assets" ;

    protected $fillable = [
        'name',
        'description',
        'category',
        'supplier_id',
        'storage_id',
        'total_stocks'

    ];  
}
