<?php

namespace App\Models;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    protected $fillable= [

        'bank_name',
        'bank_code',

    ];


    public function branch()
    {

        return $this->hasMany(Branch::class);
    }
}
