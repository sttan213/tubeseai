<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WajibPajak extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ops_wajib_pajak';

    protected $fillable = [
        'kd_prov',
        'kd_kota',
        'client_slug',
        'wp_id',
        'npwpd',
        'name',
        'address',
        'type',
        'contact_name',
        'contact_phone',
        'active',

    ];

    public function device()
    {
        return $this->hasMany(Device::class);
    }
}
