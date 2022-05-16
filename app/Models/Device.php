<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ops_devices';

    protected $fillable = [
        'client_slug',
        'batch',
        'wajib_pajak_id',
        'dev_id',
        'gsm',
        'method',
    ];

    // protected $casts = [
    //     'dev_created_at' => 'datetime',
    // ];

    public function wajibPajak()
    {
        return $this->belongsTo(WajibPajak::class);
    }
}
