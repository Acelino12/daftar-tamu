<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BukutamuEntry extends Model
{
    protected $fillable = [
        'name',
        'email',
        'message'
    ];

    protected $table = 'bukutamu_entries';
}
