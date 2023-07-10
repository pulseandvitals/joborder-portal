<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;

class Quotation extends Model
{
    use HasFactory, HasUuid;
    protected $fillable = [
        'user_id',
        'cost',
        'job_order_id',
        'quotation_content',
        'scope',
        'deliver_in',
        'payment_terms'
    ];
}
