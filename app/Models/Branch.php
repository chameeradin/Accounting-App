<?php

namespace App\Models;
use App\Models\Bank;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Branch extends Model
{
    use HasFactory;

    protected $fillable=[

        'bank_id',
        'branch_name',
        'branch_code',
        'telephone',
    ];

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }
}
