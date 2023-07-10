<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;

class Invoice extends Model
{
    use HasFactory, HasUuid;
    protected $fillable = [
        'user_id',
        'billed_to',
        'additional_comment',
        'service_fee',
        'consulting_fee',
        'other_fees',
        'total'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
