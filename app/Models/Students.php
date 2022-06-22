<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'OMRSRL_paper_1' => 'string',
        'OMRSRL_paper_2' => 'string'
    ];
}
