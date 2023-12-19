<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checkout extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'wisata_id',
        // 'card_id',
        // 'card_number',
        // 'expired',
        // 'cvc',
        // 'is_paid',
        
    ];
    
    // public function setExpiredAttribute($value)
    // {
    //     $this->attributes['expired'] = date('Y-m-t', strtotime($value));
    // }

    public function wisata(){
        return $this->belongsTo(Wisata::class, 'wisata_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}

