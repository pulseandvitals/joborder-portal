<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;

class JobOrder extends Model
{
    use HasFactory,HasUuid;

    protected $fillable = [
        'performed_by',
        'work_description',
        'user_id',
        'job_order_no'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function quotation()
    {
        return $this->belongsTo(Quotation::class,'id','job_order_id');
    }
}
