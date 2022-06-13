<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ketersediaan extends Model
{
    use HasFactory;
    protected $table = 'log_delivery_orders';

    protected $fillable = [
        'delivery_order',
        'date_send',
        'client_slug',
        'quantity',
        'kurir_agent',
        'shipment_number',
        'tracking',
        'instansi',
        'address',
        'nama_penerima',
        'no_hp',
        'staff_user_id',
        'sender_user_id',
    ];

    // public function pembelian()
    // {
    //     return $this->belongsTo(Pembelian::class, 'spk_no');
    // }

}

